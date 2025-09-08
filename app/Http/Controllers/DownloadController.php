<?php

namespace App\Http\Controllers;

use App\Models\Download;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    /**
     * Daftar file download (public)
     */
    public function index()
    {
        $downloads = Download::latest()->paginate(10); // pakai paginate biar rapi
        return view('download.index', compact('downloads'));
    }

    /**
     * Detail file download (public)
     */
    public function show($slug)
    {
        $download = Download::where('slug', $slug)->firstOrFail();
        return view('download.show', compact('download'));
    }

    /**
     * Simpan file download (admin)
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'file'  => 'required|file',
        ]);

        // simpan file ke storage
        $path = $request->file('file')->store('downloads');

        Download::create([
            'judul' => $request->judul,
            'slug'  => \Str::slug($request->judul) . '-' . time(),
            'path'  => $path,
        ]);

        return redirect()->route('download.index')->with('success', 'File berhasil diupload');
    }

    /**
     * Hapus file download (admin)
     */
    public function destroy(Download $download)
    {
        // kalau mau hapus file fisik:
        // \Storage::delete($download->path);

        $download->delete();

        return redirect()->route('download.index')->with('success', 'File berhasil dihapus');
    }
}
