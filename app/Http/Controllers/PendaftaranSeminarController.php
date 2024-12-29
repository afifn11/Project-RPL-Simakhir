<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Document;
use Illuminate\Http\Request;

class PendaftaranSeminarController extends Controller
{
    public function index()
    {
        $seminars = Schedule::with(['user', 'document']) // Muat relasi user dan document
            ->where('type', 'seminar',)
            ->get();

        return view('dosen.pendaftaranSeminar', compact('seminars'));
    }

    public function approve(Schedule $schedule)
    {
        $schedule->update(['status' => 'approved']);
        return redirect()->route('dosen.pendaftaranSeminar.index')->with('success', 'Seminar disetujui.');
    }

    public function reject(Schedule $schedule)
    {
        $schedule->update(['status' => 'rejected']);
        return redirect()->route('dosen.pendaftaranSeminar.index')->with('success', 'Seminar ditolak.');
    }
}
