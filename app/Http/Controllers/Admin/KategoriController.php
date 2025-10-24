<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::select('idkategori', 'nama_kategori')->get();
        return view('admin.kategori.index', compact('kategori'));
    }
}
