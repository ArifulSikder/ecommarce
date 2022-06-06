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
}
