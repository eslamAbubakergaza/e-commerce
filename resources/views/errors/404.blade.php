
@include('website.header')

        <!-- –––––––––––––––[ HEADER ]––––––––––––––– -->

        <!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
        <main id="mainContent" class="main-content">
            <div class="page-container pt-40 pb-60">
                <div class="container">
                    <section class="error-page-area">
                        <div class="container">
                            <div class="error-page-wrapper t-center">
                                <div class="error-page-header">
                                    <span class="color-blue">4</span>
                                    <span class="color-green">0</span>
                                    <span class="color-blue">4</span>
                                </div>
                                <div class="error-page-footer">
                                    <h5 class="color-mid mb-5">Oops !</h5>
                                    <h2 class="t-uppercase m-10 color-green">Sorry</h2>
                                    <p class="color-muted mb-30 font-15">
                                        The Page you are looking for cannot be found!
                                    </p>
                                </div>
                                <a href="index.php" class="btn btn-rounded">Back to home page</a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>


        </main>
        <!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->
        <section class="footer-top-area pt-70 pb-30 pos-r bg-blue">
            <div class="container">
                <div class="row row-tb-20">
                    <div class="col-sm-12 col-md-7">
                        <div class="row row-tb-20">
                            <div class="footer-col col-sm-6">
                                <div class="footer-about">
                                    <img class="mb-40" src="{{URL::asset('website/assets/images/logo_light.png')}}" width="250" alt="">
                                    <p class="color-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam dolores quidem mollitia id ipsa nisi necessitatibus iure repudiandae aperiam, odit ipsam dolor fugiat corporis nesciunt illo nemo minus.</p>
                                </div>
                            </div>
                            <div class="footer-col col-sm-6">
                                <div class="footer-top-twitter">
                                    <h2 class="color-lighter">Twitter Feed</h2>
                                    <ul class="twitter-list">
                                        <li class="single-twitter">
                                            <p class="color-light"><i class="ico fa fa-twitter"></i><a href="#">@masum_rana :</a> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore in reprehenderit.</p>
                                        </li>
                                        <li class="single-twitter">
                                            <p class="color-light"><i class="ico fa fa-twitter"></i><a href="#">@masum_rana :</a> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione id corrupti iusto cupiditate omnis.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-5">
                        <div class="row row-tb-20">
                            <div class="footer-col col-sm-6">
                                <div class="footer-links">
                                    <h2 class="color-lighter">Quick Links</h2>
                                    <ul>
                                        <li><a href="deals_grid.php">Latest Deals</a>
                                        </li>
                                        <li><a href="coupons_grid.php">Newest Coupons</a>
                                        </li>
                                        <li><a href="contact_us_02.php">Contact Us</a>
                                        </li>
                                        <li><a href="404.blade.php">Error 404</a>
                                        </li>
                                        <li><a href="terms_conditions.php">Terms of Use</a>
                                        </li>
                                        <li><a href="/faq">FAQs</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-col col-sm-6">
                                <div class="footer-top-instagram instagram-widget">
                                    <h2>Instagram Widget</h2>
                                    <div class="row row-tb-5 row-rl-5">


                                        <div class="instagram-widget__item col-xs-4">
                                            <img src="{{URL::asset('website/assets/images/instagram/instagram_01.jpg')}}" alt="">
                                        </div>


                                        <div class="instagram-widget__item col-xs-4">
                                            <img src="{{URL::asset('website/assets/images/instagram/instagram_02.jpg')}}" alt="">
                                        </div>


                                        <div class="instagram-widget__item col-xs-4">
                                            <img src="{{URL::asset('website/assets/images/instagram/instagram_03.jpg')}}" alt="">
                                        </div>


                                        <div class="instagram-widget__item col-xs-4">
                                            <img src="{{URL::asset('website/assets/images/instagram/instagram_04.jpg')}}" alt="">
                                        </div>


                                        <div class="instagram-widget__item col-xs-4">
                                            <img src="{{URL::asset('website/assets/images/instagram/instagram_05.jpg')}}" alt="">
                                        </div>


                                        <div class="instagram-widget__item col-xs-4">
                                            <img src="{{URL::asset('website/assets/images/instagram/instagram_06.jpg')}}" alt="">
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="payment-methods t-center">
                            <span><img src="{{URL::asset('website/assets/images/icons/payment/paypal.jpg')}}" alt=""></span>
                            <span><img src="{{URL::asset('website/assets/images/icons/payment/visa.jpg')}}" alt=""></span>
                            <span><img src="{{URL::asset('website/assets/images/icons/payment/mastercard.jpg')}}" alt=""></span>
                            <span><img src="{{URL::asset('website/assets/images/icons/payment/discover.jpg')}}" alt=""></span>
                            <span><img src="{{URL::asset('website/assets/images/icons/payment/american.jpg')}}" alt=""></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- –––––––––––––––[ FOOTER ]––––––––––––––– -->
        <footer id="mainFooter" class="main-footer">
            <div class="container">
                <div class="row">
                    <p>Copyright &copy; 2016 . All rights reserved.</p>
                </div>
            </div>
        </footer>
        <!-- –––––––––––––––[ END FOOTER ]––––––––––––––– -->

    </div>
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- END WRAPPER                               -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->

    <!-- ========== BUY THEME ========== -->
    <a href="https://google.com" class="buy-theme" data-href="https://themeforest.net/item/friday-coupons-deals-discounts-promo-codes-template/19577226?ref=CODASTROID" target="_blank" id="buy_theme">
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
    <script type="text/javascript" src="{{URL::asset('website/assets/vendors/countdown/jquery.countdown.js')}}"></script>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Custom Template JavaScript                   -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <script type="text/javascript" src="{{URL::asset('website/assets/js/main.js')}}"></script>
</body>

</html>