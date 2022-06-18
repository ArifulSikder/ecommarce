<footer class="footer appear-animate" data-animation-options="{'name': 'fadeIn', 'duration': '1s'}">
    <div class="container">
        <!-- End FooterTop -->
        <div class="footer-middle">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="widget widget-info">
                        <h4 class="widget-title">যোগাযোগের তথ্য</h4>
                        <ul class="widget-body">
                            <li>
                                <label>ফোন:</label>
                                <a href="tel:{{ contact()->mobile }}">{{ contact()->mobile }}</a>
                            </li>
                            <li>
                                <label> ইমেইল:</label>
                                <a href="mailto:{{ contact()->email }}">{{ contact()->email }}</a>
                            </li>
                            <li>
                                <label>ঠিকানা:</label>
                                <a href="#">{{ contact()->address }}</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Widget -->
                </div>
                <div class="col-lg-4 col-md-6">
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
                <div class="col-lg-4 col-md-6">
                    <div class="widget ml-lg-4">
                        <h4 class="widget-title">যোগাযোগের তথ্য</h4>
                        <ul class="widget-body">
                            <li>
                                <a href="#">Sign in</a>
                            </li>
                            <li>
                                <a href="#"> Cart দেখুন</a>
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
                {{-- <div class="col-lg-3 col-md-6">
                    <div class="widget widget-instagram">
                        <h4 class="widget-title">Instagram</h4>
                        <figure class="widget-body row">
                            <div class="col-3">
                                <img src="{{ asset('public/frontend') }}/images/instagram/01.jpg" alt="instagram 1"
                                    width="64" height="64" />
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('public/frontend') }}/images/instagram/02.jpg" alt="instagram 2"
                                    width="64" height="64" />
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('public/frontend') }}/images/instagram/03.jpg" alt="instagram 3"
                                    width="64" height="64" />
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('public/frontend') }}/images/instagram/04.jpg" alt="instagram 4"
                                    width="64" height="64" />
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('public/frontend') }}/images/instagram/05.jpg" alt="instagram 5"
                                    width="64" height="64" />
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('public/frontend') }}/images/instagram/06.jpg" alt="instagram 6"
                                    width="64" height="64" />
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('public/frontend') }}/images/instagram/07.jpg" alt="instagram 7"
                                    width="64" height="64" />
                            </div>
                            <div class="col-3">
                                <img src="{{ asset('public/frontend') }}/images/instagram/08.jpg" alt="instagram 8"
                                    width="64" height="64" />
                            </div>
                        </figure>
                    </div>
                    <!-- End Instagram -->
                </div> --}}
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
