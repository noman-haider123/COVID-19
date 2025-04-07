<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Rolecontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:create Role')->only('createrole');
        $this->middleware('permission:edit Role')->only('edit');
        $this->middleware('permission:delete role')->only('delete');
    }
    public function createrole(){
        $permission = Permission::all();
        $role = Role::all();
        return view('Admin.createrole',compact('permission','role'));
    }
    public function store(Request $request){
        $validate = $request->validate([
            'name' => 'required|unique:roles|min:3',
            'roles' => 'required|array',
        ]);
        $role = Role::create(['name' => $validate['name']]);
        $role->syncPermissions($validate['roles']);
        return redirect()->back()->with('success', 'Role created successfully');
    }
    public function edit($id){
        $role = Role::find($id);
        $data = $role->permissions->pluck('name');
        $permission = Permission::orderBy('name','ASC')->get();
        //   return $data;
        return view('Admin.editrole',compact('role','data','permission'));
    }
    public function update(Request $request, $id){
        $validate = $request->validate([
            'name' => 'required|unique:roles,name,'.$id.'|min:3',
            'roles' => 'required|array',
        ]);
        $role = Role::find($id);
        $role->update(['name' => $validate['name']]);
        $role->syncPermissions($validate['roles']);
        return redirect()->route('role.main')->with('Role', 'Role updated successfully');
    }
    public function delete($id){
        $role = Role::find($id);
        $role->delete();
        return redirect()->back()->with('danger', 'Role deleted successfully');
    }
}
