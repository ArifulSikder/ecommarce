<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductContent;
use App\Models\ProductMultipleImage;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

use function Ramsey\Uuid\v1;

class ProductController extends Controller
{
    function index(){
        $products =  Product::with('category')->orderBy("id", 'desc')->where('status', 1)->paginate(10);
        return view('backend.product.indexProduct',  compact('products'));
    }
    function addProduct(){
        $categories=Category::where("status", 1)->orderBy("category_name", 'asc')->get();
        return view('backend.product.addProduct',compact('categories'));
    }

    //store product 
    function storeProduct(Request $request){
        $validator = $request->validate([
            'category_id' => 'required|max:11',
            'product_name' => 'required|max:255',
            'product_qty' => 'required|max:11',
            'product_code' => 'required|max:255',
            'product_price' => 'required|max:50',
            'product_discount' => 'required|max:50',
            'short_description' => 'required|max:500',
            // 'long_description' => 'required',
            'product_thumbnail' => 'required',
            'multiple_image' => 'required',
            'product_slider_img' => 'required',
            'product_slug' => 'required|max:255|unique:products',
        ],[
            'category_id.required' => 'Please Enter This Filed',
            'product_name.required' => 'Please Enter This Filed',
            'product_qty.required' => 'Please Enter This Filed',
            'product_code.required' => 'Please Enter This Filed',
            'product_price.required' => 'Please Enter This Filed',
            'product_discount.required' => 'Please Enter This Filed',
            'short_description.required' => 'Please Enter This Filed',
            // 'long_description.required' => 'Please Enter This Filed',
            'product_thumbnail.required' => 'Please Enter This Filed',
            'multiple_image.required' => 'Please Enter This Filed',
            'product_slider_img.required' => 'Please Enter This Filed',
            'product_slug.required' => 'Please Enter This Filed'
        ]);

        $product_slider_img = '';
        if ($request->file('product_slider_img')) {
            $image = $request->file('product_slider_img');
            $imageName = $image->getClientOriginalName();
            Image::make($image)->resize(1230,660)->save('public/uploads/product_banner/' . $imageName);
            $product_slider_img = 'public/uploads/product_banner/' . $imageName;
        }

        $product_thumbnail = '';
        if ($request->file('product_thumbnail')) {
            $image = $request->file('product_thumbnail');
            $imageName = $image->getClientOriginalName();
            Image::make($image)->resize(950,950)->save('public/uploads/product/' . $imageName);
            $product_thumbnail = 'public/uploads/product/' . $imageName;
        }
        $product = Product::create([
            'category_id' => $request->category_id,
            'product_name' => $request->product_name,
            'product_qty' => $request->product_qty,
            'product_code' => $request->product_code,
            'product_price' => $request->product_price,
            'product_discount' => $request->product_discount,
            'short_description' => $request->short_description,
            // 'long_description' => $request->long_description,
            'product_thumbnail' => $product_thumbnail,
            'product_slider_img' => $product_slider_img,
            'special_offer' =>  $request->special_offer,
            'product_slug' =>  strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->product_slug))),
        ]);
        $multipleImg = $request->file('multiple_image');
        foreach ($multipleImg as $image) {
                $imageName = $image->getClientOriginalName();
                Image::make($image)->resize(950,950)->save('public/uploads/product/' . $imageName);
                $singleImg = 'public/uploads/product/' . $imageName;
           
            ProductMultipleImage::create([
               'product_id' => $product->id,
               'multiple_image' => $singleImg,
            ]);
        }

        
        if ($product == true) {
            $notification = ([
                'success' => 'প্রোডাক্ট সফলভাবে তৈরি করা হয়েছে !',
            ]);
        } else{
            $notification = ([
                'error' => 'প্রোডাক্ট  তৈরি করা ব্যর্থ হয়েছে...!',
            ]);
        }

        return redirect()->route('productList')->with($notification);

    }

    //edit product 
    function editProduct($product_id){
       $productMultipleImg=ProductMultipleImage::where(["status"=> 1, 'product_id'=> $product_id])->get();
       $categories=Category::where("status", 1)->orderBy("category_name", 'asc')->get();
       $productData=Product::findOrFail($product_id);
       return view('backend.product.editProduct',  compact('productData','categories','productMultipleImg'));
    }

    //update product 
    function updateProduct(Request $request){
        $request->validate([
            'category_id' => 'required|max:11',
            'product_name' => 'required|max:255',
            'product_qty' => 'required|max:11',
            'product_code' => 'required|max:255',
            'product_price' => 'required|max:50',
            'product_discount' => 'required|max:50',
            'short_description' => 'required|max:500',
            // 'long_description' => 'required',
            // 'product_slider_img' => 'required',
            'product_slug' => 'required|max:255|unique:products,product_slug,'.$request->id,
        ],[
            'category_id.required' => 'Please Enter This Filed',
            'product_name.required' => 'Please Enter This Filed',
            'product_qty.required' => 'Please Enter This Filed',
            'product_code.required' => 'Please Enter This Filed',
            'product_price.required' => 'Please Enter This Filed',
            'product_discount.required' => 'Please Enter This Filed',
            'short_description.required' => 'Please Enter This Filed',
            // 'long_description.required' => 'Please Enter This Filed',
            // 'product_slider_img.required' => 'Please Enter This Filed',
            'product_slug.required' => 'Please Enter This Filed',
        ]);
        $singleProduct = Product::findOrFail($request->id);
        $product_slider_img = $singleProduct->product_slider_img;
        if ($request->file('product_slider_img')) {
            $image = $request->file('product_slider_img');
            $imageName = $image->getClientOriginalName();
            Image::make($image)->resize(1230,660)->save('public/uploads/product_banner/' . $imageName);
            $product_slider_img = 'public/uploads/product_banner/' . $imageName;
        }

        $product_thumbnail = $singleProduct->product_thumbnail;
        if ($request->file('product_thumbnail')) {
            $image = $request->file('product_thumbnail');
            $imageName = $image->getClientOriginalName();
            Image::make($image)->resize(950,950)->save('public/uploads/product/' . $imageName);
            $product_thumbnail = 'public/uploads/product/' . $imageName;
        }
        $product = $singleProduct->update([
            'category_id' => $request->category_id,
            'product_name' => $request->product_name,
            'product_qty' => $request->product_qty,
            'product_code' => $request->product_code,
            'product_price' => $request->product_price,
            'product_discount' => $request->product_discount,
            'short_description' => $request->short_description,
            // 'long_description' => $request->long_description,
            'product_thumbnail' => $product_thumbnail,
            'product_slider_img' => $product_slider_img,
            'special_offer' =>  $request->special_offer,
            'product_slug' =>  strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->product_slug))),
        ]);
   

        
        if ($product == true) {
            $notification = ([
                'success' => 'প্রোডাক্ট সফলভাবে আপডেট করা হয়েছে !',
            ]);
        } else{
            $notification = ([
                'error' => 'প্রোডাক্ট  আপডেট করা ব্যর্থ হয়েছে...!',
            ]);
        }

        return redirect()->route('productList')->with($notification);
    }

    //delete product
    function deleteProduct($product_id){
        Product::findOrFail($product_id)->update(['status'=> 0]);
        return redirect()->back();
    }

    //view product 
    function viewProduct($product_id){
        $productMultipleImg=ProductMultipleImage::where(["status"=> 1, 'product_id'=> $product_id])->paginate();
        $productData=Product::findOrFail($product_id);
        return view('backend.product.viewProduct',  compact('productData','productMultipleImg'));
    }

    //image update 
    function imageUpdate(Request $request){
        
        $imageMulti = ProductMultipleImage::findOrFail($request->id);
        $multiple_image = $imageMulti->multiple_image;
        if ($request->file('multiple_image')) {
            $image = $request->file('multiple_image');
            $imageName = $image->getClientOriginalName();
            Image::make($image)->resize(950,950)->save('public/uploads/product/' . $imageName);
            $multiple_image = 'public/uploads/product/' . $imageName;
        }
        $MultipleImage = $imageMulti->update([
            'multiple_image'=> $multiple_image,
        ]);
        
        if ($MultipleImage == true) {
            $notification = ([
                'success' => 'ছবি সফলভাবে আপডেট করা হয়েছে !',
            ]);
        } else{
            $notification = ([
                'error' => 'ছবি  আপডেট করা ব্যর্থ হয়েছে...!',
            ]);
        }
        return redirect()->back()->with($notification);
    }
    //image delete
    function ImageDelete($img_id){
        ProductMultipleImage::findOrFail($img_id)->update(['status'=> 0]);
        return redirect()->back();
    }

    //add product content 
    function addProductContent($product_id){
        $productContentData =ProductContent::where('product_id',$product_id)->first();
        return view('backend.product.content.addProductContent', compact('product_id', 'productContentData'));
    }

    //store product content 
    function storeProductContent(Request $request){
        $input=$request->all();
      
        if ($request->update==='update') {
            $input=$request->except('update');
            $request->validate([
                'product_warrenty' => 'required|max:255',
                'free_shipping' => 'required|max:255',
                'file_type' => 'required|max:255',
                'long_description' => 'required',
            ],[
                'product_warrenty.required' => 'Please Enter This Filed',
                'free_shipping.required' => 'Please Enter This Filed',
                'file_type.required' => 'Please Enter This Filed',
                'long_description.required' => 'Please Enter This Filed',
            ]);
            $content=ProductContent::where('product_id',$input['product_id'])->first();
            $input['content_file'] = $content->content_file;
            if ($request->file('content_file')) {
                File::delete($content->content_file);
                $image = $request->file('content_file');
                $imageName =hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
                if ($input['file_type']=='Image') {
                    Image::make($image)->resize(835,552)->save('public/uploads/product/productContent/' . $imageName);
                    $input['content_file'] = 'public/uploads/product/productContent/' . $imageName;
                } else{
                    $input['content_file'] = $image->move('public/uploads/product/productContent/',$imageName );
                    // dd($input['content_file']);
                }
            }
            $productContent=$content->update($input);
        } else{
            $request->validate([
                'product_warrenty' => 'required|max:255',
                'free_shipping' => 'required|max:255',
                'file_type' => 'required|max:255',
                'long_description' => 'required',
                'content_file' => 'required',
            ],[
                'product_warrenty.required' => 'Please Enter This Filed',
                'free_shipping.required' => 'Please Enter This Filed',
                'file_type.required' => 'Please Enter This Filed',
                'long_description.required' => 'Please Enter This Filed',
                'content_file.required' => 'Please Enter This Filed',
            ]);
            $input['content_file'] = '';
            if ($request->file('content_file')) {
                $image = $request->file('content_file');
                $imageName =hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
                if ($input['file_type']=='Image') {
                    Image::make($image)->resize(835,552)->save('public/uploads/product/productContent/' . $imageName);
                    $input['content_file'] = 'public/uploads/product/productContent/' . $imageName;
                } else{
                    $input['content_file'] = $image->move('public/uploads/product/productContent/',$imageName );
                    // dd($input['content_file']);
                }
            }

            $productContent=ProductContent::create($input);
        }
            
        if ($productContent == true) {
            $notification = ([
                'success' => 'প্রোডাক্ট কন্টেন সফলভাবে আপডেট করা হয়েছে !',
            ]);
        } else{
            $notification = ([
                'error' => 'প্রোডাক্ট কন্টেন  আপডেট করা ব্যর্থ হয়েছে...!',
            ]);
        }

        return redirect()->route('productList')->with($notification);
    }


}
