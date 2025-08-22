<?php
namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Galeri;

class HomeController extends Controller
{
    public function index()
    {
        $terbaru = Info::latest()->take(5)->get(); // 5 info terbaru
        $populer = Info::orderBy('views', 'desc')->take(5)->get(); // 5 info paling banyak dibaca
        $galeri = Galeri::latest()->get(); // ambil semua data galeri
        return view('home', compact('terbaru', 'populer', 'galeri'));
        

    }
}
