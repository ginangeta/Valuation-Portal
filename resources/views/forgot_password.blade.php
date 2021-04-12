<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<!-- Mirrored from byrushan.com/projects/material-admin/app/2.6/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jul 2019 11:34:03 GMT -->
<head>
    <!-- Metas -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
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
    <link href="{{ asset('../public/icons/font/flaticon.css') }}" rel="stylesheet" />
    <!-- ZMDI -->
    <link rel="stylesheet"
        href="{{ asset('vendors/material-design-iconic-font/css/material-design-iconic-font.min.css') }}">


    <!-- Document Title -->
    <title>NCCG - Online Valuation Roll Inspection</title>
</head>

<body data-ma-theme="green">
    <main class="main">
        <div class="page-loader">
            <div class="page-loader__spinner">
                <svg viewBox="25 25 50 50">
                    <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                </svg>
            </div>
            <span class="powerd-container">
                <strong>A product of</strong>
                <img src="demo/img/logo-files/nouveta_logo.png">
            </span>
        </div>

        <section>
            <div class="login-content col-12">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center pr-2">
                        <span class="login-img-container">
                            <img src="demo/img/gallery/login-image.svg">
                        </span>
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-6">

                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Older IE warning message -->
    <!--[if IE]>
                    <div class="ie-warning">
                        <h1>Warning!!</h1>
                        <p>You are using an outdated version of Internet Explorer, please upgrade to any of the following web browsers to access this website.</p>
    
                        <div class="ie-warning__downloads">
                            <a href="http://www.google.com/chrome">
                                <img src="img/browsers/chrome.png" alt="">
                            </a>
    
                            <a href="https://www.mozilla.org/en-US/firefox/new">
                                <img src="img/browsers/firefox.png" alt="">
                            </a>
    
                            <a href="http://www.opera.com">
                                <img src="img/browsers/opera.png" alt="">
                            </a>
    
                            <a href="https://support.apple.com/downloads/safari">
                                <img src="img/browsers/safari.png" alt="">
                            </a>
    
                            <a href="https://www.microsoft.com/en-us/windows/microsoft-edge">
                                <img src="img/browsers/edge.png" alt="">
                            </a>
    
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                <img src="img/browsers/ie.png" alt="">
                            </a>
                        </div>
                        <p>Sorry for the inconvenience!</p>
                    </div>
                <![endif]-->

    <!-- Javascript -->
    <!-- Vendors -->
    <!--Scripts starts-->
    <!--plugin js-->
    <script src="{{ asset('js/plugin.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!--Moment Script-->
    <script src="{{ asset('vendors/moment/moment.min.js') }}"></script>

    <!--Main js-->
    <script src="{{ asset('js/main.js') }}"></script>


</body>

<!-- Mirrored from byrushan.com/projects/material-admin/app/2.6/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jul 2019 11:34:43 GMT -->

</html>
