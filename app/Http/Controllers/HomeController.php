<?php
namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Galeri;
use App\Models\Berita;

class HomeController extends Controller
{
    public function index()
    {
        // Info
        $terbaru = Info::latest()->take(5)->get(); 
        $populer = Info::orderBy('views', 'desc')->take(5)->get(); 
        $galeri  = Galeri::latest()->get(); 

        // Berita
        $featured = Berita::latest()->first(); // berita terbaru (featured)
        $beritas  = Berita::latest()->skip(1)->take(6)->get(); // berita lain selain featured

        return view('home', compact('terbaru', 'populer', 'galeri', 'featured', 'beritas'));
    }
}
