<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsCotroller extends Controller
{
    //index contact use
    function index(){
        $contact=ContactUs::where('status',1)->first();
        return view('backend.contactUs.indexContact', compact('contact'));
    }

    //update contact controller
    function updateContact(Request $request){
        $input = $request->all();
        $request->validate([
            'mobile' => 'required|max:11',
            'email' => 'required|max:100',
            'address' => 'required|max:255',
        ]);

        $contact=ContactUs::findOrFail($request->id)->update($input); 
        if ($contact == true) {
            $notification = ([
                'success' => 'যোগাযোগ আপডেট করা হয়েছে !',
            ]);
        } else{
            $notification = ([
                'error' => 'যোগাযোগ আপডেট করা ব্যর্থ হয়েছে...!',
            ]);
        }
        return redirect()->back()->with($notification);
    }
}
