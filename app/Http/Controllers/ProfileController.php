<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Menampilkan halaman profil.
     */
    public function show()
    {
        $profile = Profile::find(1); // Ganti dengan ID pengguna atau logika autentikasi
        return view('profiles.show', compact('profile'));
    }

    /**
     * Menampilkan form edit profil.
     */
    public function edit()
    {
        $profile = Profile::find(1); // Ganti dengan ID pengguna atau logika autentikasi
        return view('profiles.edit', compact('profile'));
    }

    /**
     * Memperbarui data profil.
     */
    public function update(Request $request)
    {
    $profile = Profile::find(1); // Sesuaikan dengan ID pengguna atau gunakan logika autentikasi

    $request->validate([
        'name' => 'nullable|string|max:255', // Nama boleh kosong
        'gender' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
    ]);

    $profile->update($request->only('name', 'gender', 'email', 'phone'));

    return redirect()->route('profiles.show')->with('success', 'Profil berhasil diperbarui!');
    }

}
