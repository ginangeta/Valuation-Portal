<!DOCTYPE html>
<html dir="ltr" lang="en-US">


<!-- Mirrored from demo.lion-coders.com/html/sarchholm-real-estate-template/home-v4.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jan 2021 15:05:57 GMT -->

<head>
    <!-- Metas -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="LionCoders" />
    <!-- Links -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo-white.png') }}" />
    <!-- google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
    <!-- Plugins CSS -->
    <link href="{{ asset('css/plugin.css') }}" rel="stylesheet" />
    <!-- style CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <!-- FlatIcon -->
    <link href="{{ asset('icons/font/flaticon.css')}}" rel="stylesheet" />

    <!-- Document Title -->
    <title>NCCG Draft Valuation</title>
</head>

<body>
    <!--Preloader starts-->
    <div class="preloader js-preloader">
        <img src="images/preloader.gif" alt="...">
    </div>
    <!--Preloader ends-->
    <!--Page Wrapper starts-->
    <div class="page-wrapper">
        <!--header starts-->
        <header class="header transparent scroll-hide">
            <!--Main Menu starts-->
            <div class="site-navbar-wrap v1">
                <div class="container">
                    <div class="site-navbar">
                        <div class="row align-items-center">
                            <div
                                class="col-lg-4 col-md-6 col-9 order-2 order-xl-4 order-lg-1 order-md-1 d-flex align-items-center h-100">
                                <a class="navbar-brand mr-3 mb-0" href="index.html"><img src="images/logo-white.png"
                                        alt="logo" class="img-fluid"></a>
                                <div class="logo-text">
                                    <h4 class="text-white m-0 p-0 text-nowrap">NCCG Draft Valuation</h4>
                                    <p class="text-white text-nowrap">Nairobi City Council</p>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-1 col-3  order-3 order-xl-8 order-lg-2 order-md-3 pl-xs-0">
                                <nav class="site-navigation text-right">
                                    <div class="container">
                                        <ul class="site-menu js-clone-nav d-none d-lg-block">
                                            <li class="">
                                                <a href="index.html">Home</a>
                                            </li>
                                            <li class="">
                                                <a href="#">Contacts</a>
                                            </li>
                                            <li class="">
                                                <a href="{{ route('logout') }}">Logout</a>
                                            </li>


                                        </ul>
                                    </div>
                                </nav>
                                <div class="d-lg-none sm-right">
                                    <a href="#" class="mobile-bar js-menu-toggle">
                                        <span class="lnr lnr-menu"></span>
                                    </a>
                                </div>
                                <!--mobile-menu starts -->
                                <div class="site-mobile-menu">
                                    <div class="site-mobile-menu-header">
                                        <div class="site-mobile-menu-close  js-menu-toggle">
                                            <span class="lnr lnr-cross"></span>
                                        </div>
                                    </div>
                                    <div class="site-mobile-menu-body"></div>
                                </div>
                                <!--mobile-menu ends-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Main Menu ends-->
        </header>
        <!--Header ends-->

        @yield('content');

        <!-- Scroll to top starts-->
        <span class="scrolltotop"><i class="lnr lnr-arrow-up"></i></span>
        <!-- Scroll to top ends-->
    </div>
    <!--Page Wrapper ends-->


    <!--Footer Starts-->
    <div class="footer-wrapper v1">

        <div class="footer-top-area">
            <div class="container">
                <div class="row nav-folderized">
                    <div class="col-lg-4 col-md-12">
                        <div class="footer-logo">
                            <!-- <a href="index.html"> <img src="images/logo-blue.png" alt="logo"></a> -->
                            <div class="d-flex">
                                <a class="navbar-brand mr-3 mb-0" href="index.html"><img src="images/logo-white.png"
                                        alt="logo" class="img-fluid"></a>
                                <div class="logo-text mt-2">
                                    <h4 class="text-black m-0 p-0 text-nowrap">NCCG Draft Valuation Roll</h4>
                                    <p class="text-black text-nowrap">Nairobi City County Government</p>
                                </div>
                            </div>
                            <div class="company-desc">
                                <p>
                                    The ratable owner is required within 28 days to raise an objection from the date of
                                    the publication of the notice.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 text-center sm-left">
                        <div class="footer-content nav">
                            <h2 class="title">Popular Searches</h2>
                            <ul class="list res-list">
                                <li><a class="link-hov style2" href="https://nairobi.go.ke/" target="new">Nairobi county
                                        website</a></li>
                                <!-- <li><a class="link-hov style2" href="#" target="new">Nairobi ePayments</a></li> -->
                                <li><a class="link-hov style2" href="#" target="new">The land act</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="footer-content">
                            <h2 class="title">Contact</h2>
                            <ul class="list footer-list mt-20">
                                <li>
                                    <div class="contact-info">
                                        <div class="icon">
                                            <i class="fa fa-map-marker-alt"></i>
                                        </div>
                                        <div class="text"> Nairobi City Hall, City Hall Way, Nairobi, Kenya</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-info">
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="text"><a href="#">info@nairobi.go.ke</a></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-info">
                                        <div class="icon">
                                            <i class="fas fa-phone-alt"></i>
                                        </div>
                                        <div class="text">+254 725 624 489 /+254 738 041 292</div>
                                    </div>
                                </li>
                            </ul>
                            <div class="footer-social-wrap">
                                <p>Follow us on </p>
                                <ul class="social-buttons style2">
                                    <li><a href="https://www.facebook.com/NRBCounty047" target="new"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://twitter.com/nairobicitygov?lang=en" target="new"><i
                                                class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" class="d-none"><i class="fab fa-linkedin"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8 offset-md-2">
                        <p>
                            © Powered by Nouveta LTD. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer ends-->

    <!--Scripts starts-->
    <!--plugin js-->
    <script src="{{ asset('js/plugin.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!--google maps-->
    {{-- <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_8C7p0Ws2gUu7wo0b6pK9Qu7LuzX2iWY&amp;libraries=places&amp;callback=initAutocomplete">
    </script> --}}

    <!--Moment Script-->
    <script src="{{ asset('vendors/moment/moment.min.js') }}"></script>

    <!--Main js-->
    <script src="js/main.js"></script>
    @yield('scripts')
    <!--Scripts ends-->
</body>


<!-- Mirrored from demo.lion-coders.com/html/sarchholm-real-estate-template/home-v4.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jan 2021 15:08:47 GMT -->

</html>
