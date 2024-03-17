<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');

    }
    public function index()
    {
        $roles = Role::paginate(5);
        return view('roles.index', compact('roles'));
    }
    public function create()
    {
        return view('roles.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|unique:permissions,name'
        ]);
        $permissions = new Role();
        $permissions->name = $request->name;
        $permissions->save();

        return redirect()->route('role')->with('success','Permission created Successfully');

    }
    public function edit($id)
    {
        $roles=Role::find($id);
        return view('roles.edit', compact('roles'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required|unique:permissions,name'
        ]);
        $roles=Role::find($id);
        $roles->name = $request->name;
        $roles->update();

        return redirect()->route('role')->with('success','Role updated Successfully');
    }
    public function destroy($id)
    {
        $roles = Role::find($id);
        $roles->delete();
        return redirect()->route('role')->with('success','Role deleted Successfully');

    }
}
