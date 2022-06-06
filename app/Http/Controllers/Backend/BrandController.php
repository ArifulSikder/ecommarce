<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

use function GuzzleHttp\Promise\all;

class BrandController extends Controller
{
    //index of brand

    function index(){
        $brands=Brand::where('status', 1)->orderBy('id','desc')->paginate(10);
        return view('backend.brand.indexBrand', compact('brands'));
    }

    //store brand
    function storeBrand(Request $request){
        $input =$request->all();
        $request->validate([
            'brand_image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
        ],[
            'brand_image.required' => 'Please choose a file...!'
        ]);
        $input['brand_image'] = '';
        if ($request->hasFile('brand_image')) {
            $image = $request->file('brand_image');
            $imageName =hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(720,400)->save('public/uploads/brand/' . $imageName);
            $input['brand_image'] = 'public/uploads/brand/' . $imageName;
        }
        $brand=Brand::create($input);
        if ($brand == true) {
            $notification = ([
                'success' => 'ব্রান্ডের ছবি যোগ করা হয়েছে !',
            ]);
        } else{
            $notification = ([
                'error' => 'ব্রান্ডের ছবি যোগ করা ব্যর্থ হয়েছে...!',
            ]);
        }
        return redirect()->back()->with($notification);
    }

    // update brand
    function updateBrand(Request $request){
        $input =$request->all();
        $brandData=Brand::findOrFail($request->id);
        $input['brand_image'] = $brandData->brand_image;
        if ($request->hasFile('brand_image')) {
            $request->validate([
                'brand_image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
            ],[
                'brand_image.required' => 'Please choose a file...!'
            ]);
            File::delete($brandData->brand_image);
            $image = $request->file('brand_image');
            $imageName =hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(720,400)->save('public/uploads/brand/' . $imageName);
            $input['brand_image'] = 'public/uploads/brand/' . $imageName;
        }
        $brand=$brandData->update($input);
        if ($brand == true) {
            $notification = ([
                'success' => 'ব্রান্ডের ছবি যোগ করা হয়েছে !',
            ]);
        } else{
            $notification = ([
                'error' => 'ব্রান্ডের ছবি যোগ করা ব্যর্থ হয়েছে...!',
            ]);
        }
        return redirect()->back()->with($notification);
    }
}
