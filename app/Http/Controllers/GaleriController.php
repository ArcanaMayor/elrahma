<?php
namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::all();
        return view('admin.galeri.index', compact('galeri'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul'  => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $path = $request->file('gambar')->store('galeri', 'public');

        Galeri::create([
            'judul'  => $request->judul,
            'gambar' => $path,
        ]);

        return redirect()->route('admin.galeri.index')
                         ->with('success', 'Gambar berhasil ditambahkan');
    }

    public function edit(Galeri $galeri)
    {
        return view('admin.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, Galeri $galeri)
    {
        $request->validate([
            'judul'  => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $galeri->judul = $request->judul;

        // Kalau ada file gambar baru
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if ($galeri->gambar && Storage::disk('public')->exists($galeri->gambar)) {
                Storage::disk('public')->delete($galeri->gambar);
            }

            // Upload gambar baru
            $path = $request->file('gambar')->store('galeri', 'public');
            $galeri->gambar = $path;
        }

        $galeri->save();

        return redirect()->route('admin.galeri.index')
                         ->with('success', 'Gambar berhasil diperbarui');
    }

    public function destroy(Galeri $galeri)
    {
        if ($galeri->gambar && Storage::disk('public')->exists($galeri->gambar)) {
            Storage::disk('public')->delete($galeri->gambar);
        }
        $galeri->delete();

        return redirect()->route('admin.galeri.index')
                         ->with('success', 'Gambar berhasil dihapus');
    }
}
