<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use illuminate\Support\Facades\File;

class CagegoryController extends Controller
{
    function index()
    {
        $categories = Category::orderBy("category_name", 'asc')->where('status', 1)->paginate(10);
        return view('backend.category.indexCategory', compact('categories'));
    }

    // function slugable(Request $request){

    //     $slug = SlugService::createSlug(Category::class, 'slug', $request->slug);
    //     return response()->json($slug);
    // }
    // store category
    function storeCategory(Request $request)
    {
        $validator = $request->validate([
            'category_name' => 'required|unique:categories|max:255',
            'category_icon' => 'required|max:255',
            'category_thumbnail' => 'required',
            'category_status' => 'required|max:11',
            'slug' => 'required|max:255|unique:categories',
        ], [
            'category_name.required' => 'ক্যাটেগরির নাম দিন',
            'category_icon.required' => 'ক্যাটেগরির আইকন দিন',
            'category_thumbnail.required' => 'ক্যাটেগরির ছবি দিন',
            'category_status.required' => 'ক্যাটেগরির স্থাপনের জন্য বাছাই করুন',
            'slug.required' => 'ক্যাটেগরির স্লাগ দিন'
        ]);

        $category_thumbnail = '';
        if ($request->file('category_thumbnail')) {
            $image = $request->file('category_thumbnail');
            $imageName = $image->getClientOriginalName();
            Image::make($image)->resize(1230, 660)->save('public/uploads/category' . $imageName);
            $category_thumbnail = 'public/uploads/category' . $imageName;
        }

        $category = Category::create([
            'category_name' => $request->category_name,
            'category_icon' => $request->category_icon,
            'category_status' => $request->category_status,
            'slug' =>  strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->slug))),
            'category_thumbnail' => $category_thumbnail,
        ]);

        if ($category == true) {
            $notification = ([
                'success' => 'ক্যাটেগরি সফলভাবে তৈরি করা হয়েছে !',
            ]);
        } else {
            $notification = ([
                'error' => 'ক্যাটেগরি  তৈরি করা ব্যর্থ হয়েছে...!',
            ]);
        }

        return redirect()->back()->with($notification);
    }


    // store category
    function updateCategory(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_name' => 'required|max:255|unique:categories,category_name,' . $request->id,
            'category_icon' => 'required|max:255',
            'slug' => 'required|max:255|unique:categories,slug,' . $request->id,
            // 'category_thumbnail' => 'required',
            'category_status' => 'required|max:11',
        ]);

        if ($validator->fails()) {
            return response()->json([$validator->errors(), 'status' => 0]);
        }
        $category = Category::findOrFail($request->id);
        $category_thumbnail = $category->category_thumbnail;
        if ($request->file('category_thumbnail')) {
            $image = $request->file('category_thumbnail');
            $imageName = $image->getClientOriginalName();
            Image::make($image)->resize(1230, 660)->save('public/uploads/category' . $imageName);
            $category_thumbnail = 'public/uploads/category' . $imageName;
        }

        $category = Category::findOrFail($request->id)->update([
            'category_name' => $request->input('category_name'),
            'category_icon' => $request->input('category_icon'),
            'category_status' => $request->input('category_status'),
            'category_thumbnail' => $category_thumbnail,
            'slug' =>  strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->input('slug')))),
        ]);

        if ($category == true) {
            $notification = ([
                'success' => 'ক্যাটেগরি সফলভাবে তৈরি করা হয়েছে !',
                'status' => 1,
            ]);
        } else {
            $notification = ([
                'error' => 'ক্যাটেগরি  তৈরি করা ব্যর্থ হয়েছে...!',
                'status' => 2,
            ]);
        }

        return response()->json([$notification]);
    }

    //delete Category
    function deleteCategory($cat_id)
    {
        Category::findOrFail($cat_id)->delete();
        return redirect()->back();
    }
}
