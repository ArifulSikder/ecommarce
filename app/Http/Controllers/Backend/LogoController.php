<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\MainLogo;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class LogoController extends Controller
{
    //index of logo
    function index(){
        $logos=MainLogo::where('status', 1)->orderBy('id', 'desc')->paginate(10);
        return view('backend.mainLogo.indexLogo', compact('logos'));
    }

    //insert and update logo
    function insertAndUpdateLogo(Request $request){
        if ($request->id) {
            $logoData=MainLogo::findOrFail($request->id);
            $input = $request->all();
            $input['main_logo'] = $logoData->main_logo;
            if ($request->hasFile('main_logo')) {
                $request->validate([
                    'main_logo' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
                ],[
                    'main_logo.required' => 'Please choose a file...!'
                ]);
                File::delete($logoData->main_logo);
                $image = $request->file('main_logo');
                $imageName =hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
                Image::make($image)->resize(900,500)->save('public/uploads/logo/' . $imageName);
                $input['main_logo'] = 'public/uploads/logo/' . $imageName;
            }
            $logo=$logoData->update($input);
            if ($logo == true) {
                $notification = ([
                    'success' => 'লোগো আপডেট করা হয়েছে !',
                ]);
            } else{
                $notification = ([
                    'error' => 'লোগো আপডেট করা ব্যর্থ হয়েছে...!',
                ]);
            }
            return redirect()->back()->with($notification);
        } else {
            $input =$request->all();
            $request->validate([
                'main_logo' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
            ],[
                'main_logo.required' => 'Please choose a file...!'
            ]);
            $input['main_logo'] = '';
            if ($request->hasFile('main_logo')) {
                $image = $request->file('main_logo');
                $imageName =hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
                Image::make($image)->resize(900,500)->save('public/uploads/logo/' . $imageName);
                $input['main_logo'] = 'public/uploads/logo/' . $imageName;
            }
            $brand=MainLogo::create($input);
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

    //logo delete
    function deleteLogo($logo_id){
        MainLogo::findOrFail($logo_id)->delete();
        return redirect()->back();
    }
}
