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
                {{-- <li><a href="{{ route('shopping') }}" class="menu-title mt-1">আজকের কুপন</a>
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
                </li> --}}
            </ul>
            @if (SpecialOffer() != null)
                <a href="{{ url('_' . SpecialOffer()->product_slug) }}">
                    <div class="banner banner-fixed overlay-zoom overlay-dark">
                        <figure>
                            <img src="{{ asset(SpecialOffer()->product_thumbnail) }}" width="280" height="312"
                                alt="banner" style="background-color: #26303c;" />
                        </figure>
                        <div class="banner-content text-center w-100">
                            <h3 class="banner-title ls-m lh-1 text-uppercase text-white font-weight-bold">
                                ছাড় {{ SpecialOffer()->product_discount }}%</h3>
                        </div>
                    </div>
                </a>
            @endif

            <div class="widget widget-blog border-no" data-animation-options="{'delay': '.3s'}">
                <h4 class="widget-title text-capitalize font-weight-bold">সর্বশেষ ব্লোগ</h4>
                <div class="widget-body">
                    <div class="owl-carousel owl-nav-top"
                        data-owl-options="{'items': 1,'loop': false,'nav': true,'dots': false,'margin': 20 }">
                        @foreach (blogSidebar() as $blog)
                            <div class="post overlay-dark overlay-zoom">
                                <figure class="post-media">
                                    <a href="#">
                                        <img src="{{ asset($blog->blog_thumbnail) }}" width="280" height="195"
                                            alt="post" style="background-color: #bcc3ca;" />
                                    </a>
                                </figure>
                                <div class="post-details">
                                    <div class="post-meta">
                                        লেখক <a href="#" class="post-author"> {{ $blog->writer }}</a>
                                        on <a href="#" class="post-date">{{ dateFormater($blog->date) }}</a>
                                    </div>
                                    <h3 class="post-title"><a href="#">{{ $blog->blog_title }}</a>
                                    </h3>
                                    {{-- <a href="#" class="btn btn-primary btn-link btn-underline btn-sm">Read
                                        More<i class="d-icon-arrow-right"></i></a> --}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="widget widget-testimonial border-no" data-animation-options="{'delay': '.3s'}">
                <h4 class="widget-title text-capitalize font-weight-bold">প্রশংসাপত্র</h4>
                <div class="widget-body">
                    <div class="owl-carousel owl-nav-top"
                        data-owl-options="{ 'items': 1,'loop': false,'nav': true,'dots': false, 'margin': 20}">

                        @foreach (testimonialData() as $testimonial)
                            <div class="testimonial">
                                <blockquote class="comment">{{ $testimonial->description }}</blockquote>
                                <div class="testimonial-info">
                                    <figure class="testimonial-author-thumbnail">
                                        <img src="{{ asset($testimonial->photo) }}" alt="user" width="40"
                                            height="40" />
                                    </figure>
                                    <cite class="font-weight-semi-bold text-capitalize">
                                        {{ $testimonial->name }}
                                        <span> {{ $testimonial->designation }}</span>
                                    </cite>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
