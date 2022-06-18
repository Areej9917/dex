<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
   public function index(){
     $permissions=  Permission::all();
     return view('permissions.index',compact('permissions',$permissions));

   }
   public function create(){
       return view('permissions.create');

   }
    public function save(Request $request){
        $request->validate([
            // 'vehicle_number' => 'required|unique:vehicles,vehicle_number',
            'name' => 'required|string|unique:roles,name',
            'display_name' => 'required',
        ]);
       $permission= new Permission();
       $permission->name=$request->name;
        $permission->display_name = $request->display_name;
        $permission->guard_name = "web";
        $permission->save();
        return redirect(route('permissions'))->with('success',"Permission added successfully");
    }
    public function edit ($id)
    {
        $permission = Permission::find($id);
        return view('permissions.edit',compact('permission',$permission));
    }

   public function update (Request $request){
       $permission=  Permission::find($request->id);
       $permission->display_name = $request->display_name;
       $permission->save();
       return redirect('permissions')->with('success','Permission updated successfully');
   }

   public function delete(Request $request){
      $permission= Permission::find($request->id);
      $permission->delete();
      return redirect('permissions')->with('success','Permission deleted successfully');
   }
}
