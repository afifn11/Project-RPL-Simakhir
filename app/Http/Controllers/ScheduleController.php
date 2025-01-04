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
        $request->validate([
            'date' => 'required|date',
            'time' => 'required',
            'location' => 'required|string|max:255',
            'type' => 'required|in:bimbingan,seminar,ujian',
        ]);

        $schedule = Schedule::findOrFail($id);
        $schedule->update([
            'date' => $request->input('date'),
            'time' => $request->input('time'),
            'location' => $request->input('location'),
            'type' => $request->input('type'),
        ]);

        return redirect()->route('admin.jadwalkanSeminar')->with('success', 'Jadwal berhasil diperbarui.');
    }


    // Menghapus jadwal seminar
    public function destroy($id)
    {
        $schedule = Schedule::findOrFail($id);
        $schedule->delete();

        return redirect()->route('admin.jadwalkanSeminar')->with('success', 'Jadwal berhasil dihapus.');
    }
}
