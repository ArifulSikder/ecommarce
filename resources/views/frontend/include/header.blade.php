<header class="header">
    <!-- End HeaderTop -->
    <div class="header-middle sticky-header fix-top sticky-content">
        <div class="container">
            <div class="header-left">
                <a href="#" class="mobile-menu-toggle">
                    <i class="d-icon-bars2"></i>
                </a>
                <a href="{{ url('/') }}" class="logo">
                    <img src="{{ asset(logo()->main_logo) }}" alt="logo" width="153" height="44" />
                </a>
                <!-- End Logo -->

                <div class="header-search hs-simple">
                    <form action="#" class="input-wrapper">
                        <input type="text" class="form-control" name="search" id="searchKeyWord"
                            placeholder="Search..." required />
                        <button class="btn btn-search" type="submit">
                            <i class="d-icon-search"></i>
                        </button>
                    </form>
                    <div class="searchAutoComplete">
                        {{-- live search content will render here --}}
                    </div>

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
                        <p>{{ contact()->mobile }}</p>
                    </div>
                </a>
                <span class="divider"></span>
                {{-- <a href="{{ url('wishlist') }}" class="wishlist">
                    <i class="d-icon-heart"></i>
                </a> --}}
                <span class="divider"></span>
                <div class="dropdown cart-dropdown type2 cart-offcanvas mr-0 mr-lg-2">
                    <a href="#" class="cart-toggle label-block link">
                        <div class="cart-label d-lg-show">
                            <span class="cart-name">Shopping Cart:</span>
                            <span class="cart-price" id="cartTotal"></span>
                        </div>
                        <i class="d-icon-bag"><span class="cart-count" id="cartQty"></span></i>
                    </a>
                    <div class="cart-overlay"></div>
                    <!-- End Cart Toggle -->
                    <div class="dropdown-box">
                        <div class="cart-header">
                            <h4 class="cart-title">Shopping Cart</h4>
                            <a href="#" class="btn btn-dark btn-link btn-icon-right btn-close">close<i
                                    class="d-icon-arrow-right"></i><span class="sr-only">Cart</span></a>
                        </div>
                        {{-- minicart start --}}
                        <div class="products scrollable" id="MiniCart">

                            <!-- End of Cart Product -->
                        </div>
                        {{-- minicart end --}}
                        <!-- End of Products  -->
                        <div class="cart-total">
                            <label>Subtotal:</label>
                            <span class="price" id="miniCartTotal"></span>
                        </div>
                        <!-- End of Cart Total -->
                        <div class="cart-action">
                            <a href="{{ url('cart') }}" class="btn btn-dark btn-link">View Cart</a>
                            <a href="{{ url('checkout') }}" class="btn btn-dark"><span>Go To Checkout</span></a>
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
                        <li class="active">
                            <a href="{{ url('/') }}">হোম</a>
                        </li>
                        @foreach (categoriesNav() as $index => $category)
                            <li class="{{ request()->is('show-' . $category->slug) ? 'active' : '' }}">
                                <a href="{{ url('show-' . $category->slug) }}">{!! $category->category_icon !!}
                                    {{ $category->category_name }}</a>
                            </li>
                        @endforeach
                        <li>
                            <a href="{{ route('location') }}">Access Location</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
