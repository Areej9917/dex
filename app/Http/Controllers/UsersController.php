<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\View;

class UsersController extends Controller
{
    
    public function __construct(){
        View::share([
            'mainContentHeading'=> 'Users',
            'modelName' => 'User',
            'route' => 'users'
        ]);
    }

    public function index(){
        
        $users=  User::with('roles','permissions')->get();
        $roles = Role::all();
        return view('users.index',compact('users','roles'));
        
    }

    public function login(Request $request)
    {

        echo "<pre>";
                    print_r($request->all());
                    
         $request->validate(
            [
             
             
                        'email' => 'required|email', 
                        'password' => 'required',
        
           ]
                    );

                    // echo "<pre>";
                    // print_r($request->all());
                    
               
    }   

    public function create(){
        return view('users.create');
        
    }
    public function store(Request $request){
        $user= new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->username=$request->username;
        $user->password=Hash::make($request->password);
        $user->syncRoles( ['operations']);
        $user->save();
        return redirect('users')->with('success','User added Successfully');
        
        
    }
    public function edit($id){
        $roles = Role::all();
        $user=  User::with('roles','permissions')->find($id);
        return view('users.edit',[
            'user'=>$user,
            'roles' => $roles
        ]);
    }
    public function update(Request $request, $id){
        // return $request->all();
        $user=  User::find($id);
        // $user->name=$request->name;
        // $user->email=$request->email;
        // $user->username=$request->username;
        // $user->password=Hash::make($request->password);
        $user->syncRoles( $request->role_id);
        $user->save();
        return redirect('users')->with('success','User updated Successfully');
    }
    
    public function delete($id){
        User::where('id',$id)->delete();
        return redirect('users')->with('success','User deleted Successfully');
        
    }

    public function changePassword(){
        return view('auth.change-password');
    }

    public function updatePassword(Request $request){

        $request->validate([
            'password' => 'required_with:password_confirmation|same:password_confirmation',
        ]);

        $user = User::find(auth()->user()->id);
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/');
    }
}
