@extends('frontend.layout.frontendLayout')

@section('title', 'আমাদের শপ ।। হোম')
@section('pageClass', 'home')


@section('mainSection')
    <div class="page-wrapper">
        <h1 class="d-none">আমাদের শপ</h1>
        @include('frontend.include.header')
        <!-- End Header -->
        <main class="main mt-lg-4">
            <div class="page-content">
                <div class="container">
                    <div class="row">
                        @include('frontend.include.sidebar')
                        <div class="col-xl-9 col-lg-8">
                            <section class="intro-section mb-6">
                                <div class="owl-carousel owl-theme row owl-dot-inner owl-dot-white intro-slider animation-slider cols-1 mb-4"
                                    data-owl-options="{'items': 1, 'dots': true, 'nav': false, 'loop': true,'autoplay': false}">

                                    @foreach ($banners as $banner)
                                        @if ($banner->content_type == 'right')
                                            <div class="banner banner-fixed intro-slide2">
                                                <figure>
                                                    <img src="{{ asset($banner->banner_photo) }}" alt="intro-banner"
                                                        width="880" height="474" style="background-color: #fbfcfc;" />
                                                </figure>
                                                <div class="banner-content y-50 text-right">
                                                    <h4 class="banner-subtitle text-body font-weight-semi-bold mb-3 slide-animate"
                                                        data-animation-options="{'name': 'fadeInDownShorter','duration': '1s'}">
                                                        {{ $banner->title }}
                                                    </h4>
                                                    <h2 class="banner-title text-uppercase ls-l slide-animate text-white"
                                                        data-animation-options="{'name': 'fadeInDownShorter','delay': '.3s','duration': '1s' }">
                                                        {{ $banner->product_name }}
                                                    </h2>
                                                    <p class="font-weight-semi-bold ls-m text-body mb-6 slide-animate"
                                                        data-animation-options="{'name': 'fadeInDownShorter','delay': '.4s','duration': '1s'}">
                                                        মূল্য ৳ {{ banglaNumber($banner->product_price) }}/-
                                                    </p>
                                                    {{-- <a href="{{ route('productDetails') }}"
                                                        class="btn btn-dark btn-rounded slide-animate"
                                                        data-animation-options="{'name': 'fadeInDownShorter','delay': '.5s','duration': '1s'}">
                                                        এখুনি কিনুন</a> --}}
                                                </div>
                                            </div>
                                        @else
                                            <div class="banner banner-fixed intro-slide3">
                                                <figure>
                                                    <img src="{{ asset($banner->banner_photo) }}" alt="intro-banner"
                                                        width="880" height="474" style="background-color: #d3d4d5;" />
                                                </figure>
                                                <div class="banner-content y-50 pb-3">
                                                    <div class="slide-animate"
                                                        data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1s'}">
                                                        <h4 class="banner-subtitle font-weight-normal ls-m mb-1">
                                                            {{ $banner->title }}</h4>
                                                        <h2 class="banner-title text-uppercase mb-3 ls-l">
                                                            {{ $banner->product_name }}
                                                        </h2>
                                                        <h4 class="banner-price-info text-uppercase ls-l">মূল্য <strong
                                                                class="text-primary">৳
                                                                {{ banglaNumber($banner->product_price) }}/-</strong>
                                                        </h4>
                                                        {{-- <p class="text-dark lh-1 ls-m mb-4">প্যকেজ কিনে বাড়তি সুবিধা পান !
                                                        </p> --}}
                                                        {{-- <a href="{{ route('productDetails') }}"
                                                            class="btn btn-white btn-rounded">এখুনি কিনুন</a> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </section>
                            {{-- special product --}}
                            <section class="product-wrapper mb-8">
                                <h2 class="title title-line title-underline with-link appear-animate"
                                    data-animation-options="{'delay': '.3s'}">
                                    বৈশিষ্ট্যযুক্ত পণ্য
                                    <a href="#" class="font-weight-semi-bold">View more<i
                                            class="d-icon-arrow-right"></i></a>
                                </h2>
                                <div class="row gutter-xs appear-animate" data-animation-options="{'delay': '.3s'}">

                                    @foreach ($products->take(12) as $product)
                                        <div class="col-md-3 col-6 mb-4">
                                            <div class="product text-center">
                                                <figure class="product-media">
                                                    <a href="{{ url('_' . $product->product_slug) }}">
                                                        <img src="{{ asset($product->product_thumbnail) }}" alt="product"
                                                            width="280" height="315" style="background-color: #f5f5f5;" />
                                                    </a>
                                                    <div class="product-label-group">
                                                        <label class="product-label label-new">নতুন</label>
                                                        @if ($product->product_discount > 0)
                                                            <label class="product-label label-sale">
                                                                {{ banglaNumber($product->product_discount) }}% off
                                                            </label>
                                                        @endif

                                                    </div>
                                                    <div class="product-action-vertical">
                                                        <button class="btn-product-icon ViewProduct"
                                                            id="{{ $product->id }}" data-toggle="modal"
                                                            data-target="#addCartModal" title="Add to cart"><i
                                                                class="d-icon-bag"></i></button>
                                                        {{-- <button id="{{ $product->id }}" authId='{{ Auth::id() }}'
                                                            class="btn-product-icon AddToWishList"
                                                            title="Add to wishlist"><i class="d-icon-heart"></i></button> --}}
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="{{ url('_' . $product->product_slug) }}"
                                                            class="btn-product" title="Quick View">দ্রুত
                                                            দেখুন</a>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="product-cat"><a
                                                            href="{{ url('_' . $product->product_slug) }}">{{ $product->category->category_name }}</a>
                                                    </div>
                                                    <h3 class="product-name">
                                                        <a
                                                            href="{{ url('_' . $product->product_slug) }}">{{ $product->product_name }}</a>
                                                    </h3>
                                                    @if ($product->product_discount > 0)
                                                        <div class="product-price">
                                                            <ins class="new-price">৳
                                                                {{ banglaNumber($product->product_price - ($product->product_price * $product->product_discount) / 100) }}/-</ins><del
                                                                class="old-price">৳
                                                                {{ banglaNumber($product->product_price) }}/-</del>
                                                        </div>
                                                    @else
                                                        <div class="product-price">
                                                            <ins class="new-price">৳
                                                                {{ banglaNumber($product->product_price) }}/-
                                                            </ins>
                                                        </div>
                                                    @endif
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width:80%"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </section>
                            {{-- cat wise product index zero --}}
                            <section class="product-wrapper mb-8">
                                <h2 class="title title-line title-underline with-link appear-animate"
                                    data-animation-options="{'delay': '.3s'}">
                                    {{ $singleCategory->skip(0)->first()->category_name }}
                                    <a href="#" class="font-weight-semi-bold">View more<i
                                            class="d-icon-arrow-right"></i></a>
                                </h2>
                                <div class="row gutter-xs appear-animate" data-animation-options="{'delay': '.3s'}">
                                    @foreach (catWiseProducts($singleCategory->skip(0)->first()->id)->take(4) as $product)
                                        {{-- @if ($product->category_id) --}}
                                        <div class="col-md-3 col-6 mb-4">
                                            <div class="product text-center">
                                                <figure class="product-media">
                                                    <a href="{{ url('_' . $product->product_slug) }}">
                                                        <img src="{{ asset($product->product_thumbnail) }}" alt="product"
                                                            width="280" height="315" style="background-color: #f5f5f5;" />
                                                    </a>
                                                    <div class="product-label-group">
                                                        <label class="product-label label-new">নতুন</label>
                                                        @if ($product->product_discount > 0)
                                                            <label class="product-label label-sale">
                                                                {{ banglaNumber($product->product_discount) }}% off
                                                            </label>
                                                        @endif

                                                    </div>
                                                    <div class="product-action-vertical">
                                                        <button class="btn-product-icon ViewProduct"
                                                            id="{{ $product->id }}" data-toggle="modal"
                                                            data-target="#addCartModal" title="Add to cart"><i
                                                                class="d-icon-bag"></i></button>
                                                        {{-- <button id="{{ $product->id }}" authId='{{ Auth::id() }}'
                                                            class="btn-product-icon AddToWishList"
                                                            title="Add to wishlist"><i class="d-icon-heart"></i></button> --}}
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="{{ url('_' . $product->product_slug) }}"
                                                            class="btn-product" title="Quick View">দ্রুত
                                                            দেখুন</a>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="product-cat"><a
                                                            href="{{ url('_' . $product->product_slug) }}">{{ $product->category->category_name }}</a>
                                                    </div>
                                                    <h3 class="product-name">
                                                        <a
                                                            href="{{ url('_' . $product->product_slug) }}">{{ $product->product_name }}</a>
                                                    </h3>
                                                    @if ($product->product_discount > 0)
                                                        <div class="product-price">
                                                            <ins class="new-price">৳
                                                                {{ banglaNumber($product->product_price - ($product->product_price * $product->product_discount) / 100) }}/-</ins><del
                                                                class="old-price">৳
                                                                {{ banglaNumber($product->product_price) }}/-</del>
                                                        </div>
                                                    @else
                                                        <div class="product-price">
                                                            <ins class="new-price">৳
                                                                {{ banglaNumber($product->product_price) }}/-
                                                            </ins>
                                                        </div>
                                                    @endif
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width:80%"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- @endif --}}
                                    @endforeach
                                </div>
                            </section>
                            {{-- cat wise product index one --}}
                            <section class="product-wrapper mb-8">
                                <h2 class="title title-line title-underline with-link appear-animate"
                                    data-animation-options="{'delay': '.3s'}">
                                    {{ $singleCategory->skip(1)->first()->category_name }}
                                    <a href="#" class="font-weight-semi-bold">View more<i
                                            class="d-icon-arrow-right"></i></a>
                                </h2>
                                <div class="row gutter-xs appear-animate" data-animation-options="{'delay': '.3s'}">
                                    @foreach (catWiseProducts($singleCategory->skip(1)->first()->id)->take(4) as $product)
                                        {{-- @if ($product->category_id) --}}
                                        <div class="col-md-3 col-6 mb-4">
                                            <div class="product text-center">
                                                <figure class="product-media">
                                                    <a href="{{ url('_' . $product->product_slug) }}">
                                                        <img src="{{ asset($product->product_thumbnail) }}" alt="product"
                                                            width="280" height="315" style="background-color: #f5f5f5;" />
                                                    </a>
                                                    <div class="product-label-group">
                                                        <label class="product-label label-new">নতুন</label>
                                                        @if ($product->product_discount > 0)
                                                            <label class="product-label label-sale">
                                                                {{ banglaNumber($product->product_discount) }}% off
                                                            </label>
                                                        @endif

                                                    </div>
                                                    <div class="product-action-vertical">
                                                        <button class="btn-product-icon ViewProduct"
                                                            id="{{ $product->id }}" data-toggle="modal"
                                                            data-target="#addCartModal" title="Add to cart"><i
                                                                class="d-icon-bag"></i></button>
                                                        {{-- <button id="{{ $product->id }}" authId='{{ Auth::id() }}'
                                                            class="btn-product-icon AddToWishList"
                                                            title="Add to wishlist"><i class="d-icon-heart"></i></button> --}}
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="{{ url('_' . $product->product_slug) }}"
                                                            class="btn-product" title="Quick View">দ্রুত
                                                            দেখুন</a>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="product-cat"><a
                                                            href="{{ url('_' . $product->product_slug) }}">{{ $product->category->category_name }}</a>
                                                    </div>
                                                    <h3 class="product-name">
                                                        <a
                                                            href="{{ url('_' . $product->product_slug) }}">{{ $product->product_name }}</a>
                                                    </h3>
                                                    @if ($product->product_discount > 0)
                                                        <div class="product-price">
                                                            <ins class="new-price">৳
                                                                {{ banglaNumber($product->product_price - ($product->product_price * $product->product_discount) / 100) }}/-</ins><del
                                                                class="old-price">৳
                                                                {{ banglaNumber($product->product_price) }}/-</del>
                                                        </div>
                                                    @else
                                                        <div class="product-price">
                                                            <ins class="new-price">৳
                                                                {{ banglaNumber($product->product_price) }}/-
                                                            </ins>
                                                        </div>
                                                    @endif
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width:80%"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- @endif --}}
                                    @endforeach
                                </div>
                            </section>
                            {{-- cat wise product index two --}}
                            <section class="product-wrapper mb-8">
                                <h2 class="title title-line title-underline with-link appear-animate"
                                    data-animation-options="{'delay': '.3s'}">
                                    {{ $singleCategory->skip(2)->first()->category_name }}
                                    <a href="#" class="font-weight-semi-bold">View more<i
                                            class="d-icon-arrow-right"></i></a>
                                </h2>
                                <div class="row gutter-xs appear-animate" data-animation-options="{'delay': '.3s'}">
                                    @foreach (catWiseProducts($singleCategory->skip(2)->first()->id)->take(4) as $product)
                                        {{-- @if ($product->category_id) --}}
                                        <div class="col-md-3 col-6 mb-4">
                                            <div class="product text-center">
                                                <figure class="product-media">
                                                    <a href="{{ url('_' . $product->product_slug) }}">
                                                        <img src="{{ asset($product->product_thumbnail) }}" alt="product"
                                                            width="280" height="315" style="background-color: #f5f5f5;" />
                                                    </a>
                                                    <div class="product-label-group">
                                                        <label class="product-label label-new">নতুন</label>
                                                        @if ($product->product_discount > 0)
                                                            <label class="product-label label-sale">
                                                                {{ banglaNumber($product->product_discount) }}% off
                                                            </label>
                                                        @endif

                                                    </div>
                                                    <div class="product-action-vertical">
                                                        <button class="btn-product-icon ViewProduct"
                                                            id="{{ $product->id }}" data-toggle="modal"
                                                            data-target="#addCartModal" title="Add to cart"><i
                                                                class="d-icon-bag"></i></button>
                                                        {{-- <button id="{{ $product->id }}" authId='{{ Auth::id() }}'
                                                            class="btn-product-icon AddToWishList"
                                                            title="Add to wishlist"><i class="d-icon-heart"></i></button> --}}
                                                    </div>
                                                    <div class="product-action">
                                                        <a href="{{ url('_' . $product->product_slug) }}"
                                                            class="btn-product" title="Quick View">দ্রুত
                                                            দেখুন</a>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="product-cat"><a
                                                            href="{{ url('_' . $product->product_slug) }}">{{ $product->category->category_name }}</a>
                                                    </div>
                                                    <h3 class="product-name">
                                                        <a
                                                            href="{{ url('_' . $product->product_slug) }}">{{ $product->product_name }}</a>
                                                    </h3>
                                                    @if ($product->product_discount > 0)
                                                        <div class="product-price">
                                                            <ins class="new-price">৳
                                                                {{ banglaNumber($product->product_price - ($product->product_price * $product->product_discount) / 100) }}/-</ins><del
                                                                class="old-price">৳
                                                                {{ banglaNumber($product->product_price) }}/-</del>
                                                        </div>
                                                    @else
                                                        <div class="product-price">
                                                            <ins class="new-price">৳
                                                                {{ banglaNumber($product->product_price) }}/-
                                                            </ins>
                                                        </div>
                                                    @endif
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width:80%"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- @endif --}}
                                    @endforeach
                                </div>
                            </section>
                            @include('frontend.include.latestProduct')

                            <section class="mb-10 pb-6">
                                <h2 class="title title-line title-underline">বৈশিষ্ট্যযুক্ত ব্র্যান্ড</h2>
                                <div class="container">
                                    <div class="owl-carousel owl-theme row brand-carousel cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2"
                                        data-owl-options="{'nav': false,'dots': false,'autoplay': true, 'margin': 20,'loop': true,'responsive': {'0': {'items': 2 }, '576': {'items': 3 }, '768': { 'items': 4 }, '992': {'items': 5  } }   }">
                                        <figure><img src="{{ asset('public/frontend') }}/images/brands/1.png" alt="brand"
                                                width="180" height="100" />
                                        </figure>
                                        <figure><img src="{{ asset('public/frontend') }}/images/brands/2.png" alt="brand"
                                                width="180" height="100" />
                                        </figure>
                                        <figure><img src="{{ asset('public/frontend') }}/images/brands/3.png" alt="brand"
                                                width="180" height="100" />
                                        </figure>
                                        <figure><img src="{{ asset('public/frontend') }}/images/brands/4.png" alt="brand"
                                                width="180" height="100" />
                                        </figure>
                                        <figure><img src="{{ asset('public/frontend') }}/images/brands/5.png" alt="brand"
                                                width="180" height="100" />
                                        </figure>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- End of Main -->

        @include('frontend.include.footer')

        <!-- End Footer -->
    </div>
    @include('frontend.include.mobile')
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="addCartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productName">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5">
                            <img id="productThumbnail"
                                src="{{ asset('public/frontend/images/loading/dribbble-spinner-800x600.gif') }}">
                        </div>
                        <div class="col-md-7">
                            <ul class="list-group">
                                <input type="hidden" id="id">
                                <li class="list-group-item">স্টকে আছে : <strong id="productStock"></strong>
                                <li class="list-group-item">প্রোডাক্টের কোড : <strong id="productCode"></strong></li>
                                <li class="list-group-item">প্রোডাক্টের সংখ্যা :
                                    <input type="number" id="quantity" value="1" min="1"></strong>
                                </li>
                                {{-- <li class="list-group-item"> প্রোডাক্টের দাম (টাকা) : <strong id="productPrice"></strong>
                                </li> --}}
                                <li class="list-group-item product-price" style="font-size: 13px;">বিক্রয় মুল্য(টাকা) :
                                    <ins class="new-price">৳ <span id="discunt_price"></span>/-</ins><del
                                        class="old-price">৳
                                        <span id="product_price"></span>/-</del>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary addToCart">কার্টে যোগ করুন</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap-input-spinner@3.1.10/src/bootstrap-input-spinner.min.js"></script>
    <script>
        $("input[type='number']").inputSpinner();
    </script>
@endsection
