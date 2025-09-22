<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TentangElrahma;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TentangElrahmaController extends Controller
{
    public function index()
    {
        $data = TentangElrahma::latest()->paginate(10);
        return view('admin.tentang_elrahma.index', compact('data'));
    }

    public function create()
    {
        return view('admin.tentang_elrahma.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'link' => 'nullable|string',
        ]);

        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('tentang_elrahma', 'public');
        }

        TentangElrahma::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarPath,
            'link' => $request->link,
        ]);

        return redirect()->route('admin.tentang_elrahma.index')
                         ->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit(TentangElrahma $tentangElrahma)
    {
        return view('admin.tentang_elrahma.edit', compact('tentangElrahma'));
    }

    public function update(Request $request, TentangElrahma $tentangElrahma)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'link' => 'nullable|string',
        ]);

        $gambarPath = $tentangElrahma->gambar;
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('tentang_elrahma', 'public');
        }

        $tentangElrahma->update([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarPath,
            'link' => $request->link,
        ]);

        return redirect()->route('admin.tentang_elrahma.index')
                         ->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy(TentangElrahma $tentangElrahma)
    {
        $tentangElrahma->delete();
        return redirect()->route('admin.tentang_elrahma.index')
                         ->with('success', 'Data berhasil dihapus!');
    }
}
