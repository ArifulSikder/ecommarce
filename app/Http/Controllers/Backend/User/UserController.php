<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    function indexUser(){
        $roles = Role::orderBy('name', 'asc')->get();
        $users = User::orderBy('id', 'desc')->paginate(10);
        return view('backend.user.userList', compact('users', 'roles'));
    }

    //create user 
    function registerUser(Request $request){
        $roles = Role::orderBy('name', 'asc')->get();
        return view('backend.user.registerUser', compact('roles'));
    }


    //register user
    function registerUserStore(Request $request){
        
        Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'mobile_number' => ['required', 'string', 'max:11'],
            'blood_group' => ['required', 'string', 'max:5'],
            'address' => ['required', 'string', 'max:500'],
            'user_role' => ['required', 'email', 'max:255'],
        ], [
            'name.required' => 'Please Enter User Name !',
            'email.required' => 'Please Enter User Email !',
            'password.required' => 'Please Enter User Password !',
            'mobile_number.required' => 'Please Enter User Mobile Number !',
            'blood_group.required' => 'Please Enter User Blood Group !',
            'address.required' => 'Please Enter User Address !',
            'user_role.required' => 'Please Enter User Role !',
        ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    
        $user->assignRole($request->user_role);

        
        if ($user == true) {
            $notification = ([
                'success' => 'User Registered Successfully !',
            ]);
        } else {
            $notification = ([
                'error' => 'Unfortunately User Not Registered !',
            ]);
        }
        
        return redirect()->back()->with($notification);
    }
}
