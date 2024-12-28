<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display the profile of the authenticated user.
     */
    public function index()
    {
        $profile = Profile::where('user_id', Auth::id())->firstOrFail();
        return view('profiles.index', compact('profile'));
    }

    /**
     * Show the form for editing the user's profile.
     */
    public function edit($id)
    {
        $profile = Profile::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        return view('profiles.edit', compact('profile'));
    }

    /**
     * Update the user's profile.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:profiles,email,' . $id,
            'profile_photo' => 'nullable|image|max:2048', // Max 2MB
        ]);

        $profile = Profile::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        $profile->name = $request->name;
        $profile->email = $request->email;

        if ($request->hasFile('profile_photo')) {
            // Simpan foto profil di folder storage/app/public/profile_photos
            $path = $request->file('profile_photo')->store('profile_photos', 'public');
            $profile->profile_photo = $path;
        }

        $profile->save();

        return redirect()->route('profiles.index')->with('success', 'Profile updated successfully.');
    }
}
