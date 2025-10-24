<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KodeTindakanTerapi;

class KodeTindakanTerapiController extends Controller
{
    public function index()
    {
        $tindakan = KodeTindakanTerapi::with(['kategori', 'kategoriKlinis'])
            ->select('idkode_tindakan_terapi', 'kode', 'deskripsi_tindakan_terapi', 'idkategori', 'idkategori_klinis')
            ->get();

        return view('admin.kode-tindakan-terapi.index', compact('tindakan'));
    }
}
