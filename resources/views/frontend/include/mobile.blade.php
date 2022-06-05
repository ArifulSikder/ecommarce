  <!-- Sticky Footer -->

  <div class="sticky-footer sticky-content fix-bottom">

      <a href="{{ url('/') }}" class="sticky-link active">
          <i class="d-icon-home"></i>
          <span>Home</span>
      </a>
      {{-- <a href="{{ route('productDetails') }}" class="sticky-link">
          <i class="d-icon-volume"></i>
          <span>Categories</span>
      </a> --}}
      {{-- <a href="wishlist.html" class="sticky-link">
          <i class="d-icon-heart"></i>
          <span>Wishlist</span>
      </a>
      <a href="account.html" class="sticky-link">
          <i class="d-icon-user"></i>
          <span>Account</span>
      </a> --}}

      <div class="header-search hs-toggle dir-up">
          <a href="#" class="search-toggle sticky-link">
              <i class="d-icon-search"></i>
              <span>Search</span>
          </a>
          <form action="#" class="input-wrapper">
              <input type="text" class="form-control" name="search" id="liveSearchMobileFooter"
                  placeholder="Search your keyword..." required />
              <button class="btn btn-search" type="button" id="searchButton">
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


  {{-- search modal --}}
  <div class="modal fade searchDataModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-sm">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
          <div class="modal-content">
              <div id="searchdata">

              </div>
          </div>
      </div>
  </div>
