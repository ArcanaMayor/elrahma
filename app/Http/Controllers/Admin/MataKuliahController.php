<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Prodi;
use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index(Prodi $prodi)
    {
        $mataKuliahs = $prodi->mataKuliahs;
        return view('admin.mata_kuliah.index', compact('prodi', 'mataKuliahs'));
    }

    public function create(Prodi $prodi)
    {
        return view('admin.mata_kuliah.create', compact('prodi'));
    }

    public function store(Request $request, Prodi $prodi)
    {
        $request->validate([
            'kode' => 'required|string|max:20',
            'nama' => 'required|string|max:255',
            'sks' => 'required|integer',
            'semester' => 'required|string|max:50',
            'prasyarat' => 'nullable|string|max:255'
        ]);

        $prodi->mataKuliahs()->create($request->all());

        return redirect()
            ->route('admin.prodi.mata_kuliah.index', $prodi)
            ->with('success', 'Mata Kuliah berhasil ditambahkan');
    }

    public function edit(Prodi $prodi, MataKuliah $mataKuliah)
    {
        return view('admin.mata_kuliah.edit', compact('prodi', 'mataKuliah'));
    }

    public function update(Request $request, Prodi $prodi, MataKuliah $mataKuliah)
    {
        $request->validate([
            'kode' => 'required|string|max:20',
            'nama' => 'required|string|max:255',
            'sks' => 'required|integer',
            'semester' => 'required|string|max:50',
            'prasyarat' => 'nullable|string|max:255'
        ]);

        $mataKuliah->update($request->all());

        return redirect()
            ->route('admin.prodi.mata_kuliah.index', $prodi)
            ->with('success', 'Mata Kuliah berhasil diupdate');
    }

    public function destroy(Prodi $prodi, MataKuliah $mataKuliah)
    {
        $mataKuliah->delete();

        return redirect()
            ->route('admin.prodi.mata_kuliah.index', $prodi)
            ->with('success', 'Mata Kuliah berhasil dihapus');
    }
}
