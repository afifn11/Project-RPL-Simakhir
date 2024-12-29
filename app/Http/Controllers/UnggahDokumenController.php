<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UnggahDokumenController extends Controller
{
    public function index()
    {
        $documents = Document::where('user_id', auth()->id())->get();
        return view('mahasiswa.unggahDokumen', compact('documents'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $filePath = $request->file('file')->store('documents');

        Document::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'file_path' => $filePath,
        ]);

        return redirect()->route('mahasiswa.unggahDokumen.index')
            ->with('success', 'Dokumen berhasil diunggah.');
    }

    public function update(Request $request, Document $document)
    {
        // Pastikan dokumen milik pengguna yang login
        if ($document->user_id !== auth()->id()) {
            return redirect()->route('mahasiswa.unggahDokumen.index')
                ->with('error', 'Anda tidak memiliki izin untuk mengedit dokumen ini.');
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        // Update title
        $document->title = $request->title;

        // Update file jika ada
        if ($request->hasFile('file')) {
            Storage::delete($document->file_path); // Hapus file lama
            $filePath = $request->file('file')->store('documents'); // Simpan file baru
            $document->file_path = $filePath;
        }

        $document->save();

        return redirect()->route('mahasiswa.unggahDokumen.index')
            ->with('success', 'Dokumen berhasil diperbarui.');
    }

    public function destroy(Document $document)
    {
        if ($document->user_id !== auth()->id()) {
            return redirect()->route('mahasiswa.unggahDokumen.index')
                ->with('error', 'Anda tidak memiliki izin untuk menghapus dokumen ini.');
        }

        Storage::delete($document->file_path);
        $document->delete();

        return redirect()->route('mahasiswa.unggahDokumen.index')
            ->with('success', 'Dokumen berhasil dihapus.');
    }

    public function download(Document $document)
    {
        if ($document->user_id !== auth()->id()) {
            return redirect()->route('mahasiswa.unggahDokumen.index')
                ->with('error', 'Anda tidak memiliki izin untuk mengunduh dokumen ini.');
        }

        return Storage::download($document->file_path);
    }
}
