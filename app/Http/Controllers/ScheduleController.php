<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\User;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    // Menyimpan jadwal seminar baru
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'date' => 'required|date',
            'time' => 'required',
            'location' => 'required|string|max:255',
            'type' => 'required|in:bimbingan,seminar,ujian',
        ]);

        Schedule::create($request->all());

        return redirect()->route('admin.jadwalkanSeminar')->with('success', 'Jadwal berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
{
    // Validasi input
    $request->validate([
        'user_id' => 'required|exists:users,id',
        'date' => 'required|date',
        'time' => 'required', // Perbaikan: 'time' tidak ada validasi bawaan untuk format waktu
        'location' => 'required|string|max:255',
        'type' => 'required|in:bimbingan,seminar,ujian',
    ]);

    // Cari jadwal seminar berdasarkan ID
    $schedule = Schedule::findOrFail($id);

    // Update data
    $schedule->update([
        'user_id' => $request->user_id,
        'date' => $request->date,
        'time' => $request->time,
        'location' => $request->location,
        'type' => $request->type,
    ]);

    // Redirect kembali dengan pesan sukses
    return redirect()->route('admin.jadwalkanSeminar')->with('success', 'Jadwal berhasil diperbarui.');
}


    // Menghapus jadwal seminar
    public function destroy($id)
    {
        Schedule::findOrFail($id)->delete();
        return redirect()->route('admin.jadwalkanSeminar')->with('success', 'Jadwal berhasil dihapus.');
    }
}
