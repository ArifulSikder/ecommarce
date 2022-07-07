<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    // social index
    function index(){
        $social= Social::latest()->first();
        return view('backend.social.indexSocial', compact('social'));
    }
    
    function updateSocial(Request $request){
        $input = $request->all();
        $social=Social::findOrFail($request->id)->update($input);

        if ($social == true) {
            $notification = ([
                'success' => 'সামাজিক মাধ্যম লিংক আপডেট করা হয়েছে !',
            ]);
        } else{
            $notification = ([
                'error' => 'সামাজিক মাধ্যম লিংক আপডেট করা ব্যর্থ হয়েছে...!',
            ]);
        }
        return redirect()->back()->with($notification);
    }
}
