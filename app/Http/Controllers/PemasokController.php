<?php

namespace App\Http\Controllers;

use App\Models\Pemasok;
use Illuminate\Http\Request;

class PemasokController extends Controller
{
    public function index(Request $request)
    {
        $query = Pemasok::query();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where('nama', 'like', '%' . $search . '%');
        }

        $pemasok = $query->paginate(6);
        $total = Pemasok::count();

        return view('pages.pemasok', compact('pemasok', 'total'));
    }

    public function show($id)
    {
        $pemasok = Pemasok::findOrFail($id);
        return view('details.pemasokDetail', compact('pemasok'));
    }

    public function create()
    {
        return view('form.pemasokForm');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Pemasok::create($data);

        return redirect()->route('pemasok.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(string $id)
    {
        $pemasok = Pemasok::findOrFail($id);
        return view('form.pemasokForm', compact('pemasok'));
    }

    public function update(Request $request, string $id)
    {
        $pemasok = Pemasok::findOrFail($id);
        $data = $request->all();

        $pemasok->update($data);

        return redirect()->route('pemasok.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $pemasok = Pemasok::findOrFail($id);
        $pemasok->delete();

        return redirect()->back()->with('success', 'Data berhasil di hapus');
    }
}
