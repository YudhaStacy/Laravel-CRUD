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

        $pemasok = $query->paginate(12);
        $total = Pemasok::count();

        return view('pemasok', compact('pemasok', 'total'));
    }

    public function show($id)
    {
        $pemasok = Pemasok::findOrFail($id);
        return view('pemasokDetail', compact('pemasok'));
    }
}
