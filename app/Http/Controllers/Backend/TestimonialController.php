<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class TestimonialController extends Controller
{

    //index testimonial
    function indexTestimonial(){
        $testimonials = Testimonial::orderBy('id', 'desc')->where('status',1)->paginate();
        return view('backend.testimonial.indexTestimonial', compact('testimonials'));
    }

    //store testimonial
    function testimonialStore(Request $request){
        $input = $request->all();
        $request->validate([
            'name' => 'required|max:255',
            'designation' => 'required|max:255',
            'description' => 'required|max:1000',
            'photo' => 'required|max:255',
        ],[
            'name.required' => 'Please Enter This Filed',
            'designation.required' => 'Please Enter This Filed',
            'description.required' => 'Please Enter This Filed',
            'photo.required' => 'Please Enter This Filed',
        ]);

        $input['photo'] = '';
        if ($request->file('photo')) {
            $image = $request->file('photo');
            $imageName = $image->getClientOriginalName();
            Image::make($image)->resize(950,950)->save('public/uploads/testimonial/' . $imageName);
            $input['photo'] = 'public/uploads/testimonial/' . $imageName;
        }
        $testimonial=Testimonial::create($input);
        
        if ($testimonial == true) {
            $notification = ([
                'success' => 'প্রশংসাপত্র সফলভাবে তৈরি করা হয়েছে !',
            ]);
        } else{
            $notification = ([
                'error' => 'প্রশংসাপত্র  তৈরি করা ব্যর্থ হয়েছে...!',
            ]);
        }

        return redirect()->back()->with($notification);
    }

    //update testimonial 
    function updateTestimonial(Request $request){
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required|max:255',
            'designation' => 'required|max:255',
            'description' => 'required|max:1000',
        ]);

        if ($validator->fails()) {
            return response()->json([$validator->errors(), 'status' => 0]);
        }
        $singleTestimonial=Testimonial::findOrFail($input['id']);
        $input['photo'] = $singleTestimonial->photo;
        if ($request->file('photo')) {
            $image = $request->file('photo');
            $imageName = $image->getClientOriginalName();
            Image::make($image)->resize(950,950)->save('public/uploads/testimonial/' . $imageName);
            $input['photo'] = 'public/uploads/testimonial/' . $imageName;
        }

        $testimonial=$singleTestimonial->update($input);
        if ($testimonial == true) {
            $notification = ([
                'success' => 'প্রশংসাপত্র সফলভাবে আপডেট করা হয়েছে !',
                'status' => 1,
            ]);
        } else {
            $notification = ([
                'error' => 'প্রশংসাপত্র  আপডেট করা ব্যর্থ হয়েছে...!',
                'status' => 2,
            ]);
        }

        return response()->json([$notification]);
    }

    //delete
    function deleteTestimonial($id){
        Testimonial::findOrFail($id)->delete();
        return redirect()->back();
    }
}
