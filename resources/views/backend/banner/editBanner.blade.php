@extends('backend.masterLayout.admin-master')
@section('title')
    ব্যানার ইডিট করুন
@endsection

{{-- menu active start --}}
@section('banner', 'menu-open')
@section('bannerActive', 'active')
@section('addBanner', 'active')
{{-- menu active end --}}
@section('maincontant')
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">ব্যানার ইডিট করুন</h3>
            </div>
            <div class="card-body">
                <form role="form" method="POST" action="{{ route('updateBanner') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $bannerData->id }}">
                    <div class="card-body">
                        <div class="form-group">
                            <label>প্রডাক্ট বাছাই করুন</label>
                            <select name="product_id"
                                class="form-control select2  @error('product_id') is-invalid @enderror" style="width: 100%;"
                                data-placeholder="প্রডাক্ট বাছাই করুন">
                                <option selected="selected" value="">প্রডাক্ট</option>
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}"
                                        {{ $product->id == $bannerData->product_id ? 'selected' : '' }}>
                                        {{ $product->product_name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('product_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>ব্যানার সাজান</label>
                            <select name="content_type"
                                class="form-control select2  @error('content_type') is-invalid @enderror"
                                style="width: 100%;" data-placeholder="ব্যানার সাজান বাছাই করুন">
                                <option selected="selected" value="">ব্যানার সাজান</option>
                                <option value="left" {{ $bannerData->content_type == 'left' ? 'selected' : '' }}>বাম
                                    পাশে
                                </option>
                                <option value="right" {{ $bannerData->content_type == 'right' ? 'selected' : '' }}>
                                    ডান পাশে
                                </option>
                            </select>
                            @error('content_type')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="title">ব্যানারের শিরোনাম</label>
                            <input type="text" class="form-control  @error('title') is-invalid @enderror" id="title"
                                name="title" placeholder="ব্যানারের শিরোনাম দিন" value="{{ $bannerData->title }}">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="product_name"> প্রোডাক্টের নাম</label>
                            <input type="text" class="form-control  @error('product_name') is-invalid @enderror"
                                id="product_name" name="product_name" placeholder=" প্রোডাক্টের নাম দিন"
                                value="{{ $bannerData->product_name }}">
                            @error('product_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="product_price">প্রোডাক্টের দাম</label>
                            <input type="number" class="form-control  @error('product_price') is-invalid @enderror"
                                id="product_price" name="product_price" placeholder="প্রোডাক্টের দাম দিন"
                                value="{{ $bannerData->product_price }}">
                            @error('product_price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="banner_photo">ব্যানারের ছবি</label>
                            <input type="file" class="form-control  @error('banner_photo') is-invalid @enderror"
                                id="photoUpload" name="banner_photo" placeholder="ব্যানারের ছবি দিন"
                                value="{{ $bannerData->banner_photo }}">
                            @error('banner_photo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <img id="previewHolder" src="" alt="">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-block">আপডেট করুন</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
