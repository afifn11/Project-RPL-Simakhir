<?php

namespace App\Http\Controllers;

use App\Models\Schedule;  // Pastikan menggunakan model Schedule
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DaftarBimbinganController extends Controller
{
    // Menampilkan daftar bimbingan berdasarkan mahasiswa yang login
    public function index()
    {
        $user = Auth::user(); // Mendapatkan user yang sedang login
        $bimbingans = Schedule::where('user_id', $user->id)->get(); // Ambil bimbingan milik mahasiswa yang login

        return view('mahasiswa.daftarBimbingan', compact('bimbingans'));
    }
}
