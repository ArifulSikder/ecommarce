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
                        <aside class="col-xl-3 col-lg-4 sidebar sidebar-fixed sticky-sidebar-wrapper home-sidebar">
                            <div class="sidebar-overlay">
                                <a class="sidebar-close" href="#"><i class="d-icon-times"></i></a>
                            </div>
                            <a href="#" class="sidebar-toggle"><i class="fas fa-chevron-right"></i></a>
                            <div class="sidebar-content">

                                <div class="sticky-sidebar">
                                    <ul class="menu vertical-menu category-menu mb-4">

                                        <li><a href="{{ route('shopping') }}" class="menu-title">জনপ্রিয়
                                                ক্যাটাগরি</a>
                                        </li>
                                        @foreach ($categories as $category)
                                            <li>
                                                <a href="{{ route('shopping') }}">{!! $category->category_icon !!}
                                                    {{ $category->category_name }}</a>
                                            </li>
                                        @endforeach
                                        <li><a href="{{ route('shopping') }}" class="menu-title mt-1">আজকের কুপন</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shopping') }}">
                                                <i class="d-icon-card"></i>তেতুল চাটনী &amp; মধু
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('shopping') }}">
                                                <i class="d-icon-card"></i>প্রতিদিনের কুপন
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="banner banner-fixed overlay-zoom overlay-dark">
                                        <figure>
                                            <img src="{{ asset('public/frontend') }}/images/sundorbon/haninut.jpg"
                                                width="280" height="312" alt="banner" style="background-color: #26303c;" />
                                        </figure>
                                        <div class="banner-price-info font-weight-bold text-white text-uppercase">
                                            20-22<sup>th</sup> April</div>
                                        <div class="banner-content text-center w-100">
                                            <h4
                                                class="banner-subtitle d-inline-block bg-primary font-weight-semi-bold text-uppercase">
                                                Ultimate Sale</h4>
                                            <h3 class="banner-title ls-m lh-1 text-uppercase text-white font-weight-bold">
                                                Up
                                                to 70%</h3>
                                            <p class="mb-4 font-primary text-white lh-1">Discount Selected Items</p>
                                        </div>
                                    </div>
                                    <div class="widget widget-products border-no" data-animation-options="{'delay': '.3s'}">
                                        <h4 class="widget-title font-weight-bold">জনপ্রিয় পন্য</h4>
                                        <div class="widget-body">
                                            <div class="owl-carousel owl-nav-top"
                                                data-owl-options="{'items': 1,'loop': false,'nav': true,'dots': false,'margin': 20 }">
                                                <div class="products-col">
                                                    <div class="product product-list-sm">
                                                        <figure class="product-media">
                                                            <a href="{{ route('productDetails') }}">
                                                                <img src="{{ asset('public/frontend') }}/images/sundorbon/lalsandalwood2.jpg"
                                                                    alt="product" width="100" height="100"
                                                                    style="background-color: #f5f5f5;" />
                                                            </a>
                                                        </figure>
                                                        <div class="product-details">
                                                            <h3 class="product-name">
                                                                <a href="{{ route('productDetails') }}">লাল চন্দন</a>
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
                                                                <img src="{{ asset('public/frontend') }}/images/sundorbon/lalsandalwood2.jpg"
                                                                    alt="product" width="100" height="100"
                                                                    style="background-color: #f5f5f5;" />
                                                            </a>
                                                        </figure>
                                                        <div class="product-details">
                                                            <h3 class="product-name">
                                                                <a href="{{ route('productDetails') }}">লাল চন্দন</a>
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
                                                                <img src="{{ asset('public/frontend') }}/images/sundorbon/lalsandalwood.png"
                                                                    alt="product" width="100" height="100"
                                                                    style="background-color: #f5f5f5;" />
                                                            </a>
                                                        </figure>
                                                        <div class="product-details">
                                                            <h3 class="product-name">
                                                                <a href="{{ route('productDetails') }}">লাল চন্দন</a>
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
                                                </div>
                                                <div class="products-col">
                                                    <div class="product product-list-sm">
                                                        <figure class="product-media">
                                                            <a href="{{ route('productDetails') }}">
                                                                <img src="{{ asset('public/frontend') }}/images/sundorbon/lalsandalwood2.jpg"
                                                                    alt="product" width="100" height="100"
                                                                    style="background-color: #f5f5f5;" />
                                                            </a>
                                                        </figure>
                                                        <div class="product-details">
                                                            <h3 class="product-name">
                                                                <a href="{{ route('productDetails') }}">লাল চন্দন</a>
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
                                                                <img src="{{ asset('public/frontend') }}/images/sundorbon/lalsandalwood2.jpg"
                                                                    alt="product" width="100" height="100"
                                                                    style="background-color: #f5f5f5;" />
                                                            </a>
                                                        </figure>
                                                        <div class="product-details">
                                                            <h3 class="product-name">
                                                                <a href="{{ route('productDetails') }}">লাল চন্দন</a>
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
                                                                <img src="{{ asset('public/frontend') }}/images/sundorbon/lalsandalwood2.jpg"
                                                                    alt="product" width="100" height="100"
                                                                    style="background-color: #f5f5f5;" />
                                                            </a>
                                                        </figure>
                                                        <div class="product-details">
                                                            <h3 class="product-name">
                                                                <a href="{{ route('productDetails') }}">লাল চন্দন</a>
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
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget widget-blog border-no" data-animation-options="{'delay': '.3s'}">
                                        <h4 class="widget-title text-capitalize font-weight-bold">সর্বশেষ ব্লোগ</h4>
                                        <div class="widget-body">
                                            <div class="owl-carousel owl-nav-top"
                                                data-owl-options="{'items': 1,'loop': false,'nav': true,'dots': false,'margin': 20 }">
                                                <div class="post overlay-dark overlay-zoom">
                                                    <figure class="post-media">
                                                        <a href="post-single.html">
                                                            <img src="{{ asset('public/frontend') }}/images/sundorbon/sandalwood3.jpg"
                                                                width="280" height="195" alt="post"
                                                                style="background-color: #bcc3ca;" />
                                                        </a>
                                                    </figure>
                                                    <div class="post-details">
                                                        <div class="post-meta">
                                                            লেখক <a href="#" class="post-author"> আরিফ</a>
                                                            on <a href="#" class="post-date">Nov 22, 2018</a>
                                                        </div>
                                                        <h3 class="post-title"><a href="post-single.html">চন্দনের কাঠের
                                                                সাথে এর গুরা</a></h3>
                                                        <a href="post-single.html"
                                                            class="btn btn-primary btn-link btn-underline btn-sm">Read
                                                            More<i class="d-icon-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                                <div class="post overlay-dark overlay-zoom">
                                                    <figure class="post-media">
                                                        <a href="post-single.html">
                                                            <img src="{{ asset('public/frontend') }}/images/demos/demo3/blog/2.jpg"
                                                                width="280" height="195" alt="post"
                                                                style="background-color: #a1a7b6;" />
                                                        </a>
                                                    </figure>
                                                    <div class="post-details">
                                                        <div class="post-meta">
                                                            by <a href="#" class="post-author">John Doe</a>
                                                            on <a href="#" class="post-date">Nov 22, 2018</a>
                                                        </div>
                                                        <h3 class="post-title"><a href="post-single.html">Just a
                                                                cool blog post with Images</a></h3>
                                                        <a href="post-single.html"
                                                            class="btn btn-link btn-underline btn-primary btn-sm">Read
                                                            More<i class="d-icon-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                                <div class="post overlay-dark overlay-zoom">
                                                    <figure class="post-media">
                                                        <a href="post-single.html">
                                                            <img src="{{ asset('public/frontend') }}/images/demos/demo3/blog/3.jpg"
                                                                width="280" height="195" alt="post"
                                                                style="background-color: #acb9bf;" />
                                                        </a>
                                                    </figure>
                                                    <div class="post-details">
                                                        <div class="post-meta">
                                                            by <a href="#" class="post-author">John Doe</a>
                                                            on <a href="#" class="post-date">Nov 22, 2018</a>
                                                        </div>
                                                        <h3 class="post-title"><a href="post-single.html">Just a
                                                                cool blog post with Images</a></h3>
                                                        <a href="post-single.html"
                                                            class="btn btn-link btn-underline btn-primary btn-sm">Read
                                                            More<i class="d-icon-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                                <div class="post overlay-dark overlay-zoom">
                                                    <figure class="post-media">
                                                        <a href="post-single.html">
                                                            <img src="{{ asset('public/frontend') }}/images/demos/demo3/blog/4.jpg"
                                                                width="280" height="195" alt="post"
                                                                style="background-color: #2d3635;" />
                                                        </a>
                                                    </figure>
                                                    <div class="post-details">
                                                        <div class="post-meta">
                                                            by <a href="#" class="post-author">John Doe</a>
                                                            on <a href="#" class="post-date">Nov 22, 2018</a>
                                                        </div>
                                                        <h3 class="post-title"><a href="post-single.html">Just a
                                                                cool blog post with Images</a></h3>
                                                        <a href="post-single.html"
                                                            class="btn btn-link btn-underline btn-primary btn-sm">Read
                                                            More<i class="d-icon-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget widget-testimonial border-no"
                                        data-animation-options="{'delay': '.3s'}">
                                        <h4 class="widget-title text-capitalize font-weight-bold">প্রশংসাপত্র</h4>
                                        <div class="widget-body">
                                            <div class="owl-carousel owl-nav-top"
                                                data-owl-options="{ 'items': 1,'loop': false,'nav': true,'dots': false, 'margin': 20}">
                                                <div class="testimonial">
                                                    <blockquote class="comment">আমি আমার আঙ্গুল রাখছি
                                                        প্রতি বছর আমাদের শপ! এটি আমাকে প্রবণতার ভাল ধারণা দেয়। আমার পরিবার
                                                        এটা পছন্দ করে, খুব.</blockquote>
                                                    <div class="testimonial-info">
                                                        <figure class="testimonial-author-thumbnail">
                                                            <img src="{{ asset('public/frontend') }}/images/demos/demo3/agent.png"
                                                                alt="user" width="40" height="40" />
                                                        </figure>
                                                        <cite class="font-weight-semi-bold text-capitalize">
                                                            মারজুক রাসেল
                                                            <span> বিনিয়োগকারি</span>
                                                        </cite>
                                                    </div>
                                                </div>
                                                <div class="testimonial">
                                                    <blockquote class="comment">আমি আমার আঙ্গুল রাখছি
                                                        প্রতি বছর আমাদের শপ! এটি আমাকে প্রবণতার ভাল ধারণা দেয়। আমার পরিবার
                                                        এটা পছন্দ করে, খুব.</blockquote>
                                                    <div class="testimonial-info">
                                                        <figure class="testimonial-author-thumbnail">
                                                            <img src="{{ asset('public/frontend') }}/images/demos/demo3/agent.png"
                                                                alt="user" width="40" height="40" />
                                                        </figure>
                                                        <cite>
                                                            মারজুক রাসেল
                                                            <span>বিনিয়োগকারি</span>
                                                        </cite>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <div class="col-xl-9 col-lg-8">
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
                                                    <a href="{{ route('productDetails') }}">
                                                        <img src="{{ asset($product->product_thumbnail) }}" alt="product"
                                                            width="280" height="315" style="background-color: #f5f5f5;" />
                                                    </a>
                                                    <div class="product-label-group">
                                                        <label class="product-label label-new">নতুন</label>
                                                        <label class="product-label label-sale">35% off</label>
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

                            <section class="banner banner-cta mb-7 text-center"
                                style="background-image: url({{ asset('public/frontend') }}/images/demos/demo3/banner.jpg);  background-color: #c5d1d2;">
                                <div class="banner-content w-100 appear-animate"
                                    data-animation-options="{
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            'delay': '.2s',
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            'name': 'blurIn'
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        }">
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
