<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\JadwalBimbinganController;
use App\Http\Controllers\JadwalBimbinganMhsController;
use App\Http\Controllers\HasilPenilaianController;
use App\Http\Controllers\KelolaTugasController;
use App\Http\Controllers\PendaftaranSeminarController;
use App\Http\Controllers\PendaftaranBimbinganController;
use App\Http\Controllers\PenilaianSeminarController;
use App\Http\Controllers\UnggahDokumenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BackupDataController;
use App\Http\Controllers\DaftarSeminarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route untuk admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::post('/admin/users', [UserController::class, 'store'])->name('admin.store');
    Route::put('/admin/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/admin/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::get('/admin/kelolaPengguna', [AdminController::class, 'kelolaPengguna'])->name('admin.kelolaPengguna');
    // Jadwal Seminar
    Route::get('/admin/jadwalkanSeminar', [AdminController::class, 'jadwalkanSeminar'])->name('admin.jadwalkanSeminar');
    Route::post('/schedules', [ScheduleController::class, 'store'])->name('schedules.store');
    Route::put('/schedules/{id}', [ScheduleController::class, 'update'])->name('schedules.update');
    Route::delete('/schedules/{id}', [ScheduleController::class, 'destroy'])->name('schedules.destroy');
    // Backup Data
    Route::get('/admin/backupData', [AdminController::class, 'backupData'])->name('admin.backupData');
    Route::post('/admin/backupData', [BackupDataController::class, 'backupData'])->name('admin.backupData');
});

// Route untuk dosen
Route::middleware(['auth', 'role:dosen'])->group(function () {
    Route::get('/dosen/dashboard', [DosenController::class, 'index'])->name('dosen.dashboard');
    Route::get('/dosen/jadwal-bimbingan', [JadwalBimbinganController::class, 'index'])->name('schedules.index');
    Route::post('jadwal-bimbingan/store', [JadwalBimbinganController::class, 'store'])->name('dosen.jadwalBimbingan.store');
    // dosen/Pendaftaran Seminar
    Route::get('/dosen/pendaftaran-seminar', [PendaftaranSeminarController::class, 'index'])->name('dosen.pendaftaranSeminar.index');
    Route::post('/dosen/pendaftaran-seminar/{schedule}/approve', [PendaftaranSeminarController::class, 'approve'])->name('dosen.pendaftaranSeminar.approve');
    Route::post('/dosen/pendaftaran-seminar/{schedule}/reject', [PendaftaranSeminarController::class, 'reject'])->name('dosen.pendaftaranSeminar.reject');
    // Penilaian Seminar
    Route::get('/dosen/penilaian-seminar', [PenilaianSeminarController::class, 'index'])->name('dosen.penilaianSeminar');
    Route::post('/dosen/penilaian-seminar/{schedule}/grade', [PenilaianSeminarController::class, 'store'])->name('dosen.penilaian-seminar.grade');
    // pendaftaran bimbingan
    Route::get('/dosen/pendaftaran-bimbingan', [PendaftaranBimbinganController::class, 'index'])->name('dosen.pendaftaranBimbingan.index');
    Route::post('/dosen//pendaftaran-bimbingan/{schedule}/approve', [PendaftaranBimbinganController::class, 'approve'])->name('dosen.pendaftaranBimbingan.approve');
    Route::post('/dosen/pendaftaran-bimbingan/{schedule}/reject', [PendaftaranBimbinganController::class, 'reject'])->name('dosen.pendaftaranBimbingan.reject');
    // Untuk Dosen (Dosen dapat memberikan tugas)
    Route::get('dosen/berikanTugas', [KelolaTugasController::class, 'dosenIndex'])->name('dosen.berikanTugas.index');
    Route::post('dosen/kelolaTugas', [KelolaTugasController::class, 'store'])->name('dosen.kelolaTugas.store');
});

// Route untuk mahasiswa
Route::middleware(['auth', 'role:mahasiswa'])->group(function () {
    // Mahasiswa
    Route::get('/mahasiswa/dashboard', [MahasiswaController::class, 'index'])->name('mahasiswa.dashboard');
    Route::get('/mahasiswa/daftarSeminar', [DaftarSeminarController::class, 'index'])->name('mahasiswa.daftarSeminar.index');
    Route::post('/mahasiswa/daftarSeminar', [DaftarSeminarController::class, 'store'])->name('mahasiswa.daftarSeminar.store');
    Route::put('/mahasiswa/daftarSeminar/{seminar}', [DaftarSeminarController::class, 'update'])->name('mahasiswa.daftarSeminar.update');
    Route::delete('/mahasiswa/daftarSeminar/{seminar}', [DaftarSeminarController::class, 'destroy'])->name('mahasiswa.daftarSeminar.destroy');
    Route::get('/mahasiswa/hasilPenilaian', [HasilPenilaianController::class, 'index'])->name('mahasiswa.hasilPenilaian');
    Route::get('/{mahasiswaId}/jadwalBimbingan', [JadwalBimbinganMhsController::class, 'index'])->name('mahasiswa.jadwalBimbingan.index');
    Route::post('/{mahasiswaId}/jadwalBimbingan', [JadwalBimbinganMhsController::class, 'store'])->name('mahasiswa.jadwalBimbingan.store');
    Route::put('/{mahasiswaId}/jadwalBimbingan/{scheduleId}', [JadwalBimbinganMhsController::class, 'update'])->name('mahasiswa.jadwalBimbingan.update');
    Route::delete('/{mahasiswaId}/jadwalBimbingan/{scheduleId}', [JadwalBimbinganMhsController::class, 'destroy'])->name('mahasiswa.jadwalBimbingan.destroy');
    // Untuk Mahasiswa (Mahasiswa dapat mengelola tugas)
    Route::get('mahasiswa/kelolaTugas', [KelolaTugasController::class, 'mahasiswaIndex'])->name('mahasiswa.kelolaTugas.index');
    Route::put('mahasiswa/kelolaTugas/{task}', [KelolaTugasController::class, 'update'])->name('mahasiswa.kelolaTugas.update');
    Route::delete('mahasiswa/kelolaTugas/{task}', [KelolaTugasController::class, 'destroy'])->name('mahasiswa.kelolaTugas.destroy');
    Route::get('/mahasiswa/unggah-dokumen', [UnggahDokumenController::class, 'index'])->name('mahasiswa.unggahDokumen.index');
    Route::post('/mahasiswa/unggah-dokumen', [UnggahDokumenController::class, 'store'])->name('mahasiswa.unggahDokumen.store');
    Route::delete('/mahasiswa/unggah-dokumen/{document}', [UnggahDokumenController::class, 'destroy'])->name('mahasiswa.unggahDokumen.destroy');
    Route::get('/mahasiswa/unggah-dokumen/{document}/download', [UnggahDokumenController::class, 'download'])->name('documents.download');
    Route::get('mahasiswa/unggahDokumen/{document}/edit', [UnggahDokumenController::class, 'edit'])->name('mahasiswa.unggahDokumen.edit');
    Route::put('mahasiswa/unggahDokumen/{document}', [UnggahDokumenController::class, 'update'])->name('mahasiswa.unggahDokumen.update');
});

require __DIR__.'/auth.php';
