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
        $schedules = Schedule::with('user')
            ->where('type', 'bimbingan')
            ->orderBy('date', 'asc')
            ->get();

        // Ambil daftar mahasiswa untuk dropdown
        $students = User::where('role', 'mahasiswa')->get();

        return view('dosen.jadwalBimbingan', compact('schedules', 'students'));
    }
}

