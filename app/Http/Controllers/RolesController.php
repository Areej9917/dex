<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\View;


class RolesController extends Controller
{
    public function __construct(){
        View::share('mainContentHeading', 'Roles');    
    }

   public function index(){
     $roles=  Role::all();
    //  return $roles[0]->permissions;
     return view('roles.index',['roles'=>$roles]);  
    }
   
    public function create(){
       $permissions = Permission::all();
       return view('roles.create',compact('permissions'));

   }
    public function store(Request $request){
        $request->validate([
            // 'vehicle_number' => 'required|unique:vehicles,vehicle_number',
            'name' => 'required|string|unique:roles,name',
            'display_name' => 'required',
        ]);


       $role= new Role();
       $role->name=$request->name;
       $role->display_name = $request->display_name;
       if($request->has('permissions') && $request->permissions!=null)
       {  $role->syncPermissions($request->permissions); }
       $role->save();
       return redirect('roles')->with('success','Roles created successfully');


    }
   public function edit($id){
       $role= Role::with('permissions')->find($id);
       $permissions = Permission::orderBy('group_name', 'ASC')->get();
       $role_permissions = $role->permissions()->get();

       $permission_group = null;
       $permission_list = [];
       foreach ($permissions as $permission){
           if($permission_group != $permission->group_name) {
               $permission_group = $permission->group_name;
               $permission_list[$permission->group_name] = [];
           }
           $permission_list[$permission->group_name][] = $permission;
       }
       $permissions = $permission_list;

        $rolePermIds = array();
        foreach ($role_permissions as $permission) {
            $rolePermIds[] = $permission->id;
        }
       return view('roles.edit',compact('role','permissions', 'rolePermIds'));
   }
   public function update(Request $request, $id){

       $permIds = $request->input('perm');
       $role = Role::where('id', '=', $id)->first();

       if ($permIds == null) {
           $role = Role::findOrFail($id);
           $role_permissions = $role->permissions()->get();

           $rolePermIds = array();
           foreach ($role_permissions as $permission) {
               $rolePermIds[] = $permission->id;
           }
           $role->permissions()->detach($rolePermIds);
       } else {
           $role->permissions()->sync(array_keys($permIds));
       }

       app()->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();


       return redirect('roles');

   }

   public function delete(Request $request){
       $role = Role::find($request->id);
       $role->delete();
       return redirect('roles')->with('success','Roles deleted successfully');


   }
}
