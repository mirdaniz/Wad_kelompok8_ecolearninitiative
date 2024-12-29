<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {
        $forums = Forum::all();
        return view('forum.index', compact('forums'));
    }

    public function create()
    {
        return view('forum.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'subject' => 'required|string|max:255',
            'message' => 'required|text',
        ]);

        // Sesuaikan nama field dengan kolom di database
        Forum::create([
            'subject' => $validated['subject'], // Gunakan nama kolom database
            'message' => $validated['message'],
        ]);

        return redirect()->route('forum.index')->with('success', 'Forum berhasil dibuat!');
    }

    public function show(Forum $forum)
    {
        return view('forum.show', compact('forum'));
    }

    public function edit(Forum $forum)
    {
        return view('forum.edit', compact('forum'));
    }

    public function update(Request $request, Forum $forum)
    {
        // Validasi input
        $validated = $request->validate([
            'subject' => 'required|string|max:255',
            'message' => 'required|text',
        ]);

        // Sesuaikan nama field dengan kolom di database
        $forum->update([
            'subject' => $validated['subject'], // Gunakan nama kolom database
            'message' => $validated['message'],
        ]);

        return redirect()->route('forum.index')->with('success', 'Forum berhasil di update!');
    }

    public function destroy(Forum $forum)
    {
        $forum->delete();

        return redirect()->route('forum.index')->with('success', 'Forum berhasil dihapus!');
    }
}
