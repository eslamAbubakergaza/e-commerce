@include('website.header')
        <!-- –––––––––––––––[ HEADER ]––––––––––––––– -->

        <!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
        <main id="mainContent" class="main-content">
            <!-- Page Container -->
            <div class="page-container ptb-60">
                <div class="container">

                    <!-- Contact Us Area -->
                    <div class="contact-area contact-area-v1 panel">
                        <div class="row row-tb-20">
                            <div class="col-xs-12">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="google-map-iframe embed-responsive-item" src="http://maps.google.com/maps?q=56.7638955,-120.0681474&amp;z=4&amp;output=embed"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="ptb-30 prl-30">
                            <div class="row row-tb-20">
                                <div class="col-xs-12 col-md-6">
                                    <div class="contact-area-col contact-info">
                                        <div class="contact-info">
                                            <h3 class="t-uppercase h-title mb-20">Contact informations</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam officia accusamus qui est. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam officia accusamus qui est.</p>
                                            <ul class="contact-list mb-40">
                                                <li>
                                                    <span class="icon lnr lnr-map-marker"></span>
                                                    <h5>Address</h5>
                                                    <p class="color-mid">Comre, 404 Design Street, Melbourne, Australia</p>
                                                </li>
                                                <li>
                                                    <span class="icon lnr lnr-envelope"></span>
                                                    <h5>Email</h5>
                                                    <p class="color-mid">Email@address.com</p>
                                                </li>
                                                <li>
                                                    <span class="icon lnr lnr-phone-handset"></span>
                                                    <h5>Our phone</h5>
                                                    <p class="color-mid">(+212) 584-241-654</p>
                                                </li>
                                            </ul>
                                            <ul class="social-icons social-icons--colored list-inline">
                                                <li class="social-icons__item">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li class="social-icons__item">
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                </li>
                                                <li class="social-icons__item">
                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                </li>
                                                <li class="social-icons__item">
                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                </li>
                                                <li class="social-icons__item">
                                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <div class="contact-area-col contact-form">
                                        <h3 class="t-uppercase h-title mb-20">Get in touch</h3>
                                        <form action="#" method="post">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" required="required">
                                            </div>
                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <input type="text" class="form-control" required="required">
                                            </div>
                                            <div class="form-group">
                                                <label>Website</label>
                                                <input type="text" class="form-control" required="required">
                                            </div>
                                            <div class="form-group">
                                                <label>Message</label>
                                                <textarea rows="5" class="form-control" required="required"></textarea>
                                            </div>
                                            <button class="btn">Send Message</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Contact Us Area -->

                </div>
            </div>
            <!-- End Page Container -->


        </main>
        <!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->
@include('website.footer')
        <!-- –––––––––––––––[ END FOOTER ]––––––––––––––– -->

    </div>
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- END WRAPPER                               -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->

    <!-- ========== BUY THEME ========== -->
    <a href="https://google.com/" class="buy-theme" data-href="https://themeforest.net/item/friday-coupons-deals-discounts-promo-codes-template/19577226?ref=CODASTROID" target="_blank" id="buy_theme">
        <i class="fa fa-credit-card"></i>
    </a>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- BACK TO TOP                               -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <div id="backTop" class="back-top is-hidden-sm-down">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- SCRIPTS                                   -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->

    <!-- (!) Placed at the end of the document so the pages load faster -->

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Initialize jQuery library                 -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <script src="{{URL::asset('website/assets/js/jquery-1.12.3.min.js')}}"></script>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Latest compiled and minified Bootstrap    -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <script type="text/javascript" src="{{URL::asset('website/assets/js/bootstrap.min.js')}}"></script>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- JavaScript Plugins                        -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- (!) Include all compiled plugins (below), or include individual files as needed -->

    <!-- Modernizer JS -->
    <script src="{{URL::asset('website/assets/vendors/modernizr/modernizr-2.6.2.min.js')}}"></script>
    
    <!-- Owl Carousel -->
    <script type="text/javascript" src="{{URL::asset('website/assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>

    <!-- FlexSlider -->
    <script type="text/javascript" src="{{URL::asset('website/assets/vendors/flexslider/jquery.flexslider-min.js')}}"></script>

    <!-- Coutdown -->
    <script type="text/javascript" src="{{URL::asset('assets/vendors/countdown/jquery.countdown.js')}}"></script>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Custom Template JavaScript                   -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <script type="text/javascript" src="{{URL::asset('website/assets/js/main.js')}}"></script>
</body>


<!-- Mirrored from friday-theme.firebaseapp.com/contact_us_01.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Apr 2017 09:36:41 GMT -->
</html>