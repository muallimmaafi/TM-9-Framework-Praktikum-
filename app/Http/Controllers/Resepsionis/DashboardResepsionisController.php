<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardResepsionisController extends Controller
{
    public function index()
    {
        return view('resepsionis');
    }
}
