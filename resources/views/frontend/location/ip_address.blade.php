@extends('frontend.layout.frontendLayout')

@section('title', 'Riode - Ultimate eCommerce Template')
@section('pageClass', 'shop')


@section('mainSection')
    <div class="page-wrapper">
        <header class="header">
            <!-- End HeaderTop -->
            <div class="header-middle sticky-header fix-top sticky-content">
                <div class="container">
                    <div class="header-left">
                        <a href="#" class="mobile-menu-toggle">
                            <i class="d-icon-bars2"></i>
                        </a>
                        <a href="demo3.html" class="logo">
                            <img src="{{ asset('public/frontend') }}/images/demos/demo3/logo_.png" alt="logo" width="153"
                                height="44" />
                        </a>
                        <!-- End Logo -->

                        <div class="header-search hs-simple">
                            <form action="#" class="input-wrapper">
                                <input type="text" class="form-control" name="search" autocomplete="off"
                                    placeholder="Search..." required />
                                <button class="btn btn-search" type="submit">
                                    <i class="d-icon-search"></i>
                                </button>
                            </form>
                        </div>
                        <!-- End Header Search -->
                    </div>
                    <div class="header-right">
                        <a href="tel:#" class="icon-box icon-box-side">
                            <div class="icon-box-icon mr-0 mr-lg-2">
                                <i class="d-icon-phone"></i>
                            </div>
                            <div class="icon-box-content d-lg-show">
                                <h4 class="icon-box-title">কল করুন:</h4>
                                <p>0(800) 123-456</p>
                            </div>
                        </a>
                        <span class="divider"></span>
                        <a href="wishlist.html" class="wishlist">
                            <i class="d-icon-heart"></i>
                        </a>
                        <span class="divider"></span>
                        <div class="dropdown cart-dropdown type2 cart-offcanvas mr-0 mr-lg-2">
                            <a href="#" class="cart-toggle label-block link">
                                <div class="cart-label d-lg-show">
                                    <span class="cart-name">Shopping Cart:</span>
                                    <span class="cart-price">$0.00</span>
                                </div>
                                <i class="d-icon-bag"><span class="cart-count">2</span></i>
                            </a>
                            <div class="cart-overlay"></div>
                            <!-- End Cart Toggle -->
                            <div class="dropdown-box">
                                <div class="cart-header">
                                    <h4 class="cart-title">Shopping Cart</h4>
                                    <a href="#" class="btn btn-dark btn-link btn-icon-right btn-close">close<i
                                            class="d-icon-arrow-right"></i></a>
                                </div>
                                <div class="products scrollable">
                                    <div class="product product-cart">
                                        <figure class="product-media">
                                            <a href="demo3-product.html">
                                                <img src="{{ asset('public/frontend') }}/images/cart/product-1.jpg"
                                                    alt="product" width="80" height="88" />
                                            </a>
                                            <button class="btn btn-link btn-close">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </figure>
                                        <div class="product-detail">
                                            <a href="demo3-product.html" class="product-name">Riode White Trends</a>
                                            <div class="price-box">
                                                <span class="product-quantity">1</span>
                                                <span class="product-price">$21.00</span>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- End of Cart Product -->
                                    <div class="product product-cart">
                                        <figure class="product-media">
                                            <a href="demo3-product.html]">
                                                <img src="{{ asset('public/frontend') }}/images/cart/product-2.jpg"
                                                    alt="product" width="80" height="88" />
                                            </a>
                                            <button class="btn btn-link btn-close">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </figure>
                                        <div class="product-detail">
                                            <a href="demo3-product.html" class="product-name">Dark Blue Women’s
                                                Leomora Hat</a>
                                            <div class="price-box">
                                                <span class="product-quantity">1</span>
                                                <span class="product-price">$118.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Cart Product -->
                                </div>
                                <!-- End of Products  -->
                                <div class="cart-total">
                                    <label>Subtotal:</label>
                                    <span class="price">$139.00</span>
                                </div>
                                <!-- End of Cart Total -->
                                <div class="cart-action">
                                    <a href="cart.html" class="btn btn-dark btn-link">View Cart</a>
                                    <a href="checkout.html" class="btn btn-dark"><span>Go To Checkout</span></a>
                                </div>
                                <!-- End of Cart Action -->
                            </div>
                            <!-- End Dropdown Box -->
                        </div>
                        <div class="header-search hs-toggle mobile-search">
                            <a href="#" class="search-toggle">
                                <i class="d-icon-search"></i>
                            </a>
                            <form action="#" class="input-wrapper">
                                <input type="text" class="form-control" name="search" autocomplete="off"
                                    placeholder="Search your keyword..." required />
                                <button class="btn btn-search" type="submit">
                                    <i class="d-icon-search"></i>
                                </button>
                            </form>
                        </div>
                        <!-- End of Header Search -->
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="header-bottom d-lg-show w-100">
                    <div class="header-left">
                        <nav class="main-nav">
                            <ul class="menu">
                                <li>
                                    <a href="demo3.html">হোম</a>
                                </li>
                                <li class="active">
                                    <a href="demo3-shop.html">ক্যাটাগরি</a>
                                    <div class="megamenu">
                                        <div class="row">
                                            <div class="col-6 col-sm-4 col-md-3 col-lg-4">
                                                <h4 class="menu-title">Variations 1</h4>
                                                <ul>
                                                    <li><a href="shop-banner-sidebar.html">Banner With Sidebar</a></li>
                                                    <li><a href="shop-boxed-banner.html">Boxed Banner</a></li>
                                                    <li><a href="shop-infinite-scroll.html">Infinite Ajaxscroll</a></li>
                                                    <li><a href="shop-horizontal-filter.html">Horizontal Filter</a>
                                                    </li>
                                                    <li><a href="shop-navigation-filter.html">Navigation Filter<span
                                                                class="tip tip-hot">Hot</span></a></li>

                                                    <li><a href="shop-off-canvas.html">Off-Canvas Filter</a></li>
                                                    <li><a href="shop-right-sidebar.html">Right Toggle Sidebar</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-3 col-lg-4">
                                                <h4 class="menu-title">Variations 2</h4>
                                                <ul>

                                                    <li><a href="shop-grid-3cols.html">3 Columns Mode<span
                                                                class="tip tip-new">New</span></a></li>
                                                    <li><a href="shop-grid-4cols.html">4 Columns Mode</a></li>
                                                    <li><a href="shop-grid-5cols.html">5 Columns Mode</a></li>
                                                    <li><a href="shop-grid-6cols.html">6 Columns Mode</a></li>
                                                    <li><a href="shop-grid-7cols.html">7 Columns Mode</a></li>
                                                    <li><a href="shop-grid-8cols.html">8 Columns Mode</a></li>
                                                    <li><a href="shop-list.html">List Mode</a></li>
                                                </ul>
                                            </div>
                                            <div
                                                class="col-6 col-sm-4 col-md-3 col-lg-4 menu-banner menu-banner1 banner banner-fixed">
                                                <figure>
                                                    <img src="{{ asset('public/frontend') }}/images/menu/banner-1.jpg"
                                                        alt="Menu banner" width="221" height="330" />
                                                </figure>
                                                <div class="banner-content y-50">
                                                    <h4 class="banner-subtitle font-weight-bold text-primary ls-m">
                                                        Sale.
                                                    </h4>
                                                    <h3 class="banner-title font-weight-bold"><span
                                                            class="text-uppercase">Up to</span>70% Off</h3>
                                                    <a href="#" class="btn btn-link btn-underline">shop now<i
                                                            class="d-icon-arrow-right"></i></a>
                                                </div>
                                            </div>
                                            <!-- End Megamenu -->
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="demo3-product.html">পন্য</a>
                                    <div class="megamenu">
                                        <div class="row">
                                            <div class="col-6 col-sm-4 col-md-3 col-lg-4">
                                                <h4 class="menu-title">Product Pages</h4>
                                                <ul>
                                                    <li><a href="product-simple.html">Simple Product</a></li>
                                                    <li><a href="product.html">Variable Product</a></li>
                                                    <li><a href="product-sale.html">Sale Product</a></li>
                                                    <li><a href="product-featured.html">Featured &amp; On Sale</a></li>

                                                    <li><a href="product-left-sidebar.html">With Left Sidebar</a></li>
                                                    <li><a href="product-right-sidebar.html">With Right Sidebar</a></li>
                                                    <li><a href="product-sticky-cart.html">Add Cart Sticky<span
                                                                class="tip tip-hot">Hot</span></a></li>
                                                    <li><a href="product-tabinside.html">Tab Inside</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-3 col-lg-4">
                                                <h4 class="menu-title">Product Layouts</h4>
                                                <ul>
                                                    <li><a href="product-grid.html">Grid Images<span
                                                                class="tip tip-new">New</span></a></li>
                                                    <li><a href="product-masonry.html">Masonry</a></li>
                                                    <li><a href="product-gallery.html">Gallery Type</a></li>
                                                    <li><a href="product-full.html">Full Width Layout</a></li>
                                                    <li><a href="product-sticky.html">Sticky Info</a></li>
                                                    <li><a href="product-sticky-both.html">Left &amp; Right Sticky</a>
                                                    </li>
                                                    <li><a href="product-horizontal.html">Horizontal Thumb</a></li>

                                                    <li><a href="#">Build Your Own</a></li>
                                                </ul>
                                            </div>
                                            <div
                                                class="col-6 col-sm-4 col-md-3 col-lg-4 menu-banner menu-banner2 banner banner-fixed">
                                                <figure>
                                                    <img src="{{ asset('public/>frontend') }}/images/menu/banner-2.jpg"
                                                        alt="Menu banner" width="221" height="330" />
                                                </figure>
                                                <div class="banner-content x-50 text-center">
                                                    <h3 class="banner-title text-white text-uppercase">Sunglasses</h3>
                                                    <h4 class="banner-subtitle font-weight-bold text-white mb-0">$23.00
                                                        -
                                                        $120.00</h4>
                                                </div>
                                            </div>
                                            <!-- End MegaMenu -->
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">পৃষ্ঠা</a>
                                    <ul>
                                        <li><a href="about-us.html">About</a></li>
                                        <li><a href="contact-us.html">Contact Us</a></li>
                                        <li><a href="account.html">Login</a></li>
                                        <li><a href="faq.html">FAQs</a></li>
                                        <li><a href="error-404.html">Error 404</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                    </ul>
                                </li>
                                <li class="d-xl-show">
                                    <a href="#">উপাদান</a>
                                    <ul>
                                        <li><a href="element-products.html">Products</a></li>
                                        <li><a href="element-typography.html">Typography</a></li>
                                        <li><a href="element-titles.html">Titles</a></li>
                                        <li><a href="element-categories.html">Product Category</a></li>
                                        <li><a href="element-buttons.html">Buttons</a></li>
                                        <li><a href="element-accordions.html">Accordions</a></li>
                                        <li><a href="element-alerts.html">Alert &amp; Notification</a></li>
                                        <li><a href="element-tabs.html">Tabs</a></li>
                                        <li><a href="element-testimonials.html">Testimonials</a></li>
                                        <li><a href="element-blog-posts.html">Blog Posts</a></li>
                                        <li><a href="element-instagrams.html">Instagrams</a></li>
                                        <li><a href="element-cta.html">Call to Action</a></li>
                                        <li><a href="element-icon-boxes.html">Icon Boxes</a></li>
                                        <li><a href="element-icons.html">Icons</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="blog-classic.html">ব্লোগ</a>
                                    <ul>
                                        <li><a href="blog-classic.html">Classic</a></li>
                                        <li><a href="blog-listing.html">Listing</a></li>
                                        <li>
                                            <a href="#">Grid</a>
                                            <ul>
                                                <li><a href="blog-grid-2col.html">Grid 2 columns</a></li>
                                                <li><a href="blog-grid-3col.html">Grid 3 columns</a></li>
                                                <li><a href="blog-grid-4col.html">Grid 4 columns</a></li>
                                                <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Masonry</a>
                                            <ul>
                                                <li><a href="blog-masonry-2col.html">Masonry 2 columns</a></li>
                                                <li><a href="blog-masonry-3col.html">Masonry 3 columns</a></li>
                                                <li><a href="blog-masonry-4col.html">Masonry 4 columns</a></li>
                                                <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Mask</a>
                                            <ul>
                                                <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                                <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="post-single.html">Single Post</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="about-us.html">আমাদের সম্পৃর্কে</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-right">
                        <a href="#">সিমিত সময়ের অফার
                        </a>
                        <a href="https://d-themes.com/buynow/riodehtml" target="_blank" class="ml-6">কিনুন !
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header -->
        <main class="main">
            <div class="page-content mb-10 pb-2">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="demo3.html"><i class="d-icon-home"></i></a></li>
                        <li>শপ</li>
                    </ul>
                    <!-- End Breadcrumb -->
                    <div class="row main-content-wrap gutter-lg">
                        <aside class="col-lg-3 sidebar sidebar-fixed shop-sidebar sticky-sidebar-wrapper">
                            <div class="sidebar-overlay"></div>
                            <a class="sidebar-close" href="#"><i class="d-icon-times"></i></a>
                            <div class="sidebar-content">
                                <div class="sticky-sidebar">
                                    <div class="widget widget-collapsible">
                                        <h3 class="widget-title">সকল ক্যাটাগরি</h3>
                                        <ul class="widget-body filter-items search-ul">
                                            <li><a href="#">আনুষাঙ্গিক</a></li>
                                            <li>
                                                <a href="#">চন্দন কাঠ</a>
                                                <ul>
                                                    <li><a href="#">Backpacks & Fashion Bags</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">মধু</a>
                                                <ul>
                                                    <li><a href="#">Computer</a></li>
                                                    <li><a href="#">Gaming & Accessosries</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">তেতুল চাটনী</a></li>
                                            <li><a href="#">মোম</a></li>
                                            <li><a href="#">বাদাম</a></li>
                                            <li><a href="#">আজকের কুপন</a></li>
                                            <li><a href="#">তেতুল চাটনী &amp; মধু</a></li>
                                            <li><a href="#">প্রতিদিনের কুপন</a></li>
                                        </ul>
                                    </div>
                                    <div class="widget widget-collapsible">
                                        <h3 class="widget-title">মূল্য</h3>
                                        <div class="widget-body mt-3">
                                            <form action="#">
                                                <div class="filter-price-slider"></div>

                                                <div class="filter-actions">
                                                    <div class="filter-price-text mb-4">মূল্য:
                                                        <span class="filter-price-range"></span>
                                                    </div>
                                                    <button type="submit"
                                                        class="btn btn-dark btn-rounded btn-filter">ফিল্টার করুন</button>
                                                </div>
                                            </form><!-- End Filter Price Form -->
                                        </div>
                                    </div>
                                    <div class="widget widget-collapsible">
                                        <h3 class="widget-title">আকার</h3>
                                        <ul class="widget-body filter-items">
                                            <li><a href="#">অতিরিক্ত বড়</a></li>
                                            <li><a href="#">বড়</a></li>
                                            <li><a href="#">মধ্যম</a></li>
                                            <li><a href="#">ছোট</a></li>
                                        </ul>
                                    </div>
                                    <div class="widget widget-collapsible">
                                        <h3 class="widget-title">রঙ</h3>
                                        <ul class="widget-body filter-items">
                                            <li><a href="#">কালো</a></li>
                                            <li><a href="#">নীল</a></li>
                                            <li><a href="#">সবুজ
                                                </a></li>
                                            <li><a href="#">সাদা</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <div class="col-lg-9 main-content">

                            @php
                                echo '<pre>';
                                         print_r($UserIP);
                                echo '</pre>';
                            @endphp
                            <div class="shop-banner banner"
                                style="background-image: url('{{ asset('public/frontend') }}/images/sundorbon/mom.jpg'); background-color: #f2f2f3;">

                                <div class="banner-content">
                                    <h4
                                        class="banner-subtitle mb-2 d-inline-block text-uppercase font-weight-bold text-white bg-dark">
                                        বিসুদ্ধ মোম</h4>
                                    <h1 class="banner-title text-uppercase text-dark font-weight-bold ls-l">২০%
                                        ছাড়ে</h1>
                                    <a href="#" class="btn btn-outline btn-rounded btn-dark">কিনুন এখুনি !</a>
                                </div>
                            </div>
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
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">দ্রুত
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
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
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
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">দ্রুত
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
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
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
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">দ্রুত
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
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
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
                                        <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1"
                                            aria-disabled="true">
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
        <footer class="footer appear-animate" data-animation-options="{'name': 'fadeIn', 'duration': '1s'}">
            <div class="container">
                <div class="footer-top">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <a href="demo3.html" class="logo-footer">
                                <img src="{{ asset('public/frontend') }}/images/demos/demo3/logo_.png" alt="logo-footer"
                                    width="154" height="43" />
                            </a>
                            <!-- End FooterLogo -->
                        </div>
                        <div class="col-lg-9">
                            <div class="widget widget-newsletter form-wrapper form-wrapper-inline">
                                <div class="newsletter-info mx-auto mr-lg-2 ml-lg-4">
                                    <h4 class="widget-title">আমাদের নিউজলেটার Subscribe করুন</h4>
                                    <p>সব সর্বশেষ তথ্য, বিক্রয় এবং অফার পান.</p>
                                </div>
                                <form action="#" class="input-wrapper input-wrapper-inline">
                                    <input type="email" class="form-control" name="email" id="newsletter_email"
                                        placeholder="Email address here..." required />
                                    <button class="btn btn-primary btn-md btn-rounded ml-2" type="submit">subscribe<i
                                            class="d-icon-arrow-right"></i></button>
                                </form>
                            </div>
                            <!-- End Newsletter -->
                        </div>
                    </div>
                </div>
                <!-- End FooterTop -->
                <div class="footer-middle">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="widget widget-info">
                                <h4 class="widget-title">যোগাযোগের তথ্য</h4>
                                <ul class="widget-body">
                                    <li>
                                        <label>ফোন:</label>
                                        <a href="tel:#">Toll Free (123) 456-7890</a>
                                    </li>
                                    <li>
                                        <label> ইমেইল:</label>
                                        <a href="mailto:mail@riode.com">mail@riode.com</a>
                                    </li>
                                    <li>
                                        <label>ঠিকানা:</label>
                                        <a href="#">123 Street Name, City, England</a>
                                    </li>
                                    <li>
                                        <label>কাজের দিন / ঘন্টা:</label>
                                    </li>
                                    <li>
                                        <a href="#">Mon - Sun / 9:00 AM - 8:00 PM</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Widget -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="widget ml-lg-4">
                                <h4 class="widget-title">
                                    আমার অ্যাকাউন্ট</h4>
                                <ul class="widget-body">
                                    <li>
                                        <a href="about-us.html">আমাদের সম্পর্কে</a>
                                    </li>
                                    <li>
                                        <a href="#">অর্ডার ইতিহাস
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">রিটার্নস</a>
                                    </li>
                                    <li>
                                        <a href="#">কাস্টম সেবা</a>
                                    </li>
                                    <li>
                                        <a href="#">শর্তাবলী &amp; অবস্থা</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Widget -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="widget ml-lg-4">
                                <h4 class="widget-title">যোগাযোগের তথ্য</h4>
                                <ul class="widget-body">
                                    <li>
                                        <a href="#">Sign in</a>
                                    </li>
                                    <li>
                                        <a href="cart.html"> Cart দেখুন</a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html">My Wishlist</a>
                                    </li>
                                    <li>
                                        <a href="#">Track My Order</a>
                                    </li>
                                    <li>
                                        <a href="#">Help</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Widget -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="widget widget-instagram">
                                <h4 class="widget-title">Instagram</h4>
                                <figure class="widget-body row">
                                    <div class="col-3">
                                        <img src="{{ asset('public/frontend') }}/images/instagram/01.jpg"
                                            alt="instagram 1" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="{{ asset('public/frontend') }}/images/instagram/02.jpg"
                                            alt="instagram 2" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="{{ asset('public/frontend') }}/images/instagram/03.jpg"
                                            alt="instagram 3" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="{{ asset('public/frontend') }}/images/instagram/04.jpg"
                                            alt="instagram 4" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="{{ asset('public/frontend') }}/images/instagram/05.jpg"
                                            alt="instagram 5" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="{{ asset('public/frontend') }}/images/instagram/06.jpg"
                                            alt="instagram 6" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="{{ asset('public/frontend') }}/images/instagram/07.jpg"
                                            alt="instagram 7" width="64" height="64" />
                                    </div>
                                    <div class="col-3">
                                        <img src="{{ asset('public/frontend') }}/images/instagram/08.jpg"
                                            alt="instagram 8" width="64" height="64" />
                                    </div>
                                </figure>
                            </div>
                            <!-- End Instagram -->
                        </div>
                    </div>
                </div>
                <!-- End FooterMiddle -->
                <div class="footer-bottom">
                    <div class="footer-left">
                        <figure class="payment">
                            <img src="{{ asset('public/frontend') }}/images/payment.png" alt="payment" width="159"
                                height="29" />
                        </figure>
                    </div>
                    <div class="footer-center">
                        <p class="copyright">আমাদের শপ &copy; 2021. All Rights Reserved</p>
                    </div>
                    <div class="footer-right">
                        <div class="social-links">
                            <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                            <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                            <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                        </div>
                    </div>
                </div>
                <!-- End FooterBottom -->
            </div>
        </footer>
        <!-- End Footer -->
    </div><!-- Sticky Footer -->
    <div class="sticky-footer sticky-content fix-bottom">
        <a href="demo3.html" class="sticky-link active">
            <i class="d-icon-home"></i>
            <span>Home</span>
        </a>
        <a href="demo3-shop.html" class="sticky-link">
            <i class="d-icon-volume"></i>
            <span>Categories</span>
        </a>
        <a href="wishlist.html" class="sticky-link">
            <i class="d-icon-heart"></i>
            <span>Wishlist</span>
        </a>
        <a href="account.html" class="sticky-link">
            <i class="d-icon-user"></i>
            <span>Account</span>
        </a>
        <div class="header-search hs-toggle dir-up">
            <a href="#" class="search-toggle sticky-link">
                <i class="d-icon-search"></i>
                <span>Search</span>
            </a>
            <form action="#" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off"
                    placeholder="Search your keyword..." required />
                <button class="btn btn-search" type="submit">
                    <i class="d-icon-search"></i>
                </button>
            </form>
        </div>
    </div>
    <!-- Scroll Top -->
    <a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="d-icon-arrow-up"></i></a>

    <!-- MobileMenu -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-overlay">
        </div>
        <!-- End Overlay -->
        <a class="mobile-menu-close" href="#"><i class="d-icon-times"></i></a>
        <!-- End CloseButton -->
        <div class="mobile-menu-container scrollable">
            <form action="#" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off"
                    placeholder="Search your keyword..." required />
                <button class="btn btn-search" type="submit">
                    <i class="d-icon-search"></i>
                </button>
            </form>
            <!-- End Search Form -->
            <ul class="mobile-menu mmenu-anim">
                <li>
                    <a href="demo3.html">Home</a>
                </li>
                <li>
                    <a href="demo3-shop.html" class="active">Categories</a>
                    <ul>
                        <li>
                            <a href="#">
                                Variations 1
                            </a>
                            <ul>
                                <li><a href="shop-banner-sidebar.html">Banner With Sidebar</a></li>
                                <li><a href="shop-boxed-banner.html">Boxed Banner</a></li>
                                <li><a href="shop-infinite-scroll.html">Infinite Ajaxscroll</a></li>
                                <li><a href="shop-horizontal-filter.html">Horizontal Filter</a></li>
                                <li><a href="shop-navigation-filter.html">Navigation Filter<span
                                            class="tip tip-hot">Hot</span></a></li>

                                <li><a href="shop-off-canvas.html">Off-Canvas Filter</a></li>
                                <li><a href="shop-right-sidebar.html">Right Toggle Sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                Variations 2
                            </a>
                            <ul>

                                <li><a href="shop-grid-3cols.html">3 Columns Mode<span
                                            class="tip tip-new">New</span></a></li>
                                <li><a href="shop-grid-4cols.html">4 Columns Mode</a></li>
                                <li><a href="shop-grid-5cols.html">5 Columns Mode</a></li>
                                <li><a href="shop-grid-6cols.html">6 Columns Mode</a></li>
                                <li><a href="shop-grid-7cols.html">7 Columns Mode</a></li>
                                <li><a href="shop-grid-8cols.html">8 Columns Mode</a></li>
                                <li><a href="shop-list.html">List Mode</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="demo3-product.html">Products</a>
                    <ul>
                        <li>
                            <a href="#">Product Pages</a>
                            <ul>
                                <li><a href="product-simple.html">Simple Product</a></li>
                                <li><a href="product.html">Variable Product</a></li>
                                <li><a href="product-sale.html">Sale Product</a></li>
                                <li><a href="product-featured.html">Featured &amp; On Sale</a></li>

                                <li><a href="product-left-sidebar.html">With Left Sidebar</a></li>
                                <li><a href="product-right-sidebar.html">With Right Sidebar</a></li>
                                <li><a href="product-sticky-cart.html">Add Cart Sticky<span
                                            class="tip tip-hot">Hot</span></a></li>
                                <li><a href="product-tabinside.html">Tab Inside</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Product Layouts</a>
                            <ul>
                                <li><a href="product-grid.html">Grid Images<span class="tip tip-new">New</span></a>
                                </li>
                                <li><a href="product-masonry.html">Masonry</a></li>
                                <li><a href="product-gallery.html">Gallery Type</a></li>
                                <li><a href="product-full.html">Full Width Layout</a></li>
                                <li><a href="product-sticky.html">Sticky Info</a></li>
                                <li><a href="product-sticky-both.html">Left &amp; Right Sticky</a></li>
                                <li><a href="product-horizontal.html">Horizontal Thumb</a></li>

                                <li><a href="#">Build Your Own</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Pages</a>
                    <ul>
                        <li><a href="about-us.html">About</a></li>
                        <li><a href="contact-us.html">Contact Us</a></li>
                        <li><a href="account.html">Login</a></li>
                        <li><a href="faq.html">FAQs</a></li>
                        <li><a href="error-404.html">Error 404</a></li>
                        <li><a href="coming-soon.html">Coming Soon</a></li>
                    </ul>
                </li>
                <li>
                    <a href="blog-classic.html">Blog</a>
                    <ul>
                        <li><a href="blog-classic.html">Classic</a></li>
                        <li><a href="blog-listing.html">Listing</a></li>
                        <li>
                            <a href="#">Grid</a>
                            <ul>
                                <li><a href="blog-grid-2col.html">Grid 2 columns</a></li>
                                <li><a href="blog-grid-3col.html">Grid 3 columns</a></li>
                                <li><a href="blog-grid-4col.html">Grid 4 columns</a></li>
                                <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Masonry</a>
                            <ul>
                                <li><a href="blog-masonry-2col.html">Masonry 2 columns</a></li>
                                <li><a href="blog-masonry-3col.html">Masonry 3 columns</a></li>
                                <li><a href="blog-masonry-4col.html">Masonry 4 columns</a></li>
                                <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Mask</a>
                            <ul>
                                <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="post-single.html">Single Post</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Elements</a>
                    <ul>
                        <li><a href="element-products.html">Products</a></li>
                        <li><a href="element-typography.html">Typography</a></li>
                        <li><a href="element-titles.html">Titles</a></li>
                        <li><a href="element-categories.html">Product Category</a></li>
                        <li><a href="element-buttons.html">Buttons</a></li>
                        <li><a href="element-accordions.html">Accordions</a></li>
                        <li><a href="element-alerts.html">Alert &amp; Notification</a></li>
                        <li><a href="element-tabs.html">Tabs</a></li>
                        <li><a href="element-testimonials.html">Testimonials</a></li>
                        <li><a href="element-blog-posts.html">Blog Posts</a></li>
                        <li><a href="element-instagrams.html">Instagrams</a></li>
                        <li><a href="element-cta.html">Call to Action</a></li>
                        <li><a href="element-icon-boxes.html">Icon Boxes</a></li>
                        <li><a href="element-icons.html">Icons</a></li>
                    </ul>
                </li>
                <li><a href="https://d-themes.com/buynow/riodehtml" target="_blank">Buy Riode!</a></li>
            </ul>
            <!-- End MobileMenu -->
        </div>
    </div>

@endsection
