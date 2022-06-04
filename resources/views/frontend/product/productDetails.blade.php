@extends('frontend.layout.frontendLayout')

@section('title', 'Riode - Ultimate eCommerce Template')
@section('pageClass', 'products')


@section('mainSection')
    <div class="page-wrapper">

        @include('frontend.include.header')
        <!-- End Header -->
        <main class="main mt-6 single-product">
            <div class="page-content mb-10 pb-9">
                <div class="container">
                    <div class="product product-single row mb-8">
                        <div class="col-md-6">
                            <div class="product-gallery">
                                <div class="product-single-carousel owl-carousel owl-theme owl-nav-inner row cols-1">

                                    <figure class="product-image">
                                        <img src="{{ asset($product->product_thumbnail) }}"
                                            data-zoom-image="{{ asset($product->product_thumbnail) }}"
                                            alt="Blue Pinafore Denim Dress" width="800" height="900"
                                            style="background-color: #f5f5f5;" />
                                    </figure>
                                    @foreach ($productMultipleImg as $image)
                                        <figure class="product-image">
                                            <img src="{{ asset($image->multiple_image) }}"
                                                data-zoom-image="{{ asset($image->multiple_image) }}"
                                                alt="Blue Pinafore Denim Dress" width="800" height="900"
                                                style="background-color: #f5f5f5;" />
                                        </figure>
                                    @endforeach
                                </div>
                                <div class="product-thumbs-wrap">
                                    <div class="product-thumbs">
                                        <div class="product-thumb active">
                                            <img src="{{ asset($product->product_thumbnail) }}" alt="product thumbnail"
                                                width="137" height="154" style="background-color: #f5f5f5;" />
                                        </div>
                                        @foreach ($productMultipleImg as $image)
                                            <div class="product-thumb">
                                                <img src="{{ asset($image->multiple_image) }}" alt="product thumbnail"
                                                    width="137" height="154" style="background-color: #f5f5f5;" />
                                            </div>
                                        @endforeach

                                    </div>
                                    <button class="thumb-up disabled"><i class="fas fa-chevron-left"></i></button>
                                    <button class="thumb-down disabled"><i class="fas fa-chevron-right"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product-details  product-gallery-sticky">
                                <div class="product-navigation">
                                    <ul class="breadcrumb breadcrumb-lg">
                                        <li><a href="demo3.html"><i class="d-icon-home"></i></a></li>
                                        <li><a href="#" class="active">পন্য</a></li>
                                        <li>বিস্তারিত</li>
                                    </ul>

                                    {{-- <ul class="product-nav">
                                        <li class="product-nav-prev">
                                            <a href="#">
                                                <i class="d-icon-arrow-left"></i> Prev
                                                <span class="product-nav-popup">
                                                    <img src="{{ asset('public/frontend') }}/images/product/product-thumb-prev.jpg"
                                                        alt="product thumbnail" width="110" height="123">
                                                    <span class="product-name">Sed egtas Dnte Comfort</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="product-nav-next">
                                            <a href="#">
                                                Next <i class="d-icon-arrow-right"></i>
                                                <span class="product-nav-popup">
                                                    <img src="{{ asset('public/frontend') }}/images/product/product-thumb-next.jpg"
                                                        alt="product thumbnail" width="110" height="123">
                                                    <span class="product-name">Sed egtas Dnte Comfort</span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul> --}}
                                </div>

                                <h1 class="product-name">{{ $product->product_name }}</h1>
                                <div class="product-meta">
                                    SKU:<span class="product-sku">123456701</span>
                                    ক্যাটাগরি:<span class="product-brand"> {{ $product->category->category_name }}</span>
                                </div>
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
                                            {{ banglaNumber($product->product_price) }}/-</ins>
                                    </div>
                                @endif
                                <div class="ratings-container">
                                    {{-- <div class="ratings-full">
                                        <span class="ratings" style="width:80%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div> --}}
                                </div>
                                <p class="product-short-desc">{!! $product->short_description !!}</p>



                                <hr class="product-divider">
                                <input type="hidden" id="product_id" value="{{ $product->id }}">
                                <div class="product-form product-qty">
                                    <div class="product-form-group">
                                        <div class="input-group mr-2">
                                            <input type="number" id="quantityProduct" value="1" min="1">
                                        </div>
                                        @if ($product->product_qty > 0)
                                            <button type="button"
                                                class="shoppingCartBtn AddtoCartFromDetailsPage text-normal ls-normal font-weight-semi-bold"><i
                                                    class="d-icon-bag"></i>কার্টে
                                                যোগ
                                                করুন</button>
                                        @else
                                            <button type="button"
                                                class="shoppingCartBtn text-normal ls-normal font-weight-semi-bold"><i
                                                    class="d-icon-bag" disabled></i>স্টকে নেই</button>
                                        @endif
                                    </div>
                                </div>

                                <hr class="product-divider mb-3">

                                <div class="product-footer">
                                    <div class="social-links mr-4">
                                        <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                                        <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                                        <a href="#" class="social-link social-pinterest fab fa-pinterest-p"></a>
                                    </div>
                                    <hr class="divider d-lg-show">
                                    <div class="product-action">
                                        {{-- <button id="{{ $product->id }}" authId='{{ Auth::id() }}'
                                            class="btn-product btn btn-wishlist mr-6 AddToWishList"><i
                                                class="d-icon-heart"></i>Add
                                            to wishlist</button> --}}
                                        {{-- <a href="#" class="btn-product btn-compare"><i class="d-icon-compare"></i>Add
                                            to compare</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if (!empty(productContent($product->id)->long_description))
                        <div class="tab tab-nav-simple product-tabs mb-5">
                            <ul class="nav nav-tabs justify-content-center" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#product-tab-description">বিস্তারিত</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#product-tab-shipping-returns">পণ্য পৌছানো সংক্রান্ত
                                        তথ্য</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active in mb-3" id="product-tab-description">
                                    <div class="row mt-6">
                                        <div class="col-md-6">
                                            <h5 class="description-title mb-4 font-weight-semi-bold ls-m">বৈশিষ্ট্য </h5>
                                            <p class="mb-2">
                                                {!! productContent($product->id)->long_description !!}
                                                {{-- শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়। হাড় ও দাঁত গঠনে: মধুর গুরুত্বপূর্ণ
                                            উপকরণ ক্যালসিয়াম। ক্যালসিয়াম দাঁত, হাড়, চুলের গোড়া শক্ত রাখে, নখের ঔজ্জ্বল্য
                                            বৃদ্ধি করে, ভঙ্গুরতা রোধ করে। --}}
                                            </p>
                                            {{-- <ul class="mb-8">
                                            <li>শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়। </li>
                                            <li>শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়। </li>
                                            <li>শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়। </li>
                                            <li>শরীরের সামগ্রিক শক্তি ও তারুণ্য বাড়ায়। </li>
                                        </ul> --}}
                                            {{-- <h5 class="description-title mb-3 font-weight-semi-bold ls-m">স্পেসিফিকেশন
                                        </h5> --}}
                                            {{-- <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th class="font-weight-semi-bold text-dark pl-0">Material</th>
                                                    <td class="pl-4">Praesent id enim sit amet.Tdio</td>
                                                </tr>
                                                <tr>
                                                    <th class="font-weight-semi-bold text-dark pl-0">Claimed Size</th>
                                                    <td class="pl-4">Praesent id enim sit</td>
                                                </tr>
                                                <tr>
                                                    <th class="font-weight-semi-bold text-dark pl-0">Recommended Use
                                                    </th>
                                                    <td class="pl-4">Praesent id enim sit amet.Tdio vulputate
                                                        eleifend
                                                        in in tortor. ellus massa. siti</td>
                                                </tr>
                                                <tr>
                                                    <th class="font-weight-semi-bold text-dark border-no pl-0">
                                                        Manufacturer</th>
                                                    <td class="border-no pl-4">Praesent id enim</td>
                                                </tr>
                                            </tbody>
                                        </table> --}}
                                        </div>
                                        <div class="col-md-6 pl-md-6 pt-4 pt-md-0">
                                            @if (productContent($product->id)->file_type == 'Image')
                                                <h5 class="description-title font-weight-semi-bold ls-m mb-5">
                                                    ছবিতে বিবরণ
                                                </h5>
                                                <figure class="p-relative d-inline-block mb-2">
                                                    <img src="{{ asset(productContent($product->id)->content_file) }}"
                                                        width="559" height="370" alt="Product" class="w-100"
                                                        style="background-color: #f5f5f5;" />
                                                </figure>
                                            @else
                                                <h5 class="description-title font-weight-semi-bold ls-m mb-5">
                                                    ভিডিও বিবরণ
                                                </h5>
                                                {{-- <figure class="p-relative d-inline-block mb-2"> --}}
                                                {{-- <iframe width="560" height="315"
                                                    src="{{ asset(productContent($product->id)->content_file) }}"
                                                    title="YouTube video player" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen width="559" height="370"></iframe> --}}
                                                <video width="560" height="315" controls>
                                                    <source src="{{ asset(productContent($product->id)->content_file) }}"
                                                        type="video/mp4">
                                                </video>

                                                {{-- </figure> --}}
                                            @endif
                                            <div class="icon-box-wrap d-flex flex-wrap">
                                                <div class="icon-box icon-box-side icon-border pt-2 pb-2 mb-4 mr-10">
                                                    <div class="icon-box-icon">
                                                        <i class="d-icon-lock"></i>
                                                    </div>
                                                    <div class="icon-box-content">
                                                        <h4 class="icon-box-title lh-1 pt-1 ls-s text-normal">
                                                            {{ productContent($product->id)->product_warrenty }}</h4>
                                                        <p>Guarantee with no doubt</p>
                                                    </div>
                                                </div>
                                                <div class="divider d-xl-show mr-10"></div>
                                                <div class="icon-box icon-box-side icon-border pt-2 pb-2 mb-4">
                                                    <div class="icon-box-icon">
                                                        <i class="d-icon-truck"></i>
                                                    </div>
                                                    @if (productContent($product->id)->free_shipping)
                                                        <div class="icon-box-content">
                                                            <h4 class="icon-box-title lh-1 pt-1 ls-s text-normal">Free
                                                                shipping
                                                            </h4>
                                                            <p>{{ productContent($product->id)->free_shipping }}</p>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane " id="product-tab-shipping-returns">
                                    <h6 class="mb-2">Free Shipping</h6>
                                    <p class="mb-0">We deliver to over 100 countries around the world. For full
                                        details of
                                        the delivery options we offer, please view our <a href="#"
                                            class="text-primary">Delivery
                                            information</a> We hope you’ll love every
                                        purchase, but if you ever need to return an item you can do so within a month of
                                        receipt. For full details of how to make a return, please view our <a href="#"
                                            class="text-primary">Returns information</a></p>
                                </div>
                            </div>
                        </div>
                    @endif

                    <section class="related-product mt-10">
                        <h2 class="title title-center mb-1 ls-normal">সংশ্লিষ্ট পণ্য</h2>

                        <div class="owl-carousel owl-theme owl-nav-full row cols-2 cols-md-3 cols-lg-4"
                            data-owl-options="{'items': 5, 'nav': false, 'loop': false, 'dots': true, 'margin': 20, 'responsive': { '0': { 'items': 2  }, '768': { 'items': 3 },  '992': { 'items': 4, 'dots': false, 'nav': true }  }   }">
                            @foreach (catWiseProducts($product->category->id) as $product)
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="{{ url('_' . $product->product_slug) }}">
                                            <img src="{{ asset($product->product_thumbnail) }}" alt="product" width="280"
                                                height="315">
                                        </a>

                                        <div class="product-action-vertical">
                                            <button class="btn-product-icon ViewProduct" id="{{ $product->id }}"
                                                title="Add to cart"><i class="d-icon-bag"></i></button>
                                            {{-- <button id="{{ $product->id }}" authId='{{ Auth::id() }}'
                                                class="btn-product-icon AddToWishList" title="Add to wishlist"><i
                                                    class="d-icon-heart"></i></button> --}}
                                        </div>
                                        <div class="product-action">
                                            <a href="{{ url('_' . $product->product_slug) }}" class="btn-product"
                                                title="Quick View">দ্রুত দেখা</a>
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
                                                    {{ banglaNumber($product->product_price) }}/-</ins>
                                            </div>
                                        @endif
                                        <div class="ratings-container">
                                            {{-- <div class="ratings-full">
                                                <span class="ratings" style="width:20%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </section>
                </div>
            </div>
        </main>

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
                                    src="{{ asset('public/frontend') }}/images/demos/demo3/logo_.png"
                                    alt="product image">
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
        <!-- End of Main -->
        @include('frontend.include.footer')

        <!-- End Footer -->
    </div>
    @include('frontend.include.mobile')
@endsection
