<?php

namespace App\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use App\Models\District;
use Illuminate\Support\Facades\Validator;
use App\Models\Division;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    //index division
    function indexDivision(){
        $divisions = Division::where("status", 1)->latest()->paginate(10);
        return view('backend.location.division.divisionIndex', compact('divisions'));
    }

    //store division 

    function storeDivision(Request $request){
        $request->validate([
            'division_name' => 'required|max:255|unique:divisions',
        ],[
            'division_name.required' => 'Please Enter This Filed',
        ]);

        $division=Division::create($request->all());
        
        if ($division == true) {
            $notification = ([
                'success' => 'বিভাগ সফলভাবে তৈরি করা হয়েছে !',
            ]);
        } else{
            $notification = ([
                'error' => 'বিভাগ  তৈরি করা ব্যর্থ হয়েছে...!',
            ]);
        }

        return redirect()->back();
    }

    // update divison 

    function updateDivision(Request $request){
        $validator = Validator::make($request->all(), [
            'division_name' => 'required|max:255|unique:divisions,division_name,'. $request->id,
        ],[
            'division_name.required' => 'Please Enter This Filed',
        ]);

        if ($validator->fails()) {
            return response()->json([$validator->errors(), 'status' => 0]);
        }


        $division=Division::findOrFail($request->id)->update($request->all());
        
        if ($division == true) {
            $notification = ([
                'success' => 'বিভাগ সফলভাবে আপডেট করা হয়েছে !', 
                'status' => 1,
            ]);
        } else{
            $notification = ([
                'error' => 'বিভাগ  আপডেট করা ব্যর্থ হয়েছে...!',
                'status' => 2,
            ]);
        }

        return response()->json($notification);
    }


    //district index

    function districtIndex(){
        $divisions=Division::where("status", 1)->orderBy("division_name")->paginate(10);
        $districts = District::with('division')->where("status", 1)->orderBy("district_name")->paginate(10);
        return view('backend.location.district.districtIndex', compact('districts','divisions'));
    }

    // district store

    function storeDistrict(Request $request){
        // dd($request->all());
        $request->validate([
            'division_id' => 'required|max:21',
            'district_name' => 'required|max:255|unique:districts',
        ],[
            'division_id.required' => 'Please Enter This Filed',
            'district_name.required' => 'Please Enter This Filed',
        ]);

        $district=District::create($request->all());
        
        if ($district == true) {
            $notification = ([
                'success' => 'জেলা সফলভাবে তৈরি করা হয়েছে !',
            ]);
        } else{
            $notification = ([
                'error' => 'জেলা  তৈরি করা ব্যর্থ হয়েছে...!',
            ]);
        }

        return redirect()->back();
    }
}
