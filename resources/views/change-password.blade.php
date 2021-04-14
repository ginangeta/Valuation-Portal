<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from byrushan.com/projects/material-admin/app/2.6/top-navigation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jul 2019 11:35:00 GMT -->

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
    <link href="{{ asset('icons/font/flaticon.css') }}" rel="stylesheet" />
    <!-- ZMDI -->
    <link rel="stylesheet"
        href="{{ asset('vendors/material-design-iconic-font/css/material-design-iconic-font.min.css') }}">


    <!-- Document Title -->
    <title>NCCG - Online Valuation Roll Inspection</title>
</head>

<body data-ma-theme="green">
    <main class="main main--alt">
        <!--Preloader starts-->
        <div class="preloader js-preloader">
            <img src="images/preloader.gif" alt="...">
        </div>
        <!--Preloader ends-->

        <!--Page Wrapper starts-->
        <div class="page-wrapper">

            <div class="login-content fluid-container ">
                <div class="login-content-overlay op-1"></div>
                <div class="d-flex flex-column login-form-container">
                    <form id="reset_form" action="{{ route('password.change') }}" method="POST"
                    class="w-100 filter hero__form v3 listing-filter">
                    @csrf
                        @if (Session::has('success'))
                            <p class="alert alert-success">
                                {{ Session::get('success') }}</p>
                        @endif
                        @if (Session::has('errors'))
                            <p class="alert alert-danger">{{ Session::get('errors') }}
                            </p>
                        @endif
                        <div class="login-form-header p-1">
                            <h2 class="mb-2">Reset Password</h2>
                            <small>Fill in the information below to get access</small>
                        </div>
                        <div class="form-group">
                            <label>
                                <strong>Email</strong> <strong class="text-danger">*</strong>
                            </label>
                            {{-- <input name="user_name" value="{{old('user_name')}}" type="email" class="form-control" placeholder="Enter your email address" required> --}}
                            <div class="input-email-login">
                                <input name="Reset_email" type="email" class="form-control"
                                    placeholder="Enter your email address" required>
                            </div>

                        </div>

                        <div class="form-group">
                            <label>
                                <strong>Sent Password</strong> <strong class="text-danger">*</strong>
                            </label>
                            {{-- <input name="user_name" value="{{old('user_name')}}" type="email" class="form-control" placeholder="Enter your email address" required> --}}
                            <div class="input-pass-login">
                                <input name="Sent_password" type="password" class="form-control"
                                    placeholder="Enter the password sent to your email" required>
                            </div>

                        </div>

                        <div class="form-group">
                            <label>
                                <strong>New Password</strong> <strong class="text-danger">*</strong>
                            </label>
                            {{-- <input name="user_name" value="{{old('user_name')}}" type="email" class="form-control" placeholder="Enter your email address" required> --}}
                            <div class="input-pass-login">
                                <input name="Reset_password" type="password" class="form-control"
                                    placeholder="Enter your email address" required>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary block center btn-block mb-3 py-2 btn-control">Reset
                            <i class="ti-arrow-right ml-2"></i></button>
                    </form>

                    <p class="text-center mt-4 d-none"> Powered by <strong><a href="https://nouveta.tech/"
                                target="new">Nouveta
                                LTD</a></strong></p>

                </div>
            </div>
        </div>

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
    <!-- ../'vendors -->

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
    <script src="{{ asset('js/main.js') }}"></script>



</body>

<!-- Mirrored from byrushan.com/projects/material-admin/app/2.6/top-navigation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jul 2019 11:35:00 GMT -->

</html>
