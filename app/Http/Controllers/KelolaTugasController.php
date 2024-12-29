<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use App\Http\Policies\TaskPolicy;
use Illuminate\Http\Request;

class KelolaTugasController extends Controller
{
    // Dosen dapat memberikan tugas kepada mahasiswa
    public function dosenIndex()
    {
        $students = User::where('role', 'mahasiswa')->get();
        return view('dosen.berikanTugas', compact('students'));
    }

    // Menyimpan tugas yang diberikan oleh dosen
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'deadline' => 'required|date|after_or_equal:today',
        ]);

        Task::create([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'description' => $request->description,
            'deadline' => $request->deadline,
            'status' => 'pending',
        ]);

        return redirect()->route('dosen.berikanTugas.index')->with('success', 'Tugas berhasil diberikan.');
    }

    // Mahasiswa dapat melihat tugas yang diberikan kepada mereka
    public function mahasiswaIndex()
    {
        $tasks = Task::where('user_id', auth()->id())->get();
        return view('mahasiswa.kelolaTugas', compact('tasks'));
    }

    // Update tugas (untuk mahasiswa memperbarui status)
    public function update(Request $request, Task $task)
    {
        // Pengecekan manual: Pastikan yang mengakses adalah pemilik tugas
        if ($task->user_id !== auth()->id()) {
            // Jika bukan pemilik, tampilkan pesan error atau redirect
            return redirect()->route('mahasiswa.kelolaTugas.index')
                             ->with('error', 'Anda tidak memiliki akses untuk mengubah tugas ini.');
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'deadline' => 'required|date|after_or_equal:today',
            'status' => 'required|in:pending,completed',
        ]);

        $task->update($request->all());

        return redirect()->route('mahasiswa.kelolaTugas.index')
                         ->with('success', 'Tugas berhasil diperbarui.');
    }

    // Hapus tugas (hanya dapat dihapus oleh pemiliknya)
    public function destroy(Task $task)
    {
        // Pengecekan manual: Pastikan yang mengakses adalah pemilik tugas
        if ($task->user_id !== auth()->id()) {
            // Jika bukan pemilik, tampilkan pesan error atau redirect
            return redirect()->route('mahasiswa.kelolaTugas.index')
                             ->with('error', 'Anda tidak memiliki akses untuk menghapus tugas ini.');
        }

        $task->delete();

        return redirect()->route('mahasiswa.kelolaTugas.index')
                         ->with('success', 'Tugas berhasil dihapus.');
    }
}
