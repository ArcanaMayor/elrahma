<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $infos = Info::with('kategori')->latest()->get();
        return view('infos.index', compact('infos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoris = Kategori::all();
        return view('infos.create', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kategori_id' => 'required|exists:kategoris,id',
            'judul' => 'required|string|max:255',
            'isi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $reqeust->only('kategori_id', 'judul', 'isi');

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('gambar_info', 'public');
        }
        
        Info::create($data);

        return redirect()->route('infos.index')->with('success', 'Info berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Info $info)
    {
    // Tambah 1 ke jumlah views
        $info->increment('views');

        return view('infos.show', compact('info'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategoris = Kategori::all();
        return view('infos.edit', compact('info', 'kategoris'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kategori_id' => 'required|exists:kategoris,id',
            'judul' => 'required|string|max:225',
            'isi' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->only('kategori_id', 'judul', 'isi');

        if ($request->hasFile('gambar')) {
            // hapus gambar lama
            if ($info->gambar) {
                Storage::disk('public')->delete($info->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('gambar_info', 'public');
        }

        $info->update($data);

        return redirect()->route('infos.index')->with('success', 'Info berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if ($info->gambar) {
            Storage::disk('public')->delete($info->gambar);
        }

        $info->delete();

        return redirect()->route('infos.index')->with('success', 'Info berhasil dihapus.');
    }
}
