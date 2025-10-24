<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $role = Role::select('idrole', 'nama_role')->get();

        return view('admin.role.index', compact('role'));
    }
}
