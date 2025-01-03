<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Document;
use App\Models\Result;
use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;

class MahasiswaController extends Controller
{
    public function index()
    {
        $userId = Auth::id(); // ID mahasiswa yang sedang login

        // Jumlah daftar seminar
        $jumlahSeminar = Schedule::where('user_id', $userId)->where('type', 'seminar')->count();

        // Jumlah jadwal bimbingan
        $jumlahJadwalBimbingan = Schedule::where('user_id', $userId)->where('type', 'bimbingan')->count();

        // Jumlah jadwal bimbingan
        $jumlahJadwalSeminar = Schedule::where('user_id', $userId)->where('type', 'seminar')->count();

        // Jumlah hasil penilaian
        $jumlahHasilPenilaian = Result::where('user_id', $userId)->count();

        // Jumlah tugas
        $jumlahTugas = Task::where('user_id', $userId)->count();

        // Jumlah unggah dokumen
        $jumlahDokumen = Document::where('user_id', $userId)->count();

        return view('mahasiswa.dashboard', compact(
            'jumlahSeminar',
            'jumlahJadwalBimbingan',
            'jumlahHasilPenilaian',
            'jumlahTugas',
            'jumlahDokumen'
        ));
    }
}
