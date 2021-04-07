@extends('layouts.frame')

@section('content')
    <!--Hero section starts-->
    <div class="hero-parallax  bg-fixed" style="background-image: url({{ asset('images/header/header_11.jpg') }})">
        <div class="overlay op-1"></div>
        <div class="container hero-kev">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-slider-item">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                                <div class="header-text v2">
                                    <h1>Nairobi City County </h1>
                                    <span>NCCG Draft Valuation Roll Inspection Online</span>

                                    <p>The purpose of this platform is to enable a ratable owner with property
                                        within the boundaries of Nairobi County to inspect and if necessary object
                                        to the Draft Valuation Roll.
                                        The ratable owner is required within 28 days to raise an objection from the
                                        date of the publication of the notice. </p>
                                    <br>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-5 offset-lg-1 col-md-12">
                                <div class="hero-slider-info">
                                    <form action="{{ route('authenticate') }}" method="POST"
                                        class="login-form bg-white w-100 filter hero__form v3 listing-filter">
                                        @csrf
                                        @if (Session::has('success'))
                                            <p class="alert alert-success">{{ Session::get('success') }}</p>
                                        @endif
                                        @if (Session::has('errors'))
                                            <p class="alert alert-danger">{{ Session::get('errors') }}</p>
                                        @endif
                                        <div class="login-form-header p-1">
                                            <h2 class="mb-2">Login Form</h2>
                                            <small>Fill in the information below to get access to the</small>
                                            <p class="mb-0 text-b font-weight-light text-capitalize font-12px">
                                                NCCG Draft Valuation Roll Portal</p>
                                        </div>
                                        <div class="form-group">
                                            <label>
                                                <strong>Email</strong> <strong class="text-danger">*</strong>
                                            </label>
                                            {{-- <input name="user_name" value="{{old('user_name')}}" type="email" class="form-control" placeholder="Enter your email address" required> --}}
                                            <div class="input-email-login">
                                                <input name="email" type="email" class="form-control"
                                                    placeholder="Enter your email address"
                                                    required>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label>
                                                <strong>Password</strong> <strong class="text-danger">*</strong>
                                            </label>
                                            {{-- <input name="password" type="password" value="{{old('password')}}" class="form-control" placeholder="Enter your password" required> --}}
                                            <div class="input-pass-login">
                                                <input name="password" type="password" class="form-control"
                                                    placeholder="Enter your password" required>
                                            </div>
                                        </div>
                                        <button type="submit"
                                            class="btn btn-primary block center btn-block mb-3 py-2 btn-control">Proceed <i
                                                class="ti-arrow-right ml-2"></i></button>

                                        <div class="res-box col-12 text-center">
                                            <a href="#" data-toggle="modal" data-target="#user-registration-popup" tabindex="
                                                                                    5">Don't Have an Account?</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Hero section ends-->

    <!--stake holders-->
    <div class="partner-section style1 pb-130 pt-90 ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title v1">
                        <h2>Stake holders</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="swiper-container partner-wrap">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide single-partner">
                                <img src="{{ asset('images/nairobi-county.png') }}" alt="...">
                            </div>
                            <div class="swiper-slide single-partner">
                                <img src="{{ asset('images/nms.png') }}" alt="...">
                            </div>
                            <div class="swiper-slide single-partner">
                                <img src="{{ asset('images/kra.png') }}" alt="...">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--stake holders section-->

    <!--Contact info starts -->
    <div class="contact-info section-padding bg-cb">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <h4>City hall</h4>
                        <p>
                            Nairobi City Hall, City Hall Way, Nairobi, Kenya
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-item">
                        <i class="fas fa-phone-alt"></i>
                        <h4>Phone</h4>
                        <p> +254 725 624 489</p>
                        <p>+254 738 041 292</p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-item">
                        <i class="fas fa-envelope"></i>
                        <h4>Email</h4>
                        <p>info@nairobi.go.ke</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Contact info ends -->
    <!--Contact section starts-->
    <div class="contact-section v1 mt-50 ">
        <div class="container col-12">
            <div class="contact-map v1">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8124709525237!2d36.81964295044497!3d-1.2865796359850543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10d76d89ebe5%3A0xafd849404a05edf9!2sNairobi%20City%20Council!5e0!3m2!1sen!2ske!4v1616980628896!5m2!1sen!2ske"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="row">
                <div class="col-lg-5 offset-lg-6 col-md-12">
                    <div class="section-title v2">
                        <h2>Write to us</h2>
                    </div>
                    <form action="http://demo.lion-coders.com/html/sarchholm-real-estate-template/php/send_mail.php"
                        method="post" id="contact_form">
                        <div class="form-control-wrap">
                            <div id="message" class="alert alert-danger alert-dismissible fade"></div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="fname" placeholder="Name*" name="fname">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email_address" placeholder="email*"
                                    name="email">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="8" name="comment" id="comment"
                                    placeholder="Your Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn v7">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Contact section ends-->

    <!--login Modal starts-->
    <div class="modal fade" id="user-registration-popup">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i
                                class="lnr lnr-cross"></i></span></button>
                </div>
                <div class="modal-body">
                    <!--User Login section starts-->
                    <div class="user-login-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="login-form-header p-1">
                                        <h2 class="mb-2">Registration Form</h2>
                                        <small>Fill in the information below to get access to the</small>
                                        <p class="mb-0 text-b font-weight-light text-capitalize font-12px">
                                            NCCG Draft Valuation Roll Portal</p>
                                    </div>
                                    <div class="login-wrapper">
                                        <div class="ui-dash tab-content">
                                            <div class="tab-pane fade show active" id="login" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <form id="register-form" action="{{ route('registration') }}"
                                                            method="POST" class="bg-white w-100 filter v3 listing-filter">
                                                            @csrf
                                                            @if (Session::has('success'))
                                                                <p class="alert alert-success">
                                                                    {{ Session::get('success') }}</p>
                                                            @endif
                                                            @if (Session::has('errors'))
                                                                <p class="alert alert-danger">{{ Session::get('errors') }}
                                                                </p>
                                                            @endif
                                                            <div class="row">
                                                                <div class="col-lg-6 col-sm-12">
                                                                    <div class="form-group">
                                                                        <label>
                                                                            <strong>First Name</strong> <strong
                                                                                class="text-danger">*</strong>
                                                                        </label>
                                                                        <div class="input-email-login">
                                                                            <input name="first_name" type="name"
                                                                                class="form-control"
                                                                                placeholder="Enter your first name"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-sm-12">
                                                                    <div class="form-group">
                                                                        <label>
                                                                            <strong>Last Name</strong> <strong
                                                                                class="text-danger">*</strong>
                                                                        </label>
                                                                        <div class="input-email-login">
                                                                            <input name="last_name" type="name"
                                                                                class="form-control"
                                                                                placeholder="Enter your last name" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>
                                                                    <strong>Email</strong> <strong
                                                                        class="text-danger">*</strong>
                                                                </label>
                                                                <div class="input-email-login">
                                                                    <input name="email" type="email" class="form-control"
                                                                        placeholder="Enter your email address" required>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>
                                                                    <strong>Mobile Number</strong> <strong
                                                                        class="text-danger">*</strong>
                                                                </label>
                                                                <div class="input-pass-login">
                                                                    <input name="phone" type="number" class="form-control"
                                                                        placeholder="Enter your mobile number" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>
                                                                    <strong>Idenitification Number</strong> <strong
                                                                        class="text-danger">*</strong>
                                                                </label>
                                                                <div class="input-pass-login">
                                                                    <input name="identification_no" type="number"
                                                                        class="form-control"
                                                                        placeholder="Enter your id number" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>
                                                                    <strong>Password</strong> <strong
                                                                        class="text-danger">*</strong>
                                                                </label>
                                                                <div class="input-pass-login">
                                                                    <input name="password" type="password"
                                                                        class="form-control"
                                                                        placeholder="Enter your password" required>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>
                                                                    <strong>Confirm Password</strong> <strong
                                                                        class="text-danger">*</strong>
                                                                </label>
                                                                <div class="input-pass-login">
                                                                    <input name="password_confirmation" type="password"
                                                                        class="form-control"
                                                                        placeholder="Enter your password Again" required>
                                                                </div>
                                                            </div>
                                                            <div class="res-box text-center mt-30">
                                                                <button type="submit" class="btn v8"><span
                                                                        class="lnr lnr-exit"></span>Register</button>
                                                            </div>

                                                            <div class="res-box col-12 mt-2 text-center">
                                                                <a href="#" data-dismiss="modal" tabindex="5"
                                                                    class="forgot-password">Already Have an
                                                                    Account?</a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--User login section ends-->
                </div>
            </div>
        </div>
    </div>
    <!--login Modal ends-->
@endsection
