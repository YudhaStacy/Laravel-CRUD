<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Pemasok;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBarang = Barang::count();
        $totalKategori = Kategori::count();
        $totalPemasok = Pemasok::count();

        return view('pages.dashboard', compact('totalBarang', 'totalKategori', 'totalPemasok'));
    }
}
