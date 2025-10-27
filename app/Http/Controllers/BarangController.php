<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Pemasok;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(Request $request)
    {
        $query = Barang::with('kategori');

        if ($request->filled('kategori')) {
            $query->where('id_kategori', $request->kategori);
        }

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('nama', 'like', '%' . $search . '%')
                    ->orWhere('id_barang', 'like', '%' . $search . '%')
                    ->orWhereHas('kategori', function ($k) use ($search) {
                        $k->where('nama', 'like', '%' . $search . '%');
                    });
            });
        }

        $perPage = $request->get('per_page', 6);
        $total = Barang::count();
        $barang = $query->paginate($perPage)->withQueryString();
        $kategori = Kategori::all();

        return view('pages.barang', compact('barang', 'kategori', 'total'));
    }

    public function show($id)
    {
        $barang = Barang::with(['kategori', 'pemasok'])->findOrFail($id);
        return view('details.barangDetail', compact('barang'));
    }

    public function create()
    {
        $kategori = Kategori::all();
        $pemasok = Pemasok::all();
        return view('forms.barangForm', compact('kategori', 'pemasok'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Barang::create($data);
        return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambahkan.');
    }

    public function edit(string $id)
    {
        $barang = Barang::findOrFail($id);
        $kategori = Kategori::all();
        $pemasok = Pemasok::all();
        return view('forms.barangForm', compact('barang', 'kategori', 'pemasok'));
    }

    public function update(Request $request, string $id)
    {
        $barang = Barang::findOrFail($id);
        $data = $request->all();

        $barang->update($data);

        return redirect()->route('barang.index')->with('success', 'Barang berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();

        return redirect()->back()->with('success', 'Barang berhasil dihapus.');
    }
}
