<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('roleUser.role')->get();

        return view('admin.user.index', compact('users'));
    }
}
