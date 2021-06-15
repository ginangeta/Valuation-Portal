@extends('layouts.frame')

@section('content')

    <!--Breadcrumb section starts-->
    <div class="breadcrumb-section bg-h"
        style="background-image: url({{ asset('images/breadcrumb/breadcrumb_1.jpg') }}); height: 280px;">
        <div class="overlay op-5"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="breadcrumb-menu">
                        <h2>Objection Application Form</h2>
                        <span><a href="{{ route('home') }}">Home</a></span>
                        <span><a href="{{ route('details') }}">Property details</a></span>
                        <span>Object USV</span>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb section ends-->
    <div class="property-details-wrap bg-pattern">

        <!--Listing Details Info starts-->
        <div class="single-property-details">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 construction-form">
                        <h2 class="site-heading text-black mb-5">Fill the <strong>Form</strong></h2>
                        <form id="notFoundObjectionForm" action="{{ route('sendNotFoundObjection') }}"
                            enctype="multipart/form-data" method="POST" class="p-5 bg-white permit-form">
                            @csrf
                            @if (Session::has('success'))
                                <p class="alert alert-success">
                                    {{ Session::get('success') }}</p>
                            @endif
                            @if (Session::has('errors'))
                                <p class="alert alert-danger">{{ Session::get('errors') }}
                                </p>
                            @endif
                            <div class="form-group row">
                                <div class="form-header">
                                    <div class="active">
                                        <span class="flaticon-commentator"></span>
                                        <h4>Objector Details</h4>
                                    </div>

                                    <div class="">
                                        <span class="flaticon-list-text"></span>
                                        <h4>Property Details</h4>
                                    </div>

                                    <div class="">
                                        <span class="flaticon-report"></span>
                                        <h4>Objection Summary</h4>
                                    </div>

                                </div>
                                <div>
                                    <fieldset class="animated fadeInLeft">
                                        <div class="fieldset-content">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h5 class="mb-0"><strong>Objector Details</strong></h5>
                                                    <p class="mb-2 mt-0">Fill in the fields below with the appropriate
                                                        information</p>
                                                    <hr class="mt-0 pt-0">
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>
                                                            Are you the ratable owner?
                                                        </label>
                                                        <div class="d-flex ">
                                                            <div class="form-inline">
                                                                <input id="check-yes" type="radio" checked
                                                                    name="ratable_owner">
                                                                <label for="check-yes">Yes</label>
                                                            </div>

                                                            <div class="form-inline ml-3">
                                                                <input id="check-no" type="radio" name="ratable_owner">
                                                                <label for="check-no">No</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-sm-12 ratable-owner">
                                                    <div class="form-group">
                                                        <label class="mb-0"><strong>Objector</strong></label>
                                                        <input type="text" name="fullname"
                                                            class="form-control filter-input mt-0"
                                                            placeholder="Enter your name in full" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-sm-12 non-ratable-owner d-none">
                                                    <div class="form-group">
                                                        <label class="mb-0"><strong>Relation</strong></label>
                                                        <input type="text" name="relation"
                                                            class="form-control filter-input mt-0"
                                                            placeholder="Enter relation to ratable owner">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="mb-0"><strong>Current Address</strong></label>
                                                        <input type="text" name="address"
                                                            class="form-control filter-input mt-0"
                                                            placeholder="Address of your current address" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="mb-0"><strong>Phone number</strong></label>
                                                        <input type="text" name="phone"
                                                            class="form-control filter-input mt-0"
                                                            placeholder="Enter your phone number" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="mb-0"><strong>Postal address</strong></label>
                                                        <input type="text" name="postal_address"
                                                            class="form-control filter-input mt-0"
                                                            placeholder="Enter your postal address" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="mb-0"><strong>Select town</strong></label>
                                                    <select name="town_id" id="" title="Please select your postal city"
                                                        class="form-control custom-select city" placeholder="Country"
                                                        required>
                                                        @foreach ($towns as $town)
                                                            <option value="{{ $town->id }}"
                                                                data-content="{{ $town->name }}">
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fieldset-footer">
                                            <div class="step-btns">
                                                <span class="btn btn-primary btn-next">Next step</span>
                                            </div>
                                            <span>Step 1 of 3</span>
                                        </div>
                                    </fieldset>

                                    <fieldset class="animated fadeInLeft d-none animated ">
                                        <div class="fieldset-content">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h5 class="mb-0"><strong>Property Details</strong></h5>
                                                    <hr class="mt-0 pt-0">
                                                </div>

                                                <div class="col-sm-12 col-md-8">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="mb-0"><strong>Title Number/Plot
                                                                        Number</strong></label>
                                                                <input type="text" name="lr_no"
                                                                    class="form-control filter-input mt-0"
                                                                    value="{{ $objectingProperty }}"
                                                                    placeholder="Enter property reference number" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label class="mb-0"><strong>Area in
                                                                        Hectares</strong>(Just the digits)</label>
                                                                <input type="text" name="approx_area"
                                                                    class="form-control filter-input approx_area mt-0"
                                                                    placeholder="Enter approximated area in ha" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label class="mb-0"><strong>Property
                                                                        Use</strong></label>
                                                                <select class="form-control custom-select city"
                                                                    data-live-search="true" name="land_use">
                                                                    @foreach ($landUse as $item)
                                                                        <option value="{{ $item->id }}">
                                                                            {{ $item->description }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-4 bg-gray">
                                                    <div class="file-uploads">
                                                        <label class="mb-0"><strong>Supporting
                                                                Documents</strong></label>
                                                        <p class="mb-2 mt-0">Attach Title Deed and Identification
                                                            Card.
                                                        </p>
                                                        <label class="input-file form-attach" for="ownership-docs">
                                                            <div class="id-container img-container">
                                                                <span>
                                                                    <img src="{{ asset('images/contract.svg') }}">
                                                                </span>
                                                                <h5>Objection Documents</h5>
                                                                <p><strong>.All file types</strong> are accepted</p>
                                                                <small class="text-danger"><strong>No file
                                                                        selected</strong></small>
                                                                <!-- national id input box -->
                                                                <input type="file" id="ownership-docs" multiple
                                                                    name="files[]" class="d-none">
                                                                <input type="text" name="files-former" class="d-none">

                                                            </div>
                                                        </label>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fieldset-footer">
                                            <div class="step-btns">
                                                <span class="btn btn-outline-primary btn-prev">Previous step</span>
                                                <span class="btn btn-primary btn-next btn-to-summary">Next step</span>
                                            </div>
                                            <span>Step 2 of 3</span>
                                        </div>
                                    </fieldset>

                                    <fieldset class="d-none animated summary-container fadeInLeft">
                                        <div class="fieldset-content">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h5 class="mb-0"><strong>Objection Summary</strong></h5>
                                                    <p class="mb-2 mt-0">Please ensure that the below information is correct
                                                        before submission.</p>
                                                    <hr class="mt-0 pt-0">
                                                </div>
                                                <div class="col-12">
                                                    <div class="other-information row">
                                                        <div class="col-sm-12 col-lg-4">
                                                            <h6><strong>Objector's Name</strong></h6>
                                                            <p class="objector-name"></p>
                                                            <h6><strong>Objector's Number</strong></h6>
                                                            <p class="objector-number"></p>
                                                        </div>

                                                        <div class="col-sm-12 col-lg-4">
                                                            <h6><strong>Objector's Physical Address</strong></h6>
                                                            <p class="objector-address"></p>

                                                            <h6><strong>Objector's Postal Address</strong></h6>
                                                            <p class="objector-postal-address"></p>s
                                                        </div>

                                                        <div class="col-sm-12 col-lg-4">
                                                            <h6><strong>Supporting Documents</strong></h6>
                                                            <ul class="supporting-documents"></ul>
                                                        </div>

                                                        <div class="col-sm-12 col-lg-4">
                                                            <h6><strong>Property's Reference Number</strong></h6>
                                                            <p class="objector-lrno"></p>
                                                        </div>

                                                        <div class="col-sm-12 col-lg-4">
                                                            <h6><strong>Area Approximation</strong></h6>
                                                            <p class="objector-area"></p>
                                                        </div>

                                                        <div class="col-sm-12 col-lg-4">
                                                            <h6><strong>Land Use</strong></h6>
                                                            <p class="objector-use"></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 total-cost">
                                                    <p><strong class="text-danger">* </strong> The Valuation for Rating Act,
                                                        Cap
                                                        266 (section 10) prescribes a charge of KES 500 for each objection
                                                        to
                                                        the draft valuation roll.</p>
                                                    <h6 class="text-left"><strong>Total Objection Cost</strong></h6>
                                                    <h3 class="text-left text-success objection-cost"></h3>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="fieldset-footer">
                                            <div class="step-btns">
                                                <span class="btn btn-outline-primary btn-prev btn-objection-prev">Previous
                                                    step</span>
                                                <button type="submit" id="btn-submit-objection"
                                                    class="btn btn-primary">Pay</button>
                                            </div>
                                            <span>Step 3 of 3</span>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Blog section ends-->
@endsection


@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {

            function numberWithCommas(x) {
                return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }

            $('.btn-to-summary').on('click', function(e) {
                // e.preventDefault();
                var fullname = $('input[name="fullname"]').val();
                var ratable_owner = $('input[name="ratable_owner"]').val();
                var ratable_relation = $('input[name="relation"]').val();
                var address = $('input[name="address"]').val();
                var postal_address = $('input[name="postal_address"]').val();
                var phone = $('input[name="phone"]').val();
                var town_id = $('select[name="town_id"]').val();
                var town_name = $('select[name="town_id"]').parent().find('.filter-option-inner-inner').text();
                var lrno = $('input[name="lr_no"]').val();
                var approx_area = $('input[name="approx_area"]').val();
                var land_use = $('select[name="land_use"]')parent().find('.filter-option-inner-inner').text();
                var files = $('input[name="files[]"]');
                var objectioncost = 0;
                var objectionnumber = 1;
                var list = $('.supporting-documents');

                $('.objector-name').text(fullname);
                $('.objector-number').text(phone);
                $('.objector-address').text(address);
                $('.objector-postal-address').text(postal_address + ' - ' + town_name);
                $('.objector-lrno').text(lrno);
                $('.objector-area').text(approx_area);
                $('.objector-use').text(land_use);

                if (files !== null) {
                    console.log(files);
                    var filesCount = $(files)[0].files;
                    console.log(filesCount);
                    for (var i = 0; i < filesCount.length; i++) {
                        console.log(filesCount[i].name);

                        list.append('<li class="mb-0">' + filesCount[i].name + '</li>');
                    }

                }

                objectioncost = objectionnumber * 500;

                $('.objection-cost').text('KES ' + numberWithCommas(objectioncost));

            });


        });

    </script>

    <script>
        $('.btn-objection-prev').on('click', function() {
            // alert('Gina');
            $('.objection-summary').html('');
            $('.objection-cost').text('');
            $('.supporting-documents').html('');


        });

    </script>

    <script>
        $(document).ready(function() {

            //setup before functions
            var typingTimer = null; //timer identifier
            var doneTypingInterval = 2000; //time in ms, 5 second for example
            var $input = $('.approx_area');

            //on keyup, start the countdown
            $input.on('keyup', function() {
                clearTimeout(typingTimer);
                typingTimer = setTimeout(doneTyping, doneTypingInterval);
            });

            //on keydown, clear the countdown 
            $input.on('keydown', function() {
                clearTimeout(typingTimer);
            });

            //user is "finished typing," do something
            function doneTyping() {
                var area = $(this).val();

                if (isNaN(area)) {
                    alert("Area should not contain letters.");
                }
            }
        });

    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            var form = document.getElementById('notFoundObjectionForm');
            $('#btn-submit-objection').on('click', function() {
                for (var i = 0; i < form.elements.length; i++) {
                    if (form.elements[i].value === '' && form.elements[i].hasAttribute('required')) {
                        alert('There are some not filled required fields!');
                        $(this).css("border", "1px solid red");
                        return false;
                    }
                }
                form.submit();
                // alert("Here");
            });
        });

    </script>
@endsection
