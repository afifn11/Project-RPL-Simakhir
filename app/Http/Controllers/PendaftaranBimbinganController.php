<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class PendaftaranBimbinganController extends Controller
{
    public function index()
    {
        $bimbingans = Schedule::with(['user', 'document']) // Muat relasi user dan document
            ->where('type', 'bimbingan') // Hanya data bimbingan
            ->get();

        return view('dosen.pendaftaranBimbingan', compact('bimbingans'));
    }

    public function approve(Schedule $schedule)
    {
        $schedule->update(['status' => 'approved']);
        return redirect()->route('dosen.pendaftaranBimbingan.index')->with('success', 'Bimbingan disetujui.');
    }

    public function reject(Schedule $schedule)
    {
        $schedule->update(['status' => 'rejected']);
        return redirect()->route('dosen.pendaftaranBimbingan.index')->with('success', 'Bimbingan ditolak.');
    }
}
