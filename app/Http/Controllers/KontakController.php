<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak; // Pastikan model Kontak sudah dibuat

class KontakController extends Controller
{
    public function kirim(Request $request)
{
    $request->validate([
        'name'    => 'required|string|max:255',
        'email'   => 'required|email|max:255',
        'subject' => 'required|string|max:255',
        'message' => 'required|string'
    ]);

    // Simpan ke database
    Kontak::create([
        'nama'    => $request->name,
        'email'   => $request->email,
        'pesan'   => "Subject: {$request->subject}\n\n{$request->message}"
    ]);

    return back()->with('success', 'Pesan berhasil dikirim!');
}
public function index()
    {
        $kontaks = Kontak::all();
        return view('kontaks.index', compact('kontaks'));
    }
}
