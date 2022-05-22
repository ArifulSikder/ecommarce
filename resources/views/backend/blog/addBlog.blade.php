@extends('backend.masterLayout.admin-master')
@section('title')
    প্রোডাক্ট যোগ করুন
@endsection

{{-- menu active start --}}
@section('blog', 'menu-open')
@section('blogActive', 'active')
@section('addblog', 'active')
{{-- menu active end --}}
@section('maincontant')
    <div>
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">ব্লোগ যোগ করুন</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <form role="form" method="POST" action="{{ route('storeProduct') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="blog_title">ব্লোগ টাইটেল</label>
                                <input type="text" class="form-control  @error('blog_title') is-invalid @enderror"
                                    id="blog_title" name="blog_title" placeholder="প্রোডাক্টের নাম দিন"
                                    value='{{ old('blog_title') }}'>
                            </div>
                            @error('blog_title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="product_qty">প্রোডাক্টের পরিমান</label>
                                <input type="number" class="form-control  @error('product_qty') is-invalid @enderror"
                                    id="product_qty" name="product_qty" placeholder="প্রোডাক্টের পরিমান দিন"
                                    value='{{ old('product_qty') }}'>
                            </div>
                            @error('product_qty')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="product_code">প্রোডাক্টের কোড</label>
                                <input type="text" class="form-control  @error('product_code') is-invalid @enderror"
                                    id="product_code" name="product_code" placeholder="প্রোডাক্টের কোড দিন"
                                    value='{{ old('product_code') }}'>
                            </div>
                            @error('product_code')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="product_price">প্রোডাক্টের দাম (টাকা)</label>
                                <input type="number" class="form-control  @error('product_price') is-invalid @enderror"
                                    id="product_price" name="product_price" placeholder="প্রোডাক্টের দাম (টাকা) দিন"
                                    value='{{ old('product_price') }}'>
                            </div>
                            @error('product_price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="product_discount">প্রোডাক্টের ডিস্কাউন্ট (%)</label>
                                <input type="number" class="form-control  @error('product_discount') is-invalid @enderror"
                                    id="product_discount" name="product_discount"
                                    placeholder="প্রোডাক্টের ডিস্কাউন্ট (%) দিন" value='{{ old('product_discount') }}'>
                            </div>
                            @error('product_discount')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="short_description">প্রোডাক্টের ছোট বিবরন</label>
                                <textarea class="textarea" name="short_description" id="short_description"
                                    placeholder="প্রোডাক্টের ছোট বিবরন দিন">{{ old('short_description') }}</textarea>

                            </div>
                            @error('short_description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="long_description">প্রোডাক্টের বড় বিবরন</label>
                                <textarea class="textarea" name="long_description" id="long_description"
                                    placeholder="প্রোডাক্টের বড় বিবরন দিন">{{ old('long_description') }}</textarea>
                            </div>
                            @error('long_description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="product_thumbnail">প্রোডাক্টের থাম্বনেল</label>
                                <input type="file" class="form-control  @error('product_thumbnail') is-invalid @enderror"
                                    id="photoUpload" name="product_thumbnail" placeholder="প্রোডাক্টের থাম্বনেল দিন"
                                    value='{{ old('product_thumbnail') }}'>
                            </div>
                            @error('product_thumbnail')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <img id="previewHolder" src="" alt="">
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="product_slider_img">প্রোডাক্টের স্লাইডারের ছবি</label>
                                <input type="file" class="form-control  @error('product_slider_img') is-invalid @enderror"
                                    id="photoUploadd" name="product_slider_img" placeholder="প্রোডাক্টের স্লাইডারের ছবি দিন"
                                    value='{{ old('product_slider_img') }}'>
                            </div>
                            @error('product_slider_img')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <img id="previewHolderr" src="" alt="">
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="multiple_image">প্রোডাক্টের অন্যান্য ছবি</label>
                                <input type="file"
                                    class="form-control upload__inputfile @error('multiple_image') is-invalid @enderror"
                                    id="files" name="multiple_image[]" data-max_length="200" multiple
                                    placeholder="ক্যাটেগরির নাম দিন" value='{{ old('multiple_image') }}'>
                            </div>
                            @error('multiple_image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="upload__img-wrap"></div>
                            {{-- <img class="previewHolder" src="" alt=""> --}}
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="givenSlug">প্রোডাক্টের স্লাগ(English)</label>
                                <input type="text" class="form-control  @error('product_slug') is-invalid @enderror"
                                    id="givenSlug" placeholder="প্রোডাক্টের স্লাগ(English) দিন"
                                    value='{{ old('product_slug') }}'>
                            </div>
                            <input type="hidden" id="product_slug" name="product_slug">
                            @error('product_slug')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="special_offer">স্পেশাল অফার</label> &nbsp; &nbsp; &nbsp; &nbsp;
                                <input type="checkbox" id="special_offer" name="special_offer" value="1">
                                <span>স্পেশাল অফারে যোগ করতে চাইলে ক্লিক করুন !</span>
                            </div>
                            @error('special_offer')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">সেভ করুন</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.row -->

@endsection
