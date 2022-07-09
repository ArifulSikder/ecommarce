@extends('frontend.layout.frontendLayout')

@section('title', 'প্রডাক্ট কিনুন')
@section('pageClass', 'shop')


@section('mainSection')
    <div class="page-wrapper">
        @include('frontend.include.header')
        <!-- End Header -->
        <main class="main mt-lg-4">
            <div class="page-content mb-10 pb-2">
                <div class="container">
                    <!-- End Breadcrumb -->
                    <div class="row main-content-wrap gutter-lg">
                        @include('frontend.include.sidebar')
                        <div class="col-lg-9 main-content">

                            <section class="intro-section mb-6">
                                <div class="owl-carousel owl-theme row owl-dot-inner owl-dot-white intro-slider animation-slider cols-1 mb-4"
                                    data-owl-options="{'items': 1, 'dots': true, 'nav': false, 'loop': true,'autoplay': false}">
                                    {{-- <div class="banner banner-fixed intro-slide1">
                                        <figure>
                                            <img src="{{ asset('public/frontend') }}/images/sundorbon/lalsandalwood.png"
                                                alt="intro-banner" width="880" height="474"
                                                style="background-color: #ffc74e;" />
                                        </figure>
                                        <div class="banner-content">
                                            <h4 class="banner-subtitle text-white font-weight-semi-bold lh-1 ls-normal slide-animate"
                                                data-animation-options="{'name': 'fadeInDownShorter', 'duration': '1s', 'delay': '.8s'}">
                                                <nav>নতুন এসেছে</nav>!
                                            </h4>
                                            <h2 class="banner-title mb-7 text-uppercase ls-l lh-1 slide-animate"
                                                data-animation-options="{'name': 'fadeInDownShorter', 'duration': '1s', 'delay': '.8s'}">
                                                লাল চন্দন কাঠ <span class="text-white">৳ ১০০/-</span></h2>
                                            <a href="{{ route('productDetails') }}"
                                                class="btn btn-white btn-rounded slide-animate"
                                                data-animation-options="{'name': 'fadeInDownShorter', 'duration': '1s', 'delay': '.8s'}">
                                                এখুনি কিনুন</a>
                                            <div class="slide-animate"
                                                data-animation-options="{'name': 'fadeInRightShorter', 'duration': '.8s'}">
                                                <h6 class="text-white text-uppercase">লাল চন্দন কাঠ</h6>
                                            </div>
                                            <figure class="intro1-image slide-animate"
                                                data-animation-options="{'name': 'fadeInLeftShorter', 'duration': '.8s'}"> --}}
                                    {{-- <img src="{{ asset('public/frontend') }}/images/demos/demo3/slides/single.png"
                                                    alt="Men" width="511" height="478"> --}}
                                    {{-- </figure>
                                        </div>

                                    </div> --}}
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
                                                        মূল্য ৳ {{ $banner->product_price }}/-
                                                    </p>
                                                    <a href="{{ route('productDetails') }}"
                                                        class="btn btn-dark btn-rounded slide-animate"
                                                        data-animation-options="{'name': 'fadeInDownShorter','delay': '.5s','duration': '1s'}">
                                                        এখুনি কিনুন</a>
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
                                                                {{ $banner->product_price }}/-</strong>
                                                        </h4>
                                                        {{-- <p class="text-dark lh-1 ls-m mb-4">প্যকেজ কিনে বাড়তি সুবিধা পান !
                                                        </p> --}}
                                                        <a href="{{ route('productDetails') }}"
                                                            class="btn btn-white btn-rounded">এখুনি কিনুন</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </section>
                            <nav class="toolbox sticky-content sticky-toolbox fix-top">
                                <div class="toolbox-left">
                                    <a href="#"
                                        class="toolbox-item left-sidebar-toggle btn btn-sm btn-outline btn-primary btn-rounded d-lg-none">Filters<i
                                            class="d-icon-arrow-right"></i></a>
                                    <div class="toolbox-item toolbox-sort select-box">
                                        <label>ক্রমানুসার :</label>
                                        <select name="orderby" class="form-control">
                                            <option value="default">ডিফল্ড</option>
                                            <option value="popularity" selected="selected">
                                                সবচেয়ে জনপ্রিয়</option>
                                            <option value="rating">Average rating</option>
                                            <option value="date">Latest</option>
                                            <option value="price-low">Sort forward price low</option>
                                            <option value="price-high">Sort forward price high</option>
                                            <option value="">Clear custom sort</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="toolbox-right">
                                    <div class="toolbox-item toolbox-show select-box">
                                        <label>দেখান :</label>
                                        <select name="count" class="form-control">
                                            <option value="12">12</option>
                                            <option value="24">24</option>
                                            <option value="36">36</option>
                                        </select>
                                    </div>
                                    <div class="toolbox-item toolbox-layout">
                                        <a href="shop-list.html" class="d-icon-mode-list btn-layout"></a>
                                        <a href="shop.html" class="d-icon-mode-grid btn-layout active"></a>
                                    </div>
                                </div>
                            </nav>
                            <div class="row cols-2 cols-sm-3 product-wrapper">
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="demo3-product.html">
                                                <img src="{{ asset('public/frontend') }}/images/sundorbon/tetul chatni.jpg"
                                                    alt="product" width="280" height="315">
                                            </a>
                                            <div class="product-label-group">
                                                <label class="product-label label-new">নতুন</label>
                                                <label class="product-label label-sale">১৩% ছাড়</label>
                                            </div>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to cart"><i
                                                        class="d-icon-bag"></i></a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">দ্রুত
                                                    দেখুন</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="product-cat">
                                                <a href="demo3-shop.html">মধু</a>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="demo3-product.html">খাটি মধু</a>
                                            </h3>
                                            <div class="product-price">
                                                <ins class="new-price">৳ ৫০০/-</ins><del class="old-price">৳
                                                    ৫১০/-</del>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:60%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="demo3-product.html" class="rating-reviews">( ১৬ রিয়ার্ড )</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="demo3-product.html">
                                                <img src="{{ asset('public/frontend') }}/images/sundorbon/misro.png"
                                                    alt="product" width="280" height="315"
                                                    style="background-color: #f5f5f5;" />
                                            </a>
                                            <div class="product-label-group">
                                                <label class="product-label label-sale">১৫% ছাড়</label>
                                            </div>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to cart"><i
                                                        class="d-icon-bag"></i></a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview"
                                                    title="Quick View">দ্রুত
                                                    দেখুন</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="product-cat">
                                                <a href="demo3-shop.html">মধু</a>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="demo3-product.html">
                                                    খাটি মধু</a>
                                            </h3>
                                            <div class="product-price">
                                                <ins class="new-price">
                                                    ৳ ৫০০/-</ins><del class="old-price">
                                                    ৳ ৫১০/-</del>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:60%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="demo3-product.html" class="rating-reviews">( ১৬ রিয়ার্ড )</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="demo3-product.html">
                                                <img src="{{ asset('public/frontend') }}/images/sundorbon/bacher chamra.jpg"
                                                    alt="product" width="280" height="315"
                                                    style="background-color: #f5f5f5;" />
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to cart"><i
                                                        class="d-icon-bag"></i></a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview"
                                                    title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="product-cat">
                                                <a href="demo3-shop.html">চামড়া</a>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="demo3-product.html">বাঘের ছামড়া</a>
                                            </h3>
                                            <div class="product-price">
                                                <span class="price">৳১০০/-</span>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:40%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="demo3-product.html" class="rating-reviews">( ১৬ রিয়ার্ড )</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="demo3-product.html">
                                                <img src="{{ asset('public/frontend') }}/images/sundorbon/tetul chatni.jpg"
                                                    alt="product" width="280" height="315">
                                            </a>
                                            <div class="product-label-group">
                                                <label class="product-label label-new">নতুন</label>
                                                <label class="product-label label-sale">১৩% ছাড়</label>
                                            </div>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to cart"><i
                                                        class="d-icon-bag"></i></a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview"
                                                    title="Quick View">দ্রুত
                                                    দেখুন</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="product-cat">
                                                <a href="demo3-shop.html">মধু</a>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="demo3-product.html">খাটি মধু</a>
                                            </h3>
                                            <div class="product-price">
                                                <ins class="new-price">৳ ৫০০/-</ins><del class="old-price">৳
                                                    ৫১০/-</del>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:60%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="demo3-product.html" class="rating-reviews">( ১৬ রিয়ার্ড )</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="demo3-product.html">
                                                <img src="{{ asset('public/frontend') }}/images/sundorbon/misro.png"
                                                    alt="product" width="280" height="315"
                                                    style="background-color: #f5f5f5;" />
                                            </a>
                                            <div class="product-label-group">
                                                <label class="product-label label-sale">১৫% ছাড়</label>
                                            </div>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to cart"><i
                                                        class="d-icon-bag"></i></a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview"
                                                    title="Quick View">দ্রুত
                                                    দেখুন</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="product-cat">
                                                <a href="demo3-shop.html">মধু</a>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="demo3-product.html">
                                                    খাটি মধু</a>
                                            </h3>
                                            <div class="product-price">
                                                <ins class="new-price">
                                                    ৳ ৫০০/-</ins><del class="old-price">
                                                    ৳ ৫১০/-</del>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:60%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="demo3-product.html" class="rating-reviews">( ১৬ রিয়ার্ড )</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="demo3-product.html">
                                                <img src="{{ asset('public/frontend') }}/images/sundorbon/bacher chamra.jpg"
                                                    alt="product" width="280" height="315"
                                                    style="background-color: #f5f5f5;" />
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to cart"><i
                                                        class="d-icon-bag"></i></a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview"
                                                    title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="product-cat">
                                                <a href="demo3-shop.html">চামড়া</a>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="demo3-product.html">বাঘের ছামড়া</a>
                                            </h3>
                                            <div class="product-price">
                                                <span class="price">৳১০০/-</span>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:40%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="demo3-product.html" class="rating-reviews">( ১৬ রিয়ার্ড )</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="demo3-product.html">
                                                <img src="{{ asset('public/frontend') }}/images/sundorbon/tetul chatni.jpg"
                                                    alt="product" width="280" height="315">
                                            </a>
                                            <div class="product-label-group">
                                                <label class="product-label label-new">নতুন</label>
                                                <label class="product-label label-sale">১৩% ছাড়</label>
                                            </div>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to cart"><i
                                                        class="d-icon-bag"></i></a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview"
                                                    title="Quick View">দ্রুত
                                                    দেখুন</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="product-cat">
                                                <a href="demo3-shop.html">মধু</a>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="demo3-product.html">খাটি মধু</a>
                                            </h3>
                                            <div class="product-price">
                                                <ins class="new-price">৳ ৫০০/-</ins><del class="old-price">৳
                                                    ৫১০/-</del>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:60%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="demo3-product.html" class="rating-reviews">( ১৬ রিয়ার্ড )</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="demo3-product.html">
                                                <img src="{{ asset('public/frontend') }}/images/sundorbon/misro.png"
                                                    alt="product" width="280" height="315"
                                                    style="background-color: #f5f5f5;" />
                                            </a>
                                            <div class="product-label-group">
                                                <label class="product-label label-sale">১৫% ছাড়</label>
                                            </div>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to cart"><i
                                                        class="d-icon-bag"></i></a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview"
                                                    title="Quick View">দ্রুত
                                                    দেখুন</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="product-cat">
                                                <a href="demo3-shop.html">মধু</a>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="demo3-product.html">
                                                    খাটি মধু</a>
                                            </h3>
                                            <div class="product-price">
                                                <ins class="new-price">
                                                    ৳ ৫০০/-</ins><del class="old-price">
                                                    ৳ ৫১০/-</del>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:60%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="demo3-product.html" class="rating-reviews">( ১৬ রিয়ার্ড )</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="demo3-product.html">
                                                <img src="{{ asset('public/frontend') }}/images/sundorbon/bacher chamra.jpg"
                                                    alt="product" width="280" height="315"
                                                    style="background-color: #f5f5f5;" />
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                                    data-target="#addCartModal" title="Add to cart"><i
                                                        class="d-icon-bag"></i></a>
                                                <a href="#" class="btn-product-icon btn-wishlist"
                                                    title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview"
                                                    title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="product-cat">
                                                <a href="demo3-shop.html">চামড়া</a>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="demo3-product.html">বাঘের ছামড়া</a>
                                            </h3>
                                            <div class="product-price">
                                                <span class="price">৳১০০/-</span>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:40%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="demo3-product.html" class="rating-reviews">( ১৬ রিয়ার্ড )</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <nav class="toolbox toolbox-pagination">
                                <p class="show-info">Showing <span>12 of 56</span> Products</p>
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link page-link-prev" href="#" aria-label="Previous"
                                            tabindex="-1" aria-disabled="true">
                                            <i class="d-icon-arrow-left"></i>Prev
                                        </a>
                                    </li>
                                    <li class="page-item active" aria-current="page"><a class="page-link"
                                            href="#">1</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item page-item-dots"><a class="page-link" href="#">6</a></li>
                                    <li class="page-item">
                                        <a class="page-link page-link-next" href="#" aria-label="Next">
                                            Next<i class="d-icon-arrow-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
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
@endsection
