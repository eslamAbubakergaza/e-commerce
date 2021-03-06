<?php include 'header.blade.php'; ?>

        <!-- –––––––––––––––[ HEADER ]––––––––––––––– -->

        <!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
        <main id="mainContent" class="main-content">
            <!-- Page Container -->
            <div class="page-container ptb-60">
                <div class="container">
                    <div class="row row-rl-10 row-tb-20">
                        <div class="page-content col-xs-12 col-sm-8 col-md-9">

                            <!-- Checkout Area -->
                            <section class="section checkout-area panel prl-30 pt-20 pb-40">
                                <h2 class="h2 mb-20 h-title">Billing Information</h2>
                                <form class="mb-30">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" placeholder="Enter you First Name">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Second Name</label>
                                                <input type="text" class="form-control" placeholder="Enter your Second Name">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <select class="form-control">
                                                    <option>Select country</option>
                                                    <option>England</option>
                                                    <option>Germany</option>
                                                    <option>France</option>
                                                    <option>Spain</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>City / Town</label>
                                                <select class="form-control">
                                                    <option>Select city</option>
                                                    <option>New York</option>
                                                    <option>Paris</option>
                                                    <option>Nairobi</option>
                                                    <option>Cairo</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone Number</label>
                                                <input type="text" class="form-control" placeholder="(XXX) - XXXX - XXX">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Postal Code</label>
                                                <input type="text" class="form-control" placeholder="Enter Postal Code">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label>Address Line 1</label>
                                        <input type="text" class="form-control" placeholder="Enter your Address">
                                    </div>

                                    <div class="form-group">
                                        <label>Address Line 2 <span class="color-mid">(Optional)</span>
                                        </label>
                                        <input type="text" class="form-control" placeholder="Enter your Address">
                                    </div>
                                </form>
                                <a href="checkout_payment.php" class="btn btn-lg btn-rounded mr-10">Continue</a>
                                <a href="cart.php" class="btn btn-lg btn-warning btn-rounded">Cancel Order</a>
                            </section>
                            <!-- End Checkout Area -->

                        </div>
                        <div class="page-sidebar col-xs-12 col-sm-4 col-md-3">

                            <!-- Blog Sidebar -->
                            <aside class="sidebar blog-sidebar">
                                <div class="row row-tb-10">
                                    <div class="col-xs-12">
                                        <!-- Recent Posts -->
                                        <div class="widget checkout-widget panel p-20">
                                            <div class="widget-body">
                                                <table class="table mb-15">
                                                    <tbody>
                                                        <tr>
                                                            <td class="color-mid">Total products</td>
                                                            <td>$150.16</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-mid">Shipping</td>
                                                            <td>$60.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="color-mid">Total tax</td>
                                                            <td>$10.00</td>
                                                        </tr>
                                                        <tr class="font-15">
                                                            <td class="color-mid">Total</td>
                                                            <td class="color-green">$220.16</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="cart.php" class="btn btn-info btn-block btn-sm">Edit Cart</a>
                                            </div>
                                        </div>
                                        <!-- End Recent Posts -->
                                    </div>
                                </div>
                            </aside>
                            <!-- End Blog Sidebar -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Page Container -->


        </main>
        <!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->
       <?php include 'footer.blade.php'; ?>

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
    <script src="assets/js/jquery-1.12.3.min.js"></script>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Latest compiled and minified Bootstrap    -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- JavaScript Plugins                        -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- (!) Include all compiled plugins (below), or include individual files as needed -->

    <!-- Modernizer JS -->
    <script src="assets/vendors/modernizr/modernizr-2.6.2.min.js"></script>
    
    <!-- Owl Carousel -->
    <script type="text/javascript" src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>

    <!-- FlexSlider -->
    <script type="text/javascript" src="assets/vendors/flexslider/jquery.flexslider-min.js"></script>

    <!-- Coutdown -->
    <script type="text/javascript" src="assets/vendors/countdown/jquery.countdown.js"></script>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Custom Template JavaScript                   -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <script type="text/javascript" src="assets/js/main.js"></script>
</body>


<!-- Mirrored from friday-theme.firebaseapp.com/checkout_billing.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Apr 2017 09:36:47 GMT -->
</html>