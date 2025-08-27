<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    // simpan pesan
    public function kirim(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Kontak::create($request->all());
        if ($request->ajax()) {
        return response()->json(['message' => 'Pesan berhasil dikirim!'], 200);
    }

        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }

    // halaman admin melihat pesan
    public function index()
    {
        $kontaks = Kontak::latest()->paginate(10);
        return view('admin.kontak.index', compact('kontaks'));
    }

    // detail pesan
    public function show(Kontak $kontak)
    {
        return view('admin.kontak.show', compact('kontak'));
    }

    // hapus pesan
    public function destroy(Kontak $kontak)
    {
        $kontak->delete();
        return redirect()->route('admin.kontak.index')->with('success', 'Pesan berhasil dihapus!');
    }
}
