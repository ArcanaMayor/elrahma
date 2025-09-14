<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Download;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DownloadController extends Controller
{
    public function index()
    {
        $downloads = Download::latest()->paginate(10);
        return view('admin.downloads.index', compact('downloads'));
    }

    public function create()
    {
        return view('admin.downloads.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'file' => 'required|mimes:pdf,doc,docx,xlsx,ppt,pptx,zip,rar|max:20480',
        ]);

        $filePath = $request->file('file')->store('downloads', 'public');

        Download::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'file' => $filePath,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.downloads.index')->with('success', 'File berhasil ditambahkan.');
    }

    public function edit(Download $download)
    {
        return view('admin.downloads.edit', compact('download'));
    }

    public function update(Request $request, Download $download)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $filePath = $download->file;
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('downloads', 'public');
        }

        $download->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'file' => $filePath,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.downloads.index')->with('success', 'File berhasil diperbarui.');
    }

    public function destroy(Download $download)
    {
        $download->delete();
        return redirect()->route('admin.downloads.index')->with('success', 'File berhasil dihapus.');
    }
}
