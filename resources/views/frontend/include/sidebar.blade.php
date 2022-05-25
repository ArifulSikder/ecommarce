<aside class="col-xl-3 col-lg-4 sidebar sidebar-fixed sticky-sidebar-wrapper home-sidebar">
    <div class="sidebar-overlay">
        <a class="sidebar-close" href="#"><i class="d-icon-times"></i></a>
    </div>
    <a href="#" class="sidebar-toggle"><i class="fas fa-chevron-right"></i></a>
    <div class="sidebar-content">

        <div class="sticky-sidebar">
            <ul class="menu vertical-menu category-menu mb-4">

                <li><a href="#" class="menu-title">জনপ্রিয়
                        ক্যাটাগরি</a>
                </li>
                @foreach (categoriesPropular() as $category)
                    <li>
                        <a href="{{ url('show-' . $category->slug) }}">{!! $category->category_icon !!}
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
                    <img src="{{ asset(SpecialOffer()->product_thumbnail) }}" width="280" height="312" alt="banner"
                        style="background-color: #26303c;" />
                </figure>
                <div class="banner-price-info font-weight-bold text-white text-uppercase">
                    20-22<sup>th</sup> April</div>
                <div class="banner-content text-center w-100">
                    <h4 class="banner-subtitle d-inline-block bg-primary font-weight-semi-bold text-uppercase">
                        Ultimate Sale</h4>
                    <h3 class="banner-title ls-m lh-1 text-uppercase text-white font-weight-bold">
                        Up
                        to {{ SpecialOffer()->product_discount }}%</h3>
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
                                            alt="product" width="100" height="100" style="background-color: #f5f5f5;" />
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
                                            alt="product" width="100" height="100" style="background-color: #f5f5f5;" />
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
                                            alt="product" width="100" height="100" style="background-color: #f5f5f5;" />
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
                                            alt="product" width="100" height="100" style="background-color: #f5f5f5;" />
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
                                            alt="product" width="100" height="100" style="background-color: #f5f5f5;" />
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
                                            alt="product" width="100" height="100" style="background-color: #f5f5f5;" />
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
                                        width="280" height="195" alt="post" style="background-color: #bcc3ca;" />
                                </a>
                            </figure>
                            <div class="post-details">
                                <div class="post-meta">
                                    লেখক <a href="#" class="post-author"> আরিফ</a>
                                    on <a href="#" class="post-date">Nov 22, 2018</a>
                                </div>
                                <h3 class="post-title"><a href="post-single.html">চন্দনের কাঠের
                                        সাথে এর গুরা</a></h3>
                                <a href="post-single.html" class="btn btn-primary btn-link btn-underline btn-sm">Read
                                    More<i class="d-icon-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="post overlay-dark overlay-zoom">
                            <figure class="post-media">
                                <a href="post-single.html">
                                    <img src="{{ asset('public/frontend') }}/images/demos/demo3/blog/2.jpg"
                                        width="280" height="195" alt="post" style="background-color: #a1a7b6;" />
                                </a>
                            </figure>
                            <div class="post-details">
                                <div class="post-meta">
                                    by <a href="#" class="post-author">John Doe</a>
                                    on <a href="#" class="post-date">Nov 22, 2018</a>
                                </div>
                                <h3 class="post-title"><a href="post-single.html">Just a
                                        cool blog post with Images</a></h3>
                                <a href="post-single.html" class="btn btn-link btn-underline btn-primary btn-sm">Read
                                    More<i class="d-icon-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="post overlay-dark overlay-zoom">
                            <figure class="post-media">
                                <a href="post-single.html">
                                    <img src="{{ asset('public/frontend') }}/images/demos/demo3/blog/3.jpg"
                                        width="280" height="195" alt="post" style="background-color: #acb9bf;" />
                                </a>
                            </figure>
                            <div class="post-details">
                                <div class="post-meta">
                                    by <a href="#" class="post-author">John Doe</a>
                                    on <a href="#" class="post-date">Nov 22, 2018</a>
                                </div>
                                <h3 class="post-title"><a href="post-single.html">Just a
                                        cool blog post with Images</a></h3>
                                <a href="post-single.html" class="btn btn-link btn-underline btn-primary btn-sm">Read
                                    More<i class="d-icon-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="post overlay-dark overlay-zoom">
                            <figure class="post-media">
                                <a href="post-single.html">
                                    <img src="{{ asset('public/frontend') }}/images/demos/demo3/blog/4.jpg"
                                        width="280" height="195" alt="post" style="background-color: #2d3635;" />
                                </a>
                            </figure>
                            <div class="post-details">
                                <div class="post-meta">
                                    by <a href="#" class="post-author">John Doe</a>
                                    on <a href="#" class="post-date">Nov 22, 2018</a>
                                </div>
                                <h3 class="post-title"><a href="post-single.html">Just a
                                        cool blog post with Images</a></h3>
                                <a href="post-single.html" class="btn btn-link btn-underline btn-primary btn-sm">Read
                                    More<i class="d-icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget widget-testimonial border-no" data-animation-options="{'delay': '.3s'}">
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
                                    <img src="{{ asset('public/frontend') }}/images/demos/demo3/agent.png" alt="user"
                                        width="40" height="40" />
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
                                    <img src="{{ asset('public/frontend') }}/images/demos/demo3/agent.png" alt="user"
                                        width="40" height="40" />
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
