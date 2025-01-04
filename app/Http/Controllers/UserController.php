<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // Ambil semua data pengguna
        $users = User::all();
        return view('admin.kelolaPengguna', compact('users'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:admin,dosen,mahasiswa',
        ]);

        // Simpan data ke database
        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => $validated['role'],
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('admin.kelolaPengguna')->with('success', 'Pengguna berhasil ditambahkan.');
    }


    public function edit($id)
    {
        // Ambil data pengguna untuk diedit
        $user = User::findOrFail($id);
        return view('admin.editPengguna', compact('user'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        // Cari pengguna berdasarkan ID
        $user = User::findOrFail($id);

        // Update data pengguna
        $user->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $request->password ? Hash::make($request->password) : $user->password,
        ]);

        return redirect()->route('admin.kelolaPengguna')->with('success', 'Pengguna berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Hapus pengguna berdasarkan ID
        User::findOrFail($id)->delete();
        return redirect()->route('admin.kelolaPengguna')->with('success', 'Pengguna berhasil dihapus.');
    }
}
