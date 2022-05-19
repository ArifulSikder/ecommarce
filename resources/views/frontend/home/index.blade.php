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
                            <section class="product-wrapper mb-8">
                                <h2 class="title title-line title-underline with-link appear-animate"
                                    data-animation-options="{'delay': '.3s'}">
                                    বৈশিষ্ট্যযুক্ত পণ্য
                                    <a href="#" class="font-weight-semi-bold">View more<i
                                            class="d-icon-arrow-right"></i></a>
                                </h2>
                                <div class="row gutter-xs appear-animate" data-animation-options="{'delay': '.3s'}">

                                    @foreach ($products as $product)
                                        <div class="col-md-3 col-6 mb-4">
                                            <div class="product text-center">
                                                <figure class="product-media">
                                                    <a href="{{ url('_' . $product->product_slug) }}">
                                                        <img src="{{ asset($product->product_thumbnail) }}" alt="product"
                                                            width="280" height="315" style="background-color: #f5f5f5;" />
                                                    </a>
                                                    <div class="product-label-group">
                                                        <label class="product-label label-new">নতুন</label>
                                                        <label
                                                            class="product-label label-sale">{{ $product->product_discount }}%
                                                            off</label>
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
                                                    <div class="product-cat"><a
                                                            href="{{ route('productDetails') }}">{{ $product->category->category_name }}</a>
                                                    </div>
                                                    <h3 class="product-name">
                                                        <a
                                                            href="{{ route('productDetails') }}">{{ $product->product_name }}</a>
                                                    </h3>
                                                    <div class="product-price">
                                                        <ins class="new-price">৳
                                                            {{ $product->product_price - ($product->product_price * $product->product_discount) / 100 }}/-</ins><del
                                                            class="old-price">৳
                                                            {{ $product->product_price }}/-</del>
                                                    </div>
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

                            <section class="banner banner-cta mb-7 text-center"
                                style="background-image: url({{ asset('public/frontend') }}/images/demos/demo3/banner.jpg);  background-color: #c5d1d2;">
                                <div class="banner-content w-100 appear-animate"
                                    data-animation-options="{'delay': '.2s','name': 'blurIn'}">
                                    <h4 class="banner-subtitle font-weight-bold ls-s text-white text-uppercase">শিঘ্রই আসছে
                                    </h4>
                                    <h2 class="banner-title font-weight-normal ls-m"><strong>শুক্রবারে</strong>
                                        বিক্রিতে</h2>
                                    <p class="font-primary text-dark ls-normal text-capitalize lh-1">১০% বোনাস জিতুন প্রথম
                                        অর্ডারে</p>
                                    <form action="#" method="get" class="input-wrapper input-wrapper-inline">
                                        <input type="email" class="form-control mb-4" name="email" id="email"
                                            placeholder="Email address here..." required />
                                        <button class="btn btn-secondary btn-sm" type="submit">Subscribe<i
                                                class="d-icon-arrow-right"></i></button>
                                    </form>
                                </div>
                            </section>

                            <section class="mb-3">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 mb-4">
                                        <div class="widget widget-products appear-animate"
                                            data-animation-options="{'name': 'fadeInLeftShorter', 'delay': '.5s'}">
                                            <h4 class="widget-title font-weight-bold">বিক্রয় পন্য</h4>
                                            <div class="products-col">
                                                <div class="product product-list-sm">
                                                    <figure class="product-media">
                                                        <a href="{{ route('productDetails') }}">
                                                            <img src="{{ asset('public/frontend') }}/images/sundorbon/sandalwood3.jpg"
                                                                alt="product" width="100" height="100"
                                                                style="background-color: #f5f5f5;" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h3 class="product-name">
                                                            <a href="{{ route('productDetails') }}">চন্দনের কাঠের
                                                                সাথে এর গুরা</a>
                                                        </h3>
                                                        <div class="product-price">
                                                            <span class="price">৳ ৫০০/-</span>
                                                        </div>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width:40%"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product product-list-sm">
                                                    <figure class="product-media">
                                                        <a href="{{ route('productDetails') }}">
                                                            <img src="{{ asset('public/frontend') }}/images/sundorbon/haninut.jpg"
                                                                alt="product" width="100" height="100"
                                                                style="background-color: #f5f5f5;" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h3 class="product-name">
                                                            <a href="{{ route('productDetails') }}">মধুর সাথে বাদাম</a>
                                                        </h3>
                                                        <div class="product-price">
                                                            <span class="price">৳ ৫০০/-</span>
                                                        </div>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width:100%"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product product-list-sm">
                                                    <figure class="product-media">
                                                        <a href="{{ route('productDetails') }}">
                                                            <img src="{{ asset('public/frontend') }}/images/sundorbon/modhu.jpg"
                                                                alt="product" width="100" height="100"
                                                                style="background-color: #f5f5f5;" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h3 class="product-name">
                                                            <a href="{{ route('productDetails') }}">মধু</a>
                                                        </h3>
                                                        <div class="product-price">
                                                            <span class="price">৳ ৫০০/-</span>
                                                        </div>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width:20%"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-4 ">
                                        <div class="widget widget-products appear-animate"
                                            data-animation-options="{'name': 'fadeIn','delay': '.3s'}">
                                            <h4 class="widget-title font-weight-bold">সর্বশেষ পন্য</h4>
                                            <div class="products-col">
                                                <div class="product product-list-sm">
                                                    <figure class="product-media">
                                                        <a href="{{ route('productDetails') }}">
                                                            <img src="{{ asset('public/frontend') }}/images/sundorbon/modhu.jpg"
                                                                alt="product" width="100" height="100"
                                                                style="background-color: #f5f5f5;" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h3 class="product-name">
                                                            <a href="{{ route('productDetails') }}">মধু</a>
                                                        </h3>
                                                        <div class="product-price">
                                                            <span class="price">৳ ৫০০/-</span>
                                                        </div>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width:40%"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product product-list-sm">
                                                    <figure class="product-media">
                                                        <a href="{{ route('productDetails') }}">
                                                            <img src="{{ asset('public/frontend') }}/images/sundorbon/horiner%20chamra.jpg"
                                                                alt="product" width="100" height="100"
                                                                style="background-color: #f5f5f5;" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h3 class="product-name">
                                                            <a href="{{ route('productDetails') }}">হরিনের চামরা</a>
                                                        </h3>
                                                        <div class="product-price">
                                                            <span class="price">৳ ৫০০/-</span>
                                                        </div>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width:60%"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product product-list-sm">
                                                    <figure class="product-media">
                                                        <a href="{{ route('productDetails') }}">
                                                            <img src="{{ asset('public/frontend') }}/images/sundorbon/horiner%20chamra.jpg"
                                                                alt="product" width="100" height="100"
                                                                style="background-color: #f5f5f5;" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h3 class="product-name">
                                                            <a href="{{ route('productDetails') }}">হরিনের চামরা</a>
                                                        </h3>
                                                        <div class="product-price">
                                                            <span class="price">৳ ৫০০/-</span>
                                                        </div>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width:20%"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 mb-4">
                                        <div class="widget widget-products appear-animate"
                                            data-animation-options="{'name': 'fadeInRightShorter','delay': '.5s'}">
                                            <h4 class="widget-title font-weight-bold">এই সাপ্তাহে সর্বচ্চ</h4>
                                            <div class="products-col">
                                                <div class="product product-list-sm">
                                                    <figure class="product-media">
                                                        <a href="{{ route('productDetails') }}">
                                                            <img src="{{ asset('public/frontend') }}/images/sundorbon/sandalwood3.jpg"
                                                                alt="product" width="100" height="100"
                                                                style="background-color: #f5f5f5;" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h3 class="product-name">
                                                            <a href="{{ route('productDetails') }}">চন্দন কাঠ</a>
                                                        </h3>
                                                        <div class="product-price">
                                                            <span class="price">৳ ৫০০/-</span>
                                                        </div>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width:20%"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product product-list-sm">
                                                    <figure class="product-media">
                                                        <a href="{{ route('productDetails') }}">
                                                            <img src="{{ asset('public/frontend') }}/images/sundorbon/horiner%20chamra.jpg"
                                                                alt="product" width="100" height="100"
                                                                style="background-color: #f5f5f5;" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h3 class="product-name">
                                                            <a href="{{ route('productDetails') }}">হরিনের চামরা</a>
                                                        </h3>
                                                        <div class="product-price">
                                                            <ins class="new-price">৳ ৫০০/-</ins><del
                                                                class="old-price">৳ ৫১০/-</del>
                                                        </div>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width:100%"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product product-list-sm">
                                                    <figure class="product-media">
                                                        <a href="{{ route('productDetails') }}">
                                                            <img src="{{ asset('public/frontend') }}/images/sundorbon/tetul%20chatni.jpg"
                                                                alt="product" width="100" height="100"
                                                                style="background-color: #f5f5f5;" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h3 class="product-name">
                                                            <a href="{{ route('productDetails') }}">তেতুন চাটনি</a>
                                                        </h3>
                                                        <div class="product-price">
                                                            <span class="price">৫০০/-</span>
                                                        </div>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width:60%"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

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
@endsection
