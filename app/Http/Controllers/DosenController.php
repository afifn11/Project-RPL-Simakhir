<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Task;
use App\Models\Result;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        // Hitung jumlah seluruh data
        $jumlahJadwalBimbingan = Schedule::where('type', 'bimbingan')->count();
        $jumlahSeminar = Schedule::where('type', 'seminar')->count();
        $jumlahPenilaian = Result::count();
        $jumlahBerikanTugas = Task::count();

        // Pass data ke view
        return view('dosen.dashboard', compact('jumlahJadwalBimbingan', 'jumlahSeminar', 'jumlahPenilaian', 'jumlahBerikanTugas'));
    }
}
