<?php

namespace App\Http\Controllers;
use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MaterialController extends Controller
{
    public function index()
    {
        $materials = Material::all();
        return view('materials.index', compact('materials'));
    }
    public function create()
    {
        $materials = Material::all();
        return view('materials.create', compact('materials'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'Massage' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $data = $request->only(['title', 'Massage']);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $data['image'] = $imagePath;
        }
    
        Material::create($data);
    
        return redirect()->route('materials.create')->with('success', 'Materi berhasil ditambahkan!');
    }
    public function show(string $id)
    {
        //
    }
    public function edit(Material $material)
    {
        return view('materials.edit', compact('material'));
    }
    public function update(Request $request, Material $material)
    {
        $request->validate([
            'title' => 'required',
            'Massage' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $data = $request->only(['title', 'Massage']);
        if ($request->hasFile('image')) {
            if ($material->image) {
                Storage::disk('public')->delete($material->image);
            }
    
            $imagePath = $request->file('image')->store('images', 'public');
            $data['image'] = $imagePath;
        }
    
        $material->update($data);
    
        return redirect()->route('materials.create')->with('success', 'Materi berhasil diperbarui!');
    }
    public function destroy(Material $material)
    {
        $material->delete();
        return redirect()->route('materials.create')->with('success', 'Materi berhasil dihapus!');
    }
}
