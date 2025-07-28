<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function kirim(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'subject' => 'nullable|string|max:150',
            'message' => 'required|string',
            'phone' => 'nullable|string|max:20',
        ]);

        KontakController::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'phone' => $request->phone,
            'status' => 'new',
        ]);

        return back()->with('success', 'Pesan Anda berhasil dikirim.');
    }
    public function index()
    {
        return view('kontaks.index'); // Pastikan file kontak/index.blade.php ada
         $kontaks = Kontak::all(); // Ambil semua data kontak

    return view('kontaks.index', compact('kontaks'));
    }
}
