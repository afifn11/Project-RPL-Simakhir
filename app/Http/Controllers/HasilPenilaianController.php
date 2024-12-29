<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;

class HasilPenilaianController extends Controller
{
    public function index()
    {
        // Ambil hasil penilaian berdasarkan user yang sedang login
        $results = Result::with(['schedule'])
            ->where('user_id', auth()->id())
            ->get();

        return view('mahasiswa.hasilPenilaian', compact('results'));
    }
}
