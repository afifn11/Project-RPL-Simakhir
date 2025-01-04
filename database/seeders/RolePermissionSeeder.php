<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        // Hapus cache Spatie Permission
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Permissions
        $permissions = [
            'akses dashboard admin',
            'kelola pengguna',
            'jadwalkan seminar',
            'backup data',
            'akses dashboard dosen',
            'lihat jadwal bimbingan',
            'setujui tolak seminar',
            'menilai seminar',
            'akses dashboard mahasiswa',
            'kelola tugas skripsi',
            'unggah dokumen',
            'daftar seminar',
            'lihat hasil penilaian',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Roles dan Assign Permissions
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $adminRole->givePermissionTo(['akses dashboard admin','kelola pengguna', 'jadwalkan seminar', 'backup data']);

        $dosenRole = Role::firstOrCreate(['name' => 'dosen']);
        $dosenRole->givePermissionTo(['akses dashboard dosen', 'lihat jadwal bimbingan', 'setujui tolak seminar', 'menilai seminar']);

        $mahasiswaRole = Role::firstOrCreate(['name' => 'mahasiswa']);
        $mahasiswaRole->givePermissionTo(['akses dashboard mahasiswa','kelola tugas skripsi', 'unggah dokumen', 'lihat jadwal bimbingan', 'daftar seminar', 'lihat hasil penilaian']);

        // Assign roles to example users
        \App\Models\User::find(1)->assignRole('admin');
        \App\Models\User::find(2)->assignRole('dosen');
        \App\Models\User::find(3)->assignRole('mahasiswa');
        \App\Models\User::find(4)->assignRole('mahasiswa');
        \App\Models\User::find(14)->assignRole('mahasiswa');
        \App\Models\User::find(15)->assignRole('mahasiswa');
        \App\Models\User::find(16)->assignRole('mahasiswa');
        \App\Models\User::find(17)->assignRole('mahasiswa');
    }
}
