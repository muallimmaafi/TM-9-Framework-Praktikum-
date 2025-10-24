<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RasHewan;
use Illuminate\Http\Request;

class RasHewanController extends Controller
{
    public function index()
    {
        $rasHewan = RasHewan::select('idras_hewan', 'nama_ras')->get();
        return view('admin.ras-hewan.index', compact('rasHewan'));
    }
}
