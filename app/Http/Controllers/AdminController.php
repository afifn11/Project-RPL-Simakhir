<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $userCount = User::count(); // Jumlah pengguna
        $scheduleCount = Schedule::count(); // Jumlah jadwal

        return view('admin.dashboard', compact('userCount', 'scheduleCount'));
    }

    public function kelolaPengguna()
    {
        $users = User::all();
        return view('admin.kelolaPengguna', compact('users'));
    }

    public function jadwalkanSeminar()
    {
        $schedules = Schedule::with('user')->get(); // Include relasi user
        $users = User::all();
        return view('admin.jadwalkanSeminar', compact('schedules', 'users'));
    }
    
    public function backupData() {
        return view('admin.backupData');
    }
    
}
