<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{

    //index testimonial
    function indexTestimonial(){
        return view('backend.testimonial.indexTestimonial');
    }

    //store testimonial
    function testimonialStore(Request $request){
        $input = $request->all();
        dd($input);
    }
}
