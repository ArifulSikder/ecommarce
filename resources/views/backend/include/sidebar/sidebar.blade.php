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
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
