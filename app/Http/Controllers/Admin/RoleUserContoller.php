<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RoleUser;

class RoleUserController extends Controller
{
    public function index()
    {
        $role = RoleUser::select('idrole', 'nama_role')->get();

        return view('admin.role.index', compact('role'));
    }
}
