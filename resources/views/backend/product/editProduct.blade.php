@extends('backend.masterLayout.admin-master')
@section('title')
    প্রোডাক্ট যোগ করুন
@endsection

{{-- menu active start --}}
@section('product', 'menu-open')
@section('productActive', 'active')
@section('addProduct', 'active')
{{-- menu active end --}}
@section('maincontant')
    <div>
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">প্রোডাক্ট যোগ করুন</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                <form role="form" method="POST" action="{{ route('updateProduct') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $productData->id }}" name="id">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>ক্যাটেগরির নাম</label>
                                <select name="category_id"
                                    class="form-control select2 @error('category_id') is-invalid @enderror"
                                    style=" width:100%;" data-placeholder="ক্যাটেগরির নাম বাছাই করুন">
                                    <option selected="selected" value="">ক্যাটেগরির নাম </option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $productData->category_id == $category->id ? 'selected' : '' }}>
                                            {{ $category->category_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            @error('category_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="product_name">প্রোডাক্টের নাম</label>
                                <input type="text" class="form-control  @error('product_name') is-invalid @enderror"
                                    id="product_name" name="product_name" placeholder="প্রোডাক্টের নাম দিন"
                                    value='{{ $productData->product_name }}'>
                            </div>
                            @error('product_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="product_qty">প্রোডাক্টের পরিমান</label>
                                <input type="number" class="form-control  @error('product_qty') is-invalid @enderror"
                                    id="product_qty" name="product_qty" placeholder="প্রোডাক্টের পরিমান দিন"
                                    value='{{ $productData->product_qty }}'>
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
                                    value='{{ $productData->product_code }}'>
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
                                    value='{{ $productData->product_price }}'>
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
                                    placeholder="প্রোডাক্টের ডিস্কাউন্ট (%) দিন"
                                    value='{{ $productData->product_discount }}'>
                            </div>
                            @error('product_discount')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="short_description">প্রোডাক্টের ছোট বিবরন</label>
                                <textarea class="textarea" name="short_description" id="short_description"
                                    placeholder="প্রোডাক্টের ছোট বিবরন দিন">{{ $productData->short_description }}</textarea>

                            </div>
                            @error('short_description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- <div class="col-md-6">
                            <div class="form-group">
                                <label for="long_description">প্রোডাক্টের বড় বিবরন</label>
                                <textarea class="textarea" name="long_description" id="long_description"
                                    placeholder="প্রোডাক্টের বড় বিবরন দিন">{{ $productData->long_description }}</textarea>
                            </div>
                            @error('long_description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div> --}}
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
                            <img id="previewHolder" height="100px" src="{{ asset($productData->product_thumbnail) }}"
                                alt="product thumbnail preview">
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
                        {{-- <div class="col-md-6">
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
                            <div id="multipleImgPreview">
                                @foreach ($productMultipleImg as $productImg)
                                    <img width="100px" src="{{ asset($productImg->multiple_image) }}"
                                        alt="multiple image preview">
                                @endforeach

                            </div>
                        </div> --}}

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="givenSlug">প্রোডাক্টের স্লাগ(English)</label>
                                <input type="text" class="form-control  @error('product_slug') is-invalid @enderror"
                                    id="givenSlug" placeholder="প্রোডাক্টের স্লাগ(English) দিন"
                                    value='{{ $productData->product_slug }}'>
                            </div>
                            <input type="hidden" id="product_slug" name="product_slug"
                                value='{{ $productData->product_slug }}'>
                            @error('product_slug')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="special_offer">স্পেশাল অফার</label> &nbsp; &nbsp; &nbsp; &nbsp;
                                <input type="checkbox" id="special_offer" name="special_offer" value="1"
                                    {{ $productData->special_offer == 1 ? 'checked' : '' }}>
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

@section('script')
    <script>
        //preview image user
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#previewHolder').attr('src', '');
                    $('#previewHolder').attr('src', e.target.result);
                    $('#previewHolder').css('width', '100px')
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                alert('select a file to see preview');
                $('.previewHolder').attr('src', '');
            }
        }
        $("#photoUpload").change(function() {
            readURL(this);
        });
    </script>

    <script>
        $(document).ready(function() {
            $("#givenSlug").keyup(function(e) {
                var slug = $(this).val();
                $("#product_slug").val(slug.replace(/\s+/g, '-').toLowerCase());
            });
        });
    </script>

@endsection
