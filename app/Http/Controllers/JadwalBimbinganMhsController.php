<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class JadwalBimbinganMhsController extends Controller
{
    public function index($mahasiswaId)
    {
        $schedules = Schedule::where('user_id', $mahasiswaId)
            ->where('type', 'bimbingan')
            ->get();

        return view('mahasiswa.jadwalBimbingan', compact('schedules', 'mahasiswaId'));
    }

    public function store(Request $request, $mahasiswaId)
    {
        $validated = $request->validate([
            'date' => 'required|date',
            'time' => 'required',
            'location' => 'required|string|max:255',
            'note' => 'nullable|string|max:500',
        ]);

        Schedule::create(array_merge($validated, [
            'user_id' => $mahasiswaId,
            'type' => 'bimbingan',
            'status' => 'pending',
        ]));

        return redirect()->route('mahasiswa.jadwalBimbingan.index', $mahasiswaId)
            ->with('success', 'Jadwal bimbingan berhasil ditambahkan.');
    }

    public function update(Request $request, $mahasiswaId, $scheduleId)
    {
        $validated = $request->validate([
            'date' => 'required|date',
            'time' => 'required',
            'location' => 'required|string|max:255',
            'note' => 'nullable|string|max:500',
        ]);

        $schedule = Schedule::where('user_id', $mahasiswaId)->findOrFail($scheduleId);
        $schedule->update($validated);

        return redirect()->route('mahasiswa.jadwalBimbingan.index', $mahasiswaId)
            ->with('success', 'Jadwal bimbingan berhasil diperbarui.');
    }

    public function destroy($mahasiswaId, $scheduleId)
    {
        $schedule = Schedule::where('user_id', $mahasiswaId)->findOrFail($scheduleId);
        $schedule->delete();

        return redirect()->route('mahasiswa.jadwalBimbingan.index', $mahasiswaId)
            ->with('success', 'Jadwal bimbingan berhasil dihapus.');
    }
}
