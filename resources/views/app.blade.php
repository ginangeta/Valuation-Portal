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
                            <div class="col-xl-7 col-lg-7 col-md-12 col-12">
                                <div class="header-text v2">
                                    <h1>Online Inspection Of The Draft Valuation Roll</h1>

                                    <p class="mb-3">The Nairobi City County Government has updated its valuation roll and is
                                        now inviting
                                        all ratable property owners to inspect the roll. While the roll is available at City
                                        Hall for inspection by the public, an online platform has been provided to allow
                                        owners who cannot make it to City Hall to inspect it.</p>
                                    <br>

                                    <p class="mb-3"> As per the provisions of the Valuation for Rating Act, CAP 266 Laws of
                                        Kenya,
                                        ratable owners will be able to submit objections to the valuation roll, and provide
                                        reasons for such objections. Each objection will be evaluated by the Valuations
                                        Department of the county government on payment of KES 500 as provided in the Act.
                                    </p>

                                    <br>

                                    <p class="mb-3">A notice has been issued by the Nairobi City County Government for
                                        ratable owners to
                                        inspect the valuation roll and submit their comments, queries or objections. Ratable
                                        owners will be required to submit their objections within 28 days from the date of
                                        the publication of the notice. </p>
                                    <br>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 offset-lg-1 col-md-12">
                                <div class="hero-slider-info bg-white login-form">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item login-nav-link">
                                            <a class="nav-link active" aria-current="page" href="#">Login</a>
                                        </li>
                                        <li class="nav-item login-nav-link">
                                            <a class="nav-link" href="#" data-toggle="modal"
                                                data-target="#user-registration-popup" tabindex="5">Register</a>
                                        </li>
                                    </ul>

                                    <form action="{{ route('authenticate') }}" method="POST"
                                        class="w-100 filter hero__form v3 listing-filter">
                                        @csrf
                                        @if (Session::has('success'))
                                            <p class="alert alert-success">{{ Session::get('success') }}</p>
                                        @endif
                                        @if (Session::has('errors'))
                                            <p class="alert alert-danger">{{ Session::get('errors') }}</p>
                                        @endif
                                        <div class="login-form-header p-1">
                                            <h2 class="mb-2">Login Form</h2>
                                            <small>Fill in the information below to get access</small>
                                        </div>

                                        <div class="form-group">
                                            <label>
                                                <strong>Email</strong> <strong class="text-danger">*</strong>
                                            </label>
                                            {{-- <input name="user_name" value="{{old('user_name')}}" type="email" class="form-control" placeholder="Enter your email address" required> --}}
                                            <div class="input-email-login">
                                                <input name="email" type="email" class="form-control"
                                                    placeholder="Enter your email address" required>
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
                                            <a href="#" data-toggle="modal" data-target="#user-forgot-password"
                                                tabindex="5">Forgot your password?</a>
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
    <div class="partner-section style1 bg-cb pb-90 pt-90 ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title v1">
                        <h2>Stakeholders</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row stakeholders">
                        <div class="col-sm-12 col-lg-4 d-flex align-items-center justify-content-center">
                            <img src="{{ asset('images/nms.png') }}" alt="...">
                        </div>
                        <div class="col-sm-12 col-lg-4 d-flex align-items-center justify-content-center">
                            <img src="{{ asset('images/nairobi-county.png') }}" alt="...">
                        </div>
                        <div class="col-sm-12 col-lg-4 d-flex align-items-center justify-content-center">
                            <img src="{{ asset('images/kra.png') }}" alt="...">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--stake holders section-->

    <!--Contact section starts-->
    <div class="contact-section v1 mt-50 " id="Contact">
        <div class="row w-100">
            <div class="contact-map v1 col-sm-12 col-lg-7">
                <div class="section-title v2">
                    <h2>Our Location</h2>
                </div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8124709525237!2d36.81964295044497!3d-1.2865796359850543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10d76d89ebe5%3A0xafd849404a05edf9!2sNairobi%20City%20Council!5e0!3m2!1sen!2ske!4v1616980628896!5m2!1sen!2ske"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

                <div class="col-sm-12 col-lg-5">
                    <div class="section-title v2">
                        <h2>Write to us</h2>
                    </div>
                    <form action="{{ route('sendMail') }}"  method="POST" class="bg-white w-100 filter v3 listing-filter">
                        @csrf
                        <div class="form-control-wrap">
                            <div id="message" class="alert alert-danger alert-dismissible fade d-none"></div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="fname" name="Mail_Name" placeholder="Name*">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email_address" name="Mail_Email"
                                    placeholder="Email*">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="Mail_Subject" name="Mail_Subject"
                                    placeholder="Subject*">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="8" name="Mail_Comment" id="comment"
                                    placeholder="Your Message"></textarea>
                            </div>
                            <div class="text-center mt-30">
                                <button type="submit" class="btn btn-primary">
                                    <span class="lnr lnr-envelope mr-2"></span>Send Email</button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
    <!--Contact section ends-->

    <!--login Modal starts-->
    <div class="modal fade" id="user-registration-popup">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <!--User Login section starts-->
                    <div class="user-login-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="login-form-header p-1">
                                        <h2 class="mb-2">Registration Form</h2>
                                        <small>Fill in the information below to create an account</small>
                                        <button type="button" class="close modal-close" data-dismiss="modal"
                                            aria-label="Close"><span aria-hidden="true"><i
                                                    class="lnr lnr-cross"></i></span></button>

                                    </div>

                                    <div class="login-wrapper">
                                        <div class="ui-dash tab-content">
                                            <div class="tab-pane fade show active" id="login" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <form id="register-form" action="{{ route('registration') }}"
                                                            method="POST" class="bg-white w-100 filter v3 listing-filter">
                                                            @csrf
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

    <!--Forgot Password starts-->
    <div class="modal fade" id="user-forgot-password">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <!--User Login section starts-->
                    <div class="user-login-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="{{ route('password.reset') }}" enctype="application/x-www-form-urlencoded" id="reset_password" method="POST">
                                        @csrf
                                        <div class="login-form-header p-1">
                                            <h2 class="mb-2">Forgot Password</h2>
                                            <small>Fill in the information below to reset password</small>
                                            <button type="button" class="close modal-close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true"><i
                                                        class="lnr lnr-cross"></i></span></button>
                                        </div>

                                        <div class="form-group">
                                            <label>
                                                <strong>Email</strong> <strong class="text-danger">*</strong>
                                            </label>
                                            <input name="Forgot_email" type="email" class="form-control"
                                                placeholder="Enter your email address" required>
                                        </div>


                                        <div class="form-group">
                                            <input type="submit"
                                                class="btn btn-primary block center btn-block mb-3 py-2 btn-control"
                                                value="Reset">
                                        </div>

                                        <div class="form-group">
                                            <a href="#" data-dismiss="modal">Go back to login page</a>
                                        </div>
                                    </form>

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

@section('scripts')
@endsection
