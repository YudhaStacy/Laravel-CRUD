<?php

namespace App\Http\Controllers;

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

        $perPage = $request->get('per_page', 6);
        $kategori = $query->paginate($perPage);
        $total = Kategori::count();

        return view('pages.kategori', compact('kategori', 'total'));
    }

    public function show($id)
    {
        $kategori = Kategori::withCount('barang')->findOrFail($id);

        return view('details.kategoriDetail', compact('kategori'));
    }

    public function create()
    {
        return view('form.kategoriForm');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Kategori::create($data);

        return redirect()->route('kategori.index')->with('success', 'Data berhasil ditambahkan');
    }


    public function edit(string $id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('form.kategoriForm', compact('kategori'));
    }

    public function update(Request $request, string $id)
    {
        $kategori = Kategori::findOrFail($id);
        $data = $request->all();

        $kategori->update($data);

        return redirect()->route('kategori.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);

        $kategori->delete($id);

        return redirect()->back()->with('success', 'Data berhaisl diahapus');
    }
}
