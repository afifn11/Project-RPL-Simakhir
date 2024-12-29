<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BackupDataController extends Controller
{
    public function backupData()
    {
        // Ambil semua data dari tabel users
        $users = User::all();

        // Tentukan nama file backup dengan format JSON
        $fileName = 'backup_users_' . now()->format('Y-m-d_H-i-s') . '.json';

        // Simpan data users dalam format JSON
        $filePath = storage_path('app/' . $fileName);
        file_put_contents($filePath, $users->toJson());

        // Kembalikan file JSON untuk diunduh
        return response()->download($filePath)->deleteFileAfterSend();
    }
}
