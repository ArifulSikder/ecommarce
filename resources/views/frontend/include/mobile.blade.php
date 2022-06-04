  <!-- Sticky Footer -->
  <div class="sticky-footer sticky-content fix-bottom">
      <a href="{{ url('/') }}" class="sticky-link active">
          <i class="d-icon-home"></i>
          <span>Home</span>
      </a>
      <a href="{{ route('productDetails') }}" class="sticky-link">
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
      <!-- End of Overlay -->
      <a class="mobile-menu-close" href="#"><i class="d-icon-times"></i></a>
      <!-- End of CloseButton -->
      <div class="mobile-menu-container scrollable">
          <form action="#" class="input-wrapper">
              <input type="text" class="form-control" id="searchKeyWordMobile" name="search"
                  placeholder="Search your keyword..." required />
              <button class="btn btn-search" type="submit">
                  <i class="d-icon-search"></i>
              </button>
          </form>

          <div class="searchAutoComplete">
              {{-- live search content will render here --}}
          </div>
          <!-- End of Search Form -->
          <ul class="mobile-menu mmenu-anim">
              <li>
                  <a href="{{ url('/') }}"><i class="fas fa-home"></i>Home</a>
              </li>
              @foreach (categoriesNav() as $category)
                  <li><a href="{{ url('show-' . $category->slug) }}">{!! $category->category_icon !!}
                          {{ $category->category_name }}</a></li>
              @endforeach
          </ul>
          <!-- End of MobileMenu -->
      </div>
  </div>

  <div class="newsletter-popup mfp-hide" id="newsletter-popup"
      style="background-image: url({{ asset('public/frontend') }}/images/sundorbon/sandalwood3.jpg)">
      <div class="newsletter-content">
          <h4 class="text-uppercase text-dark">Up to <span class="text-primary">20% Off</span></h4>
          <h2 class="font-weight-semi-bold"><span>আমাদের শপে</span> Sign In করুন</h2>
          <p class="text-grey">Subscribe to the Riode eCommerce newsletter to receive timely updates from your
              favorite
              products.</p>
          <form action="#" method="get" class="input-wrapper input-wrapper-inline input-wrapper-round">
              <input type="email" class="form-control email" name="email" id="email2"
                  placeholder="Email address here..." required="">
              <button class="btn btn-dark" type="submit">SUBMIT</button>
          </form>
          <div class="form-checkbox justify-content-center">
              <input type="checkbox" class="custom-checkbox" id="hide-newsletter-popup" name="hide-newsletter-popup"
                  required />
              <label for="hide-newsletter-popup">Don't show this popup again</label>
          </div>
      </div>
  </div>
