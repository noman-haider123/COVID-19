<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:create permission')->only('permission');
        $this->middleware('permission:edit permission')->only('edit');
        // $this->middleware('permission:delete permission')->only('delete');
    }
    public function permission(){
        $permissions = Permission::paginate(5);
        return view('Admin.createpermission',compact('permissions'));
    }
    public function create(Request $request){
        $validate = $request->validate([
            'name' => 'required|unique:permissions,name|min:6',
        ]);
        $permission = new Permission();
        $permission->name = $validate['name'];
        $permission->save();
        return redirect()->back()->with('success', 'Permission created successfully');
    }
    public function edit($id){
        $permission = Permission::findorfail($id);
        return view('Admin.edit',compact('permission'));
    }
    public function update(Request $request,$id){
        $validate = $request->validate([
            'name' => 'required|unique:permissions,name,'.$id.'|min:3',
        ]);
        $permission = Permission::findorfail($id);
        $permission->name = $validate['name'];
        $permission->save();
        return redirect()->route('permission')->with('update', 'Permission updated successfully');
    }
    public function delete($id){
        $permission = Permission::findorfail($id);
        $permission->delete();
        return redirect()->back()->with('delete', 'Permission deleted successfully');
    }
}
