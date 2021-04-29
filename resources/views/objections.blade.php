@extends('layouts.frame')

@section('content')
    <!-- Modal -->
    <div class="modal fade" id="mpesa-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Mobile Payment request</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="waiting-payment">
                        <div class="loader-container">
                            <div class="lds-roller">
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>

                            <div class="confirmed-payment d-none animated slideInUp">
                                <span><img src="images/bg/checkrd.png" class=""></span>
                            </div>
                        </div>
                        <p>A Payment request of <strong class="objection-amount">KES 1,000</strong> has been sent to <strong
                                class="phoner"></strong>, kindly enter your mobile wallet <strong>PIN</strong>
                            to confirm transaction</p>
                    </div>
                    <form id="objections-form" action="{{ route('getReceipt') }}" method="POST"
                        class="p-5 bg-white d-none">
                        @csrf
                        @if (Session::has('success'))
                            <p class="alert alert-success">
                                {{ Session::get('success') }}</p>
                        @endif
                        @if (Session::has('errors'))
                            <p class="alert alert-danger">{{ Session::get('errors') }}
                            </p>
                        @endif

                        <input class="d-none" type="text" name="receipt_no">
                        <input class="d-none" type="text" name="receipt_name">
                        <input class="d-none" type="text" name="receipt_amount">
                        <input class="d-none" type="text" name="receipt_amount_words">
                        <input class="d-none" type="text" name="receipt_desc">
                        <input class="d-none" type="text" name="receipt_date">
                        <button type="submit" class="btn btn-block btn-primary">Get Receipt</button>
                    </form>
                </div>
                <div class="modal-footer d-none">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

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
                        <form id="objection-form" action="{{ route('sendObjection') }}" enctype="multipart/form-data"
                            method="POST" class="p-5 bg-white permit-form">
                            @csrf
                            @if (Session::has('success'))
                                <p class="alert alert-success">
                                    {{ Session::get('success') }}</p>
                            @endif
                            @if (Session::has('errors'))
                                <p class="alert alert-danger">{{ Session::get('errors') }}
                                </p>
                            @endif

                            <div class="form-header">
                                <div class="active">
                                    <span class="flaticon-commentator"></span>
                                    <h4>Objector Details</h4>
                                </div>

                                <div class="">
                                    <span class="flaticon-list-text"></span>
                                    <h4>Objection Reasons</h4>
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
                                                            <input id="check-yes" type="radio" checked name="ratable_owner">
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
                                                    <label class="mb-0"><strong>Address</strong></label>
                                                    <input type="text" name="address" class="form-control filter-input mt-0"
                                                        placeholder="Address of your current address" required>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mb-0"><strong>Phone number</strong></label>
                                                    <input type="text" name="phone" class="form-control filter-input mt-0"
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
                                                <select name="town_id" id="" name="town_id"
                                                    title="Please select your postal city"
                                                    class="form-control custom-select city" placeholder="Country" required>
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
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h5 class="mb-0"><strong>Reasons For Objecting</strong></h5>
                                                        <hr class="mt-0 pt-0">
                                                    </div>

                                                    <div class="col-sm-12 col-md-8">
                                                        <div class="row">
                                                            <div class="clone-container col-12">
                                                                <p class="d-none">1</p>
                                                                <div class="row Seen">
                                                                    <div class="col-12">
                                                                        <label class="mb-0"><strong>Reason for
                                                                                objecting</strong></label>
                                                                        <ul
                                                                            class="list-group property-list list-group-horizontal-sm-down">
                                                                            @foreach ($objectingList as $objectingItem)
                                                                                <li class="list-group-item">
                                                                                    <input type="checkbox"
                                                                                        id="LR-{{ $objectingItem }}"
                                                                                        value="{{ $objectingItem }}"
                                                                                        name="properties[]" checked>
                                                                                    <label
                                                                                        for="LR-{{ $objectingItem }}">{{ $objectingItem }}</label>
                                                                                </li>
                                                                            @endforeach
                                                                        </ul>

                                                                        <div class="form-group">
                                                                            <textarea type="text" name="reasons[]"
                                                                                class="form-control filter-input mb-0 mt-1"
                                                                                rows="4" cols="50"
                                                                                placeholder="Enter your reason for objecting the USV"
                                                                                required> </textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row d-none CloneMe">
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <textarea type="text" rows="4" cols="50"
                                                                                class="form-control filter-input mb-0 mt-0"
                                                                                placeholder="Enter your reason for objecting the USV"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12 d-flex justify-flex-end mb-20">
                                                                <span class="btn btn-primary btn-add-duplicate">Add
                                                                    a reason</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="co-sm-12 col-md-4 bg-gray">
                                                        <div class="file-uploads">
                                                            <label class="mb-0"><strong>Supporting
                                                                    Documents</strong></label>
                                                            <p class="mb-2 mt-0">Can select multiple files.</p>
                                                            <label class="input-file form-attach" for="ownership-docs">
                                                                <div class="id-container img-container">
                                                                    <span><img
                                                                            src="{{ asset('images/contract.svg') }}"></span>
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
                                                        <p class="objector-postal-address"></p>
                                                    </div>

                                                    <div class="col-sm-12 col-lg-4">
                                                        <h6><strong>Supporting Documents</strong></h6>
                                                        <ul class="supporting-documents"></ul>
                                                    </div>
                                                </div>
                                                <div class="row objection-summary">
                                                </div>
                                            </div>

                                            <div class="col-12 total-cost">
                                                <p><strong class="text-danger">* </strong> The Valuation for Rating Act, Cap
                                                    266
                                                    (section 10 (1)) prescribes a charge of KES 500 for each objection to
                                                    the draft
                                                    valuation roll.</p>
                                                <h6 class="text-left"><strong>Total Objection Cost</strong></h6>
                                                <h3 class="text-left text-success objection-cost"></h3>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="fieldset-footer">
                                        <div class="step-btns">
                                            <span class="btn  btn-outline-primary btn-prev btn-objection-prev">Previous
                                                step</span>
                                            <button type="submit" class="btn btn-primary btn-submit-objection">Pay</button>
                                        </div>
                                        <span>Step 3 of 3</span>
                                    </div>
                                </fieldset>
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
                var town_name = $('.filter-option-inner-inner').text();
                var reasons = $('textarea[name="reasons[]"]');
                var properties = $('input[name="properties[]"]');
                var files = $('input[name="files[]"]');
                var objectioncost = 0;
                var objectionnumber = 0;
                var list = $('.supporting-documents');

                $('.objector-name').text(fullname);
                $('.objector-number').text(phone);
                $('.objector-address').text(address);
                $('.objector-postal-address').text(postal_address + ' - ' + town_name);

                if (files !== null) {
                    console.log(files);
                    var filesCount = $(files)[0].files;
                    console.log(filesCount);
                    for (var i = 0; i < filesCount.length; i++) {
                        console.log(filesCount[i].name);

                        list.append('<li class="mb-0">' + filesCount[i].name + '</li>');
                    }

                }

                $(properties).each(function(index, value) {
                    if ($(this).is(':checked')) {
                        var property_no = $(this).siblings('label').text()
                        var row = $('<div class="col-sm-12 col-lg-6"></div>');
                        row.append('<h6><strong>Land Reference No.</strong></h6>');
                        row.append('<p class="mb-0">' + property_no + '</p>');
                        row.append('<h6><strong>Objection Reasons</strong></h6>');
                        row.append('<ul>');
                        $(reasons).each(function(index, value) {
                            var objection = $(this).val()
                            row.append('<li>' + objection + '</li>');
                        });
                        row.append('</ul>');
                        $('.objection-summary').append(row);

                        objectionnumber = objectionnumber + 1;
                    }
                });


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


    <script type="text/javascript">
        window.onload = function() {
            var form = document.getElementById('objection-form');
            $('.btn-submit-objection').on('click', function() {
                for (var i = 0; i < form.elements.length; i++) {
                    if (form.elements[i].value === '' && form.elements[i].hasAttribute('required')) {
                        alert('There are some required fields!');
                        $(this).css("border", "1px solid red");
                        return false;
                    }
                }
                form.submit();
            });
        };

    </script>
@endsection
