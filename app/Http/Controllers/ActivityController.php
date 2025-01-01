<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    // Tampilkan semua aktivitas (index)
    public function index()
    {
        $activities = Activity::orderBy('activity_time', 'desc')->get();
        return view('activities.index', compact('activities'));
    }

    // Form untuk tambah aktivitas baru (create)
    public function create()
    {
        return view('activities.create');
    }

    // Simpan aktivitas baru ke database (store)
    public function store(Request $request)
    {
        $request->validate([
            'activity_type' => 'required|in:lesson,quiz,feedback,forum',
            'description' => 'required|string|max:255',
            'activity_time' => 'required|date',
        ]);

        Activity::create([
            'activity_type' => $request->activity_type,
            'description' => $request->description,
            'activity_time' => $request->activity_time,
        ]);

        return redirect()->route('activities.index')->with('success', 'Aktivitas berhasil ditambahkan');
    }

    // Form edit aktivitas (edit)
    public function edit($id)
    {
        $activity = Activity::findOrFail($id);
        return view('activities.edit', compact('activity'));
    }

    // Update aktivitas (update)
    public function update(Request $request, $id)
    {
        $request->validate([
            'activity_type' => 'required|in:lesson,quiz,feedback,forum',
            'description' => 'required|string|max:255',
            'activity_time' => 'required|date',
        ]);

        $activity = Activity::findOrFail($id);
        $activity->update($request->only(['activity_type', 'description', 'activity_time']));

        return redirect()->route('activities.index')->with('success', 'Aktivitas berhasil diperbarui');
    }

    // Hapus aktivitas (destroy)
    public function destroy($id)
    {
        $activity = Activity::findOrFail($id);
        $activity->delete();

        return redirect()->route('activities.index')->with('success', 'Aktivitas berhasil dihapus');
    }
}
