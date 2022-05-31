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

                                    @foreach ($products->take(10) as $product_banner)
                                        <div class="banner banner-fixed intro-slide2">
                                            <figure>
                                                <img src="{{ asset($product_banner->product_slider_img) }}"
                                                    alt="intro-banner" width="880" height="474"
                                                    style="background-color: #fbfcfc;" />
                                            </figure>
                                            <div class="banner-content y-50 text-right">
                                                <h4 class="banner-subtitle text-body font-weight-semi-bold mb-3 slide-animate"
                                                    data-animation-options="{'name': 'fadeInDownShorter','duration': '1s'}">
                                                    {{ $product_banner->product_discount }}% ছাড়ে পাচ্ছেন
                                                </h4>
                                                <h2 class="product_banner-title text-uppercase ls-l slide-animate text-white"
                                                    data-animation-options="{'name': 'fadeInDownShorter','delay': '.3s','duration': '1s' }">
                                                    {{ $product_banner->product_name }}
                                                </h2>
                                                <p class="font-weight-semi-bold ls-m text-body mb-6 slide-animate"
                                                    data-animation-options="{'name': 'fadeInDownShorter','delay': '.4s','duration': '1s'}">
                                                    মূল্য ৳ {{ $product_banner->product_price }}/-
                                                </p>
                                                {{-- <a href="{{ route('productDetails') }}"
                                                    class="btn btn-dark btn-rounded slide-animate"
                                                    data-animation-options="{'name': 'fadeInDownShorter','delay': '.5s','duration': '1s'}">
                                                    এখুনি কিনুন</a> --}}
                                            </div>
                                        </div>
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
                                                        <label class="product-label label-sale">35% off</label>
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
                                                            href="{{ route('productDetails') }}">মধু</a></div>
                                                    <h3 class="product-name">
                                                        <a href="{{ route('productDetails') }}">মিশ্র ফুলের মধু</a>
                                                    </h3>
                                                    <div class="product-price">
                                                        <ins class="new-price">৳ ১০০/-</ins><del
                                                            class="old-price">৳
                                                            ১১০/-</del>
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
@endsection
