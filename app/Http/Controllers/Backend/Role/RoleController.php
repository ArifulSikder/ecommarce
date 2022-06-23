<?php

namespace App\Http\Controllers\Backend\Role;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RoleController extends Controller
{
    // *********************************************** role start ********************************************************
   function indexRole(){
       $roles = Role::orderBy("name", 'asc')->paginate(10);
       return view('backend.userExcess.role', compact('roles'));
   }

   // create role
   function createRole(Request $request){   
    $validator = Validator::make($request->all(), [
        'name' => ['required', 'string', 'max:255', 'unique:roles']
    ]);

    if ($validator->fails()) {
        
        $notification = ([
            'error' => 'Something is wrong. Please Fill all the fill carefully',
        ]);

        return redirect()->back()
        ->withErrors($validator)
        ->withInput()->with($notification);
    }
    $role = Role::create(['name' => $request->name]);

    if ($role == true) {
        $notification = ([
            'success' => 'Role Created Successfully !',
        ]);
    } else {
        $notification = ([
            'error' => 'Unfortunately Role Not Created !',
        ]);
    }
    
    return redirect()->back()->with($notification);
   }

    //    update role 
    function updateRole(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255', 'unique:roles']
        ]);
    
        if ($validator->fails()) {
            
            $notification = ([
                'error' => 'Something is wrong. Please Fill all the fill carefully',
            ]);
    
            return redirect()->back()
            ->withErrors($validator)
            ->withInput()->with($notification);
        }
        $role = Role::findOrFail($request->id)->update(['name' => $request->name]);
    
        if ($role == true) {
            $notification = ([
                'success' => 'Role Updated Successfully !',
            ]);
        } else {
            $notification = ([
                'error' => 'Unfortunately Role Not Updated !',
            ]);
        }
        
        return redirect()->back()->with($notification);
    }

    //role permission list
    function rolePermissionList($roll_id){
        
        $role = Role::find($roll_id);
        $rolePermissions = Permission::join("role_has_permissions","role_has_permissions.permission_id","=","permissions.id")
            ->where("role_has_permissions.role_id",$roll_id)
            ->paginate(10);
        return view('backend.userExcess.rollPermissionList',compact('role','rolePermissions'));
    }
    // *********************************************** role end ********************************************************

    
    // *********************************************** permission start ********************************************************
    function indexPermission(){
        $treviewParents = Permission::orderBy("name", 'asc')->where('parent_id', 0)->get();
        $parents = Permission::orderBy("name", 'asc')->get();
        $permissions = Permission::orderBy("name", 'asc')->paginate(10);
        return view('backend.userExcess.permisson', compact("permissions", 'parents', 'treviewParents'));
    }

    // create permission 
    function createPermission(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255', 'unique:permissions']
        ]);
        
        if ($validator->fails()) {
            if ($validator->getData()) {
                    $notification = ([
                        'error' => $validator->getData()['name'].' Is Already Exits !',
                    ]);
            } else {
                $notification = ([
                    'error' => 'Something is wrong. Please Fill all the fill carefully',
                ]);
            }
            
    
            return redirect()->back()
            ->withErrors($validator)
            ->withInput()->with($notification);
        }
        if ($request->parent_id) {
            $permission = Permission::create([
                'parent_id' => $request->parent_id,
                'name' => $request->name,
            ]);
        } else {
            $permission = Permission::create([
                'parent_id' => 0,
                'name' => $request->name,
            ]);
        }
        
    
        if ($permission == true) {
            $notification = ([
                'success' => 'Permission Updated Successfully !',
            ]);
        } else {
            $notification = ([
                'error' => 'Unfortunately Permission Not Updated !',
            ]);
        }
        
        return redirect()->back()->with($notification);
    }

    //give permission
    function givePermission(){
        $roles = Role::orderBy("name", 'asc')->get();
        $treviewParents = Permission::orderBy("name", 'asc')->where('parent_id', 0)->get();
        return view('backend.userExcess.givePermission', compact("treviewParents",'roles'));
    }

    // give permission store
    function givePermissionStore(Request $request){
        $role = Role::findOrFail($request->role_id);
        $role->syncPermissions($request->permission);
        return 'hi';
    }
    // *********************************************** permission end ********************************************************
}
