<?php
namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function show($slug)
    {
        $page = Page::where('slug', $slug)->where('status', 'published')->firstOrFail();
        return view('halaman.show', compact('page'));
    }
}
