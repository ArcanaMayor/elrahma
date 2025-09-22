<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Prodi;
use App\Models\ProdiInfo;
use Illuminate\Http\Request;

class ProdiInfoController extends Controller
{
    public function index(Prodi $prodi) {
        $infos = $prodi->infos;
        return view('admin.infos.index', compact('prodi','infos'));
    }

    public function create(Prodi $prodi) {
        return view('admin.infos.create', compact('prodi'));
    }

    public function store(Request $request, Prodi $prodi) {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required'
        ]);
        
        $prodi->infos()->create($request->all());
        return redirect()->route('admin.prodi.infos.index', $prodi)->with('success','Info berhasil ditambahkan');
    }

    public function edit($info) {
        // Handle both string/numeric ID and model instance
        if (is_string($info) || is_numeric($info)) {
            $info = ProdiInfo::findOrFail($info);
        }
        
        return view('admin.infos.edit', compact('info'));
    }

    public function update(Request $request, $info) {
        // Handle both string/numeric ID and model instance
        if (is_string($info) || is_numeric($info)) {
            $info = ProdiInfo::findOrFail($info);
        }
        
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required'
        ]);
        
        $info->update($request->all());
        return redirect()->route('admin.prodi.infos.index', $info->prodi_id)->with('success','Info berhasil diupdate');
    }

    public function destroy($info) {
        // Handle both string/numeric ID and model instance
        if (is_string($info) || is_numeric($info)) {
            $info = ProdiInfo::findOrFail($info);
        }
        
        $prodiId = $info->prodi_id;
        $info->delete();
        return redirect()->route('admin.prodi.infos.index', $prodiId)->with('success','Info berhasil dihapus');
    }
}