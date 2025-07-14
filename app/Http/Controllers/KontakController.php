<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        $kontaks = Kontak::latest()->get();
        return view('kontaks.index', compact('kontaks'));
    }

    public function create()
    {
        return view('kontaks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'nullable|email',
            'telepon' => 'nullable',
            'pesan' => 'required',
        ]);

        Kontak::create($request->all());

        return redirect()->route('kontaks.index')->with('success', 'Pesan berhasil dikirim.');
    }

    public function edit(Kontak $kontak)
    {
        return view('kontaks.edit', compact('kontak'));
    }

    public function update(Request $request, Kontak $kontak)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'nullable|email',
            'telepon' => 'nullable',
            'pesan' => 'required',
        ]);

        $kontak->update($request->all());

        return redirect()->route('kontaks.index')->with('success', 'Kontak berhasil diperbarui.');
    }

    public function destroy(Kontak $kontak)
    {
        $kontak->delete();
        return redirect()->route('kontaks.index')->with('success', 'Kontak berhasil dihapus.');
    }
}
