<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view ('home');
    }

    public function dashboard(){
        return view ('dashboard');
    }

    public function struktur(){
        return view ('struktur');
    }
        
    public function layanan(){
        return view ('layanan');
    }
    
    public function visi(){
        return view ('visi');
    }
}

?>