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
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        Forum::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);

        return redirect()->route('forum.index')->with('success', 'Forum berhasil dibuat');
    }

    public function edit($id)
    {
        $forum = Forum::findOrFail($id);
        return view('forum.edit', compact('forum'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Cari forum yang ingin diupdate
        $forum = Forum::findOrFail($id);

        // Cek apakah ada perubahan pada data
        $isUpdated = false;

        if ($forum->title !== $request->input('title')) {
            $forum->title = $request->input('title');
            $isUpdated = true;
        }

        if ($forum->content !== $request->input('content')) {
            $forum->content = $request->input('content');
            $isUpdated = true;
        }

        // Jika ada perubahan, update data, jika tidak beri pesan
        if ($isUpdated) {
            $forum->save();
            return redirect()->route('forum.index')->with('success', 'Forum berhasil diperbarui');
        } else {
            // Jika tidak ada perubahan, beri notifikasi
            return redirect()->back()->with('info', 'Tidak ada perubahan untuk diupdate. Silakan ubah data terlebih dahulu.');
        }
    }

    public function destroy($id)
    {
        $forum = Forum::findOrFail($id);
        $forum->delete();
        return redirect()->route('forum.index')->with('success', 'Forum berhasil dihapus');
    }
}
