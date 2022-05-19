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

                <form role="form" method="POST" action="{{ route('storeProduct') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>ক্যাটেগরির নাম</label>
                                <select name="category_id"
                                    class="form-control select2 @error('category_id') is-invalid @enderror"
                                    style=" width:
                                                                                                                                                                                                                                100%;"
                                    data-placeholder="ক্যাটেগরির নাম বাছাই করুন">
                                    <option selected="selected" value="">ক্যাটেগরির নাম </option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ collect(old('category_id'))->contains($category->id) ? 'selected' : '' }}>
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
                                    value='{{ old('product_name') }}'>
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
                                    value='{{ old('product_qty') }}'>
                            </div>
                            @error('product_qty')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>প্রোডাক্টের সাইজ</label>
                                <select name="product_size"
                                    class="form-control select2  @error('product_size') is-invalid @enderror"
                                    style="width: 100%;" data-placeholder="প্রোডাক্টের সাইজ বাছাই করুন">
                                    <option selected="selected" value="">প্রোডাক্টের সাইজ</option>
                                    <option value="XL"
                                        {{ collect(old('product_size'))->contains('XL') ? 'selected' : '' }}>XL
                                    </option>
                                    <option value="L"
                                        {{ collect(old('product_size'))->contains('L') ? 'selected' : '' }}>L
                                    </option>
                                    <option value="M"
                                        {{ collect(old('product_size'))->contains('M') ? 'selected' : '' }}>M
                                    </option>
                                    <option value="S"
                                        {{ collect(old('product_size'))->contains('S') ? 'selected' : '' }}>S
                                    </option>
                                </select>
                            </div>
                            @error('category_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="product_color">প্রোডাক্টের কালার</label>
                                <input type="text" class="form-control  @error('product_color') is-invalid @enderror"
                                    id="product_color" name="product_color" placeholder="প্রোডাক্টের কালার দিন"
                                    value='{{ old('product_color') }}'>
                            </div>
                            @error('product_color')
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
        $(document).ready(function() {
            if (window.File && window.FileList && window.FileReader) {
                $("#files").on("change", function(e) {
                    var files = e.target.files,
                        filesLength = files.length;
                    for (var i = 0; i < filesLength; i++) {
                        var f = files[i]
                        var fileReader = new FileReader();
                        fileReader.onload = (function(e) {
                            var file = e.target;
                            $(`<span class="pip">
                                    <img class="imageThumb" src="${e.target.result}" title="${file.name}" alt=""> <br>
                                    <span class="remove">Remove Photo</span>
                                </span>`).insertAfter("#files");
                            $(".remove").click(function() {
                                $(this).parent(".pip").remove();
                            });

                            // Old code here
                            /*$("<img></img>", {
                              class: "imageThumb",
                              src: e.target.result,
                              title: file.name + " | Click to remove"
                            }).insertAfter("#files").click(function(){$(this).remove();});*/

                        });
                        fileReader.readAsDataURL(f);
                    }
                    console.log(files);
                });
            } else {
                alert("Your browser doesn't support to File API")
            }
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
