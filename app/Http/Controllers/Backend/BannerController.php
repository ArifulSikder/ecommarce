<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use illuminate\Support\Facades\File;

class BannerController extends Controller
{
    function bannerIndex(){
        $banners=Banner::where("status", 1)->orderBy("id", 'desc')->paginate(10);
        return view('backend.banner.indexBanner', compact('banners'));
    }
    //banner add

    function addBanner(){
        return view('backend.banner.addBanner');
    }

    //store bannser 
    function storeBanner(Request $request){
        $request->validate([
            'content_type' => 'required|max:255',
            'title' => 'required|max:255',
            'product_name' => 'required|max:255',
            'product_price' => 'required|max:255',
            'banner_photo' => 'required',
        ],[
            'content_type.required' => 'Please Enter This Filed',
            'title.required' => 'Please Enter This Filed',
            'product_name.required' => 'Please Enter This Filed',
            'product_price.required' => 'Please Enter This Filed',
            'banner_photo.required' => 'Please Enter This Filed',
            
        ]);
        $input = $request->all();

        $input['banner_photo'] = '';
        if ($request->file('banner_photo')) {
            $image = $request->file('banner_photo');
            $imageName = $image->getClientOriginalName();
            Image::make($image)->resize(1230,660)->save('public/uploads/banner/' . $imageName);
            $input['banner_photo'] = 'public/uploads/banner/' . $imageName;
        }

        $banner=Banner::create($input);
        
        if ($banner == true) {
            $notification = ([
                'success' => 'ব্যানার সফলভাবে তৈরি করা হয়েছে !',
            ]);
        } else{
            $notification = ([
                'error' => 'ব্যানার  তৈরি করা ব্যর্থ হয়েছে...!',
            ]);
        }
        return redirect()->route('banner')->with($notification);
    }
    //edit banner
    function editBanner($banner_id){
        $bannerData=Banner::findOrFail($banner_id);
        return view('backend.banner.editBanner', compact('bannerData'));

    }

    // update banner 
    function updateBanner(Request $request){
        
        $request->validate([
            'content_type' => 'required|max:255',
            'title' => 'required|max:255',
            'product_name' => 'required|max:255',
            'product_price' => 'required|max:255',
        ],[
            'content_type.required' => 'Please Enter This Filed',
            'title.required' => 'Please Enter This Filed',
            'product_name.required' => 'Please Enter This Filed',
            'product_price.required' => 'Please Enter This Filed',
            
        ]);
        $input = $request->all();
        $bannerData = Banner::findOrFail($request->id);
        $input['banner_photo'] = $bannerData->banner_photo;
        if ($request->file('banner_photo')) {
            $image = $request->file('banner_photo');
            $imageName = $image->getClientOriginalName();
            Image::make($image)->resize(1230,660)->save('public/uploads/banner/' . $imageName);
            $input['banner_photo'] = 'public/uploads/banner/' . $imageName;
        }

        $banner=$bannerData->update($input);
        
        if ($banner == true) {
            $notification = ([
                'success' => 'ব্যানার সফলভাবে তৈরি করা হয়েছে !',
            ]);
        } else{
            $notification = ([
                'error' => 'ব্যানার  তৈরি করা ব্যর্থ হয়েছে...!',
            ]);
        }
        return redirect()->route('banner')->with($notification);
    }

    //delete banner
    function deleteBanner($banner_id){
        Banner::findOrFail($banner_id);
    }
}
