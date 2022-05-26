<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link text-center">
        Ecommarce
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview @yield('category')">
                    <a href="{{ route('category') }}" class="nav-link  @yield('categoryActive')">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            ক্যাটেগরি
                        </p>
                    </a>
                </li>


                <li class="nav-item has-treeview  @yield('banner')">
                    <a href="#" class="nav-link  @yield('bannerActive')">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            ব্যানার
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('addBanner') }}" class="nav-link  @yield('addBanner')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ব্যানার যোগ করুন</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('banner') }}" class="nav-link  @yield('banner')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ব্যানার তালিকা</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- product --}}
                <li class="nav-item has-treeview  @yield('product')">
                    <a href="#" class="nav-link  @yield('productActive')">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            প্রোডাক্ট (পন্য)
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('addProduct') }}" class="nav-link  @yield('addProduct')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>প্রোডাক্ট যোগ করুন</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('productList') }}" class="nav-link  @yield('productList')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>প্রোডাক্ট তালিকা</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- blog --}}
                <li class="nav-item has-treeview  @yield('blog')">
                    <a href="#" class="nav-link  @yield('blogActive')">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            ব্লোগ
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('addBlog') }}" class="nav-link  @yield('addBlog')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ব্লোগ যোগ করুন</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('blogs-list') }}" class="nav-link  @yield('blogs-list')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ব্লোগ তালিকা</p>
                            </a>
                        </li>
                    </ul>
                </li>


                {{-- coupon --}}
                <li class="nav-item has-treeview  @yield('coupon')">
                    <a href="#" class="nav-link  @yield('activeCoupon')">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            কুপন
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('coupon-list') }}" class="nav-link  @yield('coupon-list')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>কুপন তালিকা</p>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="{{ route('blogs-list') }}" class="nav-link  @yield('blogs-list')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>কুপন তালিকা</p>
                            </a>
                        </li> --}}
                    </ul>
                </li>

                {{-- location --}}
                <li class="nav-item has-treeview  @yield('location')">
                    <a href="#" class="nav-link  @yield('activeLocation')">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            বিভাগ
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('division-list') }}" class="nav-link  @yield('division-list')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>বিভাগের তালিকা</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('district-list') }}" class="nav-link  @yield('district-list')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>জেলার তালিকা</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
