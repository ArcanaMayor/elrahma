<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    public function index()
    {
        $media = Media::all();
        return view('media.index', compact('media'));
    }

    public function create()
    {
        return view('media.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'file' => 'required|file|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,zip,jpg,png,txt|max:20480',
        ]);

        $path = $request->file('file')->store('media', 'public');

        Media::create([
            'judul' => $request->judul,
            'file' => $path
        ]);

        return redirect()->route('media.index')->with('success', 'File berhasil diunggah.');
    }

    public function edit(Media $media)
    {
        return view('media.edit', compact('media'));
    }

    public function update(Request $request, Media $media)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'file' => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,zip,jpg,png,txt|max:20480',
        ]);

        if ($request->hasFile('file')) {
            // Hapus file lama
            Storage::disk('public')->delete($media->file);

            $path = $request->file('file')->store('media', 'public');
            $media->file = $path;
        }

        $media->judul = $request->judul;
        $media->save();

        return redirect()->route('media.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy(Media $media)
    {
    // Hapus file hanya jika ada path file-nya
    if ($media->file) {
        Storage::disk('public')->delete($media->file);
    }

    $media->delete();

    return redirect()->route('media.index')->with('success', 'File berhasil dihapus.');
    }

}
