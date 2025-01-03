<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DaftarSeminarController extends Controller
{
    // Menampilkan daftar seminar berdasarkan mahasiswa yang login
    public function index()
    {
        $user = Auth::user(); // Mendapatkan user yang sedang login
        $seminars = Schedule::where('user_id', $user->id)
                            ->where('type', 'seminar')  // Filter untuk seminar
                            ->get(); // Ambil seminar milik mahasiswa yang login

        return view('mahasiswa.daftarSeminar', compact('seminars'));
    }
}
