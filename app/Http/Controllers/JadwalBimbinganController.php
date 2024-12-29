<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\User;
use Illuminate\Http\Request;

class JadwalBimbinganController extends Controller
{
    public function index()
    {
        // Ambil semua jadwal bimbingan
        $schedules = Schedule::with('user')->where('type', 'bimbingan')->get();

        return view('dosen.jadwalBimbingan', compact('schedules'));
    }

    public function create()
    {
        // Ambil daftar mahasiswa untuk dropdown
        $students = User::all(); // Mengasumsikan tabel `users` sudah ada
        return view('dosen.tambahJadwal', compact('students'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'date' => 'required|date',
            'time' => 'required',
            'location' => 'required|string|max:255',
            'note' => 'nullable|string|max:500',
        ]);

        Schedule::create([
            'user_id' => $request->user_id,
            'date' => $request->date,
            'time' => $request->time,
            'location' => $request->location,
            'type' => 'bimbingan',
            'note' => $request->note,
            'status' => 'scheduled',
        ]);

        return redirect()->route('dosen.jadwalBimbingan.index')
            ->with('success', 'Jadwal bimbingan berhasil dibuat.');
    }
}
