<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Models\Order;
use App\Models\Kategori;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBuku = Buku::count();
        $totalKategori = Kategori::count();
        $totalOrder = Order::count();

        return view('admin.dashboard', compact(
            'totalBuku',
            'totalKategori',
            'totalOrder'
        ));
    }
}