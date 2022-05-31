<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    function indexBlog(){
        $blogs=Blog::orderBy("id", 'asc')->where(['status'=>1])->paginate(10);
        return view('backend.blog.indexBlog',compact('blogs'));
    }

    //add block
    function addBlog(){
        return view('backend.blog.addBlog');
    }

    //store block
    function storeBlog(Request $request){
        $request->validate([
            'blog_title' => 'required|max:255',
            'blog_slug' =>'required|unique:blogs,blog_slug,NULL,id,deleted_at,NULL', //['required','max:255', Rule::unique('blogs')->whereNull('deleted_at')]
            'writer' => 'required|max:255',
            'date' => 'required',
            'blog_thumbnail' => 'required',
        ],[
            'blog_title.required' => 'Please Enter This Filed',
            'blog_slug.required' => 'Please Enter This Filed',
            'writer.required' => 'Please Enter This Filed',
            'date.required' => 'Please Enter This Filed',
            'blog_thumbnail.required' => 'Please Enter This Filed',

        ]);
        $input = $request->all();
        $input['blog_thumbnail'] = '';
        if ($request->file('blog_thumbnail')) {
            $image = $request->file('blog_thumbnail');
            $imageName = $image->getClientOriginalName();
            Image::make($image)->resize(1230,660)->save('public/uploads/blog/' . $imageName);
            $input['blog_thumbnail'] = 'public/uploads/blog/' . $imageName;
        }

        $blog = Blog::create($input);
           
        if ($blog == true) {
            $notification = ([
                'success' => 'ব্লোগ সফলভাবে তৈরি করা হয়েছে !',
            ]);
        } else{
            $notification = ([
                'error' => 'ব্লোগ  তৈরি করা ব্যর্থ হয়েছে...!',
            ]);
        }

        return redirect()->route('blogs-list')->with($notification);
    }

    //edit blog
    function editBlog($blog_id){
        $blogData=Blog::findOrFail($blog_id);
        return view('backend.blog.blogEdit', compact('blogData'));
    }

    //update blog

    function updateBlog(Request $request){
        $input = $request->all();
        $request->validate([
            'blog_title' => 'required|max:255',
            'blog_slug' =>'required|max:255|unique:blogs,blog_slug,'.$request->id. ',id,deleted_at,NULL',
            'writer' => 'required|max:255',
            'date' => 'required',
            'blog_thumbnail' => 'required',
        ] ,[
            'blog_title.required' => 'Please Enter This Filed',
            'blog_slug.required' => 'Please Enter This Filed',
            'writer.required' => 'Please Enter This Filed',
            'date.required' => 'Please Enter This Filed',
            'blog_thumbnail.required' => 'Please Enter This Filed',

        ]);

        $blogData=Blog::findOrFail($request->id);
        $input['blog_thumbnail'] = $blogData->blog_thumbnail;
        if ($request->file('blog_thumbnail')) {
            $image = $request->file('blog_thumbnail');
            $imageName = $image->getClientOriginalName();
            Image::make($image)->resize(1230,660)->save('public/uploads/blog/' . $imageName);
            $input['blog_thumbnail'] = 'public/uploads/blog/' . $imageName;
        }

        $blog = $blogData->update($input);
        if ($blog == true) {
            $notification = ([
                'success' => 'ব্লোগ সফলভাবে আপডেট করা হয়েছে !',
            ]);
        } else{
            $notification = ([
                'error' => 'ব্লোগ  আপডেট করা ব্যর্থ হয়েছে...!',
            ]);
        }
        return redirect()->route('blogs-list')->with($notification);
    }
}
