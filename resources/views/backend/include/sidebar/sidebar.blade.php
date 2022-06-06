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
                <li class="nav-item has-treeview @yield('dashboard')">
                    <a href="{{ route('home') }}" class="nav-link @yield('dashboardActive')">
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
                        <li class="nav-item">
                            <a href="{{ route('shippingInformation') }}" class="nav-link  @yield('shippingInformation')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>পণ্য পৌছানো সংক্রান্ত তথ্য</p>
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

                {{-- testimonial --}}
                <li class="nav-item has-treeview  @yield('testimonial')">
                    <a href="#" class="nav-link  @yield('testimonialActive')">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            প্রশংসাপত্র
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('indexTestimonial') }}" class="nav-link  @yield('indexTestimonial')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>প্রশংসাপত্র তালিকা</p>
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
                    </ul>
                </li>


                {{-- location --}}
                <li class="nav-item has-treeview  @yield('location')">
                    <a href="#" class="nav-link  @yield('activeLocation')">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            লোকেশন
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
                        <li class="nav-item">
                            <a href="{{ route('thana-list') }}" class="nav-link  @yield('thana-list')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>থানা তালিকা</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- brand --}}
                <li class="nav-item has-treeview  @yield('brand')">
                    <a href="#" class="nav-link  @yield('activeBrand')">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            ব্রান্ড
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('brand-list') }}" class="nav-link  @yield('brand-list')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ব্রান্ড তালিকা</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- logo --}}
                <li class="nav-item has-treeview  @yield('logo')">
                    <a href="#" class="nav-link  @yield('activeLogo')">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            লোগো
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('main-logo') }}" class="nav-link  @yield('main-logo')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>লোগো তালিকা</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- contact us --}}
                <li class="nav-item has-treeview  @yield('contact')">
                    <a href="#" class="nav-link  @yield('contactActive')">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            যোগাযোগের তথ্য
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('contact-us') }}" class="nav-link  @yield('contact-us')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>যোগাযোগের তথ্যের তালিকা</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- order --}}
                <li class="nav-item has-treeview  @yield('order')">
                    <a href="#" class="nav-link  @yield('activeOrder')">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            সকল অর্ডার
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('pending-order') }}" class="nav-link  @yield('pending-order')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>পেনডিং অর্ডার</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('confirm-order') }}" class="nav-link  @yield('confirm-order')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>কনফার্ম অর্ডার</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('processing-order') }}" class="nav-link  @yield('processing-order')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>প্রক্রিয়াধিন অর্ডার</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('picked-order') }}" class="nav-link  @yield('picked-order')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>পিক্ট অর্ডার</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('shipped-order') }}" class="nav-link  @yield('shipped-order')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>সিফট অর্ডার</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('deliverd-order') }}" class="nav-link  @yield('deliverd-order')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ডেলিভারি অর্ডার</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('return-order') }}" class="nav-link  @yield('return-order')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>রিটার্ন অর্ডার</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('cancelOrderlist') }}" class="nav-link  @yield('cancelOrderlist')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ক্যান্সেল অর্ডার</p>
                            </a>
                        </li>
                    </ul>
                </li>


                {{-- @can('user') --}}
                <li class="nav-item has-treeview  @yield('user')">
                    <a href=" #" class="nav-link  @yield('activeUser')">
                        <i class=" nav-icon fas fa-chart-pie"></i>
                        <p>
                            ব্যবহারকারি
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        {{-- <li class="nav-item">
                            <a href="{{ route('createuser') }}" class="nav-link  @yield('registerUser')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create User</p>
                            </a>
                        </li> --}}
                        <li class="nav-item">
                            <a href="{{ route('userList') }}" class="nav-link  @yield('userList')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ব্যবহারকারির তালিকা</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- @endcan --}}
                <li class="nav-item has-treeview  @yield('roleAndPermission')">
                    <a href=" #" class="nav-link  @yield('roleAndPermissionActive')">
                        <i class=" nav-icon fas fa-chart-pie"></i>
                        <p>
                            Role And Permission
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('roles') }}" class="nav-link  @yield('rolesList')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Roles List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('permissions') }}" class="nav-link @yield('permissions')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Permissions List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('givePermission') }}" class="nav-link @yield('givePermission')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Give Permission</p>
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
