<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Models\Schedule;
use Illuminate\Http\Request;

class PenilaianSeminarController extends Controller
{
    public function index()
    {
        $seminars = Schedule::with(['user', 'result'])->where('type', 'seminar')->get();
        return view('dosen.penilaianSeminar', compact('seminars'));
    }

    public function store(Request $request, Schedule $schedule)
    {
        $request->validate([
            'score' => 'required|numeric|min:0|max:100',
            'comments' => 'nullable|string',
        ]);

        Result::updateOrCreate(
            [
                'schedule_id' => $schedule->id,
                'user_id' => $schedule->user_id,
            ],
            [
                'score' => $request->score,
                'comments' => $request->comments,
            ]
        );

        return redirect()->route('dosen.penilaianSeminar')->with('success', 'Penilaian berhasil disimpan.');
    }


}
