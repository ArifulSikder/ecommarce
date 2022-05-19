@extends('backend.masterLayout.admin-master')
@section('title')
    ব্যানার যোগ করুন
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
                <h3 class="card-title">ব্যানার যোগ করুন</h3>
            </div>
            <div class="card-body">
                <form role="form" method="POST" action="{{ route('storeBanner') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>ব্যানার সাজান</label>
                            <select name="content_type"
                                class="form-control select2  @error('content_type') is-invalid @enderror"
                                style="width: 100%;" data-placeholder="ব্যানার সাজান বাছাই করুন">
                                <option selected="selected" value="">ব্যানার সাজান</option>
                                <option value="left"
                                    {{ collect(old('content_type'))->contains('left') ? 'selected' : '' }}>বাম পাশে
                                </option>
                                <option value="right"
                                    {{ collect(old('content_type'))->contains('right') ? 'selected' : '' }}>
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
                                name="title" placeholder="ব্যানারের শিরোনাম দিন" value="{{ old('title') }}">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="product_name"> প্রোডাক্টের নাম</label>
                            <input type="text" class="form-control  @error('product_name') is-invalid @enderror"
                                id="product_name" name="product_name" placeholder=" প্রোডাক্টের নাম দিন"
                                value="{{ old('product_name') }}">
                            @error('product_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="product_price">প্রোডাক্টের দাম</label>
                            <input type="number" class="form-control  @error('product_price') is-invalid @enderror"
                                id="product_price" name="product_price" placeholder="প্রোডাক্টের দাম দিন"
                                value="{{ old('product_price') }}">
                            @error('product_price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="banner_photo">ব্যানারের ছবি</label>
                            <input type="file" class="form-control  @error('banner_photo') is-invalid @enderror"
                                id="photoUpload" name="banner_photo" placeholder="ব্যানারের ছবি দিন"
                                value="{{ old('banner_photo') }}">
                            @error('banner_photo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <img id="previewHolder" src="" alt="">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-block">সেভ করুন</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
