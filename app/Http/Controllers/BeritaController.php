<?public_path()
// app/Http/Controllers/BeritaController.php
namespace App\Http\Controllers;

use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $featured = Berita::where('featured', true)->latest()->first();
        $beritas = Berita::where('id', '!=', $featured->id ?? null)
                        ->latest()
                        ->paginate(6);
                        
        return view('berita.index', compact('featured', 'beritas'));
    }

    public function show($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();
        return view('berita.show', compact('berita'));
    }
}