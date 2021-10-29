<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function __construct(Permission $permission)
    {
        $this->permission = $permission;
    }

    public function index()
    {
        $permissions = $this->permission->all();
        return View('permission.index', compact('permissions'));
    }

    public function create()
    {
        return view("permission.create");
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $this->permission->create([
            'name' => $request->name
        ]);

        return redirect()->route('permissions.index')->with('success', 'Permission Created');
    }

    public function getAll()
    {
        $permissions = $this->permission->all();

        return response()->json([
            'permissions' => $permissions
        ], 200);
    }
    public function edit($id)
    {
        //
    }
}
