<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(Request $request)
    {
        $query = Kategori::withCount('barang');

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where('nama', 'like', '%' . $search . '%');
        }

        $kategori = $query->paginate(6);
        $total = Kategori::count();

        return view('pages.kategori', compact('kategori', 'total'));
    }

    public function show($id)
    {
        $kategori = Kategori::withCount('barang')->findOrFail($id);

        return view('details.kategoriDetail', compact('kategori'));
    }

    public function create() {}
    public function store() {}
    public function edit() {}
    public function update() {}

    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);

        $kategori->delete();

        return redirect()->back()->with('success', 'Kategori berhasil dihapus.');
    }
}
