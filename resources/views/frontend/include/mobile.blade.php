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
              <input type="text" class="form-control" name="search" autocomplete="off"
                  placeholder="Search your keyword..." required />
              <button class="btn btn-search" type="submit">
                  <i class="d-icon-search"></i>
              </button>
          </form>
          <!-- End of Search Form -->
          <ul class="mobile-menu mmenu-anim">
              <li>
                  <a href="{{ url('/') }}">Home</a>
              </li>
              <li>
                  <a href="{{ route('productDetails') }}">Categories</a>
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
                  <a href="{{ route('productDetails') }}">Categories</a>
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
              <li><a href="riode.html">Buy Riode!</a></li>
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
