<?php
namespace App\Http\Controllers;

use App\Models\Info;

class HomeController extends Controller
{
    public function index()
    {
        $terbaru = Info::latest()->take(5)->get(); // 5 info terbaru
        $populer = Info::orderBy('views', 'desc')->take(5)->get(); // 5 info paling banyak dibaca
        return view('home', compact('terbaru', 'populer'));
    }
}
