<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class JadwalBimbinganMhsController extends Controller
{
    public function index($mahasiswaId)
    {
        // Ambil jadwal bimbingan berdasarkan ID mahasiswa
        $schedules = Schedule::where('user_id', $mahasiswaId)
            ->where('type', 'bimbingan')
            ->get();

        return view('mahasiswa.jadwalBimbingan', compact('schedules', 'mahasiswaId'));
    }

    public function store(Request $request, $mahasiswaId)
    {
        // Validasi input
        $request->validate([
            'date' => 'required|date',
            'time' => 'required',
            'location' => 'required|string|max:255',
            'note' => 'nullable|string|max:500',
        ]);

        // Simpan jadwal baru
        Schedule::create([
            'user_id' => $mahasiswaId,
            'date' => $request->date,
            'time' => $request->time,
            'location' => $request->location,
            'type' => 'bimbingan',
            'note' => $request->note,
            'status' => 'pending',
        ]);

        return redirect()->route('mahasiswa.jadwalBimbingan.index', $mahasiswaId)
            ->with('success', 'Jadwal bimbingan berhasil ditambahkan.');
    }

    public function update(Request $request, $mahasiswaId, $scheduleId)
    {
        // Validasi input
        $request->validate([
            'date' => 'required|date',
            'time' => 'required',
            'location' => 'required|string|max:255',
            'note' => 'nullable|string|max:500',
        ]);

        // Update jadwal
        $schedule = Schedule::where('user_id', $mahasiswaId)->findOrFail($scheduleId);
        $schedule->update([
            'date' => $request->date,
            'time' => $request->time,
            'location' => $request->location,
            'note' => $request->note,
        ]);

        return redirect()->route('mahasiswa.jadwalBimbingan.index', $mahasiswaId)
            ->with('success', 'Jadwal bimbingan berhasil diperbarui.');
    }

    public function destroy($mahasiswaId, $scheduleId)
    {
        // Hapus jadwal
        $schedule = Schedule::where('user_id', $mahasiswaId)->findOrFail($scheduleId);
        $schedule->delete();

        return redirect()->route('mahasiswa.jadwalBimbingan.index', $mahasiswaId)
            ->with('success', 'Jadwal bimbingan berhasil dihapus.');
    }
}
