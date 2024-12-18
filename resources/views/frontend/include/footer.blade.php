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
                        <h4 class="widget-title"> তথ্য</h4>
                        <ul class="widget-body">
                            {{-- <li>
                                <a href="#">Sign in</a>
                            </li>
                            <li>
                                <a href="#"> Cart দেখুন</a>
                            </li>
                            <li>
                                <a href="#">Track My Order</a>
                            </li> --}}
                            <li>
                                <a href="#">Help</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Widget -->
                </div>
            </div>
        </div>
        <!-- End FooterMiddle -->
        <div class="footer-bottom">
            <div class="footer-center">
                <p class="copyright">{{ logo()->side_name }} &copy; 2022. All Rights Reserved</p>
            </div>
            <div class="footer-right">
                <div class="social-links">
                    <a href="{{ socialLinks()->facebook }}" class="social-link social-facebook fab fa-facebook-f"></a>
                    <a href="{{ socialLinks()->twitter }}" class="social-link social-twitter fab fa-twitter"></a>
                    <a href="{{ socialLinks()->linkdin }}" class="social-link social-linkedin fab fa-linkedin-in"></a>
                </div>
            </div>
        </div>
        <!-- End FooterBottom -->
    </div>
</footer>
