<?php

namespace App\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use App\Models\District;
use Illuminate\Support\Facades\Validator;
use App\Models\Division;
use App\Models\Thana;
use Illuminate\Http\Request;

class LocationController extends Controller
{

    // ******************************************************** division start *****************************************************
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

    // delete division

    function deleteDivision($division_id){
        Division::findOrFail($division_id)->delete();
        return redirect()->back();
    }

    // ******************************************************** division end *****************************************************


    // ******************************************************** district start *****************************************************

    //district index

    function districtIndex(){
        $divisions=Division::where("status", 1)->orderBy("division_name")->get();
        $districts = District::with('division')->where("status", 1)->orderBy("district_name")->paginate(10);
        return view('backend.location.district.districtIndex', compact('districts','divisions'));
    }

    // district store

    function storeDistrict(Request $request){
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

        return redirect()->back()->with($notification);
    }


    //district delete 

    function deleteDistrict($district_id){
        District::findOrFail($district_id)->update(['status'=> 0]);
        return redirect()->back();
    }

    // ******************************************************** district end *****************************************************


    // ******************************************************** thana start *****************************************************

    // thana list
    function thanaIndex(){
        $thanas = Thana::with('division','district')->where("status", 1)->orderBy("thana_name", 'asc')->paginate(10);
        $divisions=Division::where("status", 1)->orderBy("division_name")->get();
        $districts=District::where("status", 1)->orderBy("district_name")->get();
        return view('backend.location.thana.thanaIndex', compact('thanas','divisions','districts'));
    }

    //division by district get
    function divisionByDistrict(Request $request){
        $districts = District::where(['status'=> 1, 'division_id' => $request->division_id])->get();
        return response()->json($districts);
    }

    //store thana 
    function storeThana(Request $request){
        $request->validate([
            'division_id' => 'required|max:21',
            'district_id' => 'required|max:21',
            'thana_name' => 'required|max:255|unique:thanas',
        ],[
            'division_id.required' => 'Please Enter This Filed',
            'district_id.required' => 'Please Enter This Filed',
            'thana_name.required' => 'Please Enter This Filed',
        ]);

        $thana=Thana::create($request->all());
        
        if ($thana == true) {
            $notification = ([
                'success' => 'থানা সফলভাবে তৈরি করা হয়েছে !',
            ]);
        } else{
            $notification = ([
                'error' => 'থানা  তৈরি করা ব্যর্থ হয়েছে...!',
            ]);
        }

        return redirect()->back()->with($notification);
    }

    // update thana

    function updateThana(Request $request){
        $validator = Validator::make($request->all(), [
            'division_id' => 'required|max:21',
            'district_id' => 'required|max:21',
            'thana_name' => 'required|max:255|unique:thanas,thana_name,'. $request->id,
        ],[
            'division_id.required' => 'Please Enter This Filed',
            'district_id.required' => 'Please Enter This Filed',
            'thana_name.required' => 'Please Enter This Filed',
        ]);

        if ($validator->fails()) {
            return response()->json([$validator->errors(), 'status' => 0]);
        }


        $division=Thana::findOrFail($request->id)->update($request->all());
        
        if ($division == true) {
            $notification = ([
                'success' => 'থানা সফলভাবে আপডেট করা হয়েছে !', 
                'status' => 1,
            ]);
        } else{
            $notification = ([
                'error' => 'থানা  আপডেট করা ব্যর্থ হয়েছে...!',
                'status' => 2,
            ]);
        }

        return response()->json($notification);
    }
    // ******************************************************** thana end *****************************************************


}
