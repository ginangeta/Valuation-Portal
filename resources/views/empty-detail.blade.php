{{-- {{ $array = ['LrNo' => LRNo] }}
{{ route('createObjections', $serializeArray) }}
{{ $serializeArray = serialize($array) }} --}}

{{-- [object%20Object],[object%20Object]

var LRNoArray = [];
$('.LRNo').each(function(index, value) {
    var ItemNumber = $(this).text();
    LRNoArray.push({LRNO: ItemNumber});
});

let url ="createObjections/:LRNoArray";
var JsonLrArray = JSON.stringify(LRNoArray)
url = url.replace(':LRNoArray', LRNoArray);
document.location.href = url; --}}

{{-- // function createObjectionArray() {
    //     var LRNoArray = [];
    //     $('.LRNo').each(function(index, value) {
    //         var ItemNumber = $(this).text();
    //         var ItemID = $('.LRId').text();
    //         LRNoArray.push({
    //             LRNO: ItemNumber,
    //             LRID: ItemID
    //         });
    //     });

    //     let url = "createObjections/:LRNoArray";
    //     alert(LRNoArray);
    //     var JsonLrArray = JSON.stringify(LRNoArray);
    //     alert('JSON: ' + JsonLrArray);
    //     url = url.replace(':LRNoArray', JsonLrArray);
    //     document.location.href = url;
    // } --}}

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

                        <input type="text" name="receipt_no">
                        <input type="text" name="receipt_name">
                        <input type="text" name="receipt_amount">
                        <input type="text" name="receipt_desc">

                    </form>
                </div>
                <div class="modal-footer d-none">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Get Receipt</button>
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
                <div class="col-md-8 offset-md-2 text-center">
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
                        <form>
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

                                <div class="">
                                    <span class="flaticon-cellphone"></span>
                                    <h4>Checkout</h4>
                                </div>
                            </div>

                            <fieldset class="animated fadeInLeft">
                                <div class="fieldset-content">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="mb-0"><strong>Objector Details</strong></h5>
                                            <p class="mb-2 mt-0">Please fill in the inputs below with the objector's
                                                information.</p>
                                            <hr class="mt-0 pt-0">
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>
                                                    Are you the ratable owner?
                                                </label>
                                                <div class="d-flex ">
                                                    <div class="form-inline">
                                                        <input id="check-yes" type="radio" checked name="ratable-owner">
                                                        <label for="check-yes">Yes</label>
                                                    </div>

                                                    <div class="form-inline ml-3">
                                                        <input id="check-no" type="radio" name="ratable-owner">
                                                        <label for="check-no">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-sm-12 ratable-owner">
                                            <div class="form-group">
                                                <label class="mb-0"><strong>Objector</strong></label>
                                                <input type="text" name="fullname" class="form-control filter-input mt-0"
                                                    placeholder="Enter your name in full">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-sm-12 non-ratable-owner d-none">
                                            <div class="form-group">
                                                <label class="mb-0"><strong>Relation</strong></label>
                                                <input type="text" name="relation" class="form-control filter-input mt-0"
                                                    placeholder="Enter relation to ratable owner">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="mb-0"><strong>Address</strong></label>
                                                <input type="text" name="address" class="form-control filter-input mt-0"
                                                    placeholder="Address of your current address">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="mb-0"><strong>Phone number</strong></label>
                                                <input type="text" name="phone" class="form-control filter-input mt-0"
                                                    placeholder="Enter your phone number">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="mb-0"><strong>Postal address</strong></label>
                                                <input type="text" name="postal_address"
                                                    class="form-control filter-input mt-0"
                                                    placeholder="Enter your postal address">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="mb-0"><strong>Select town</strong></label>
                                            <select name="City" id="" name="town_id" title="Please select your postal city"
                                                class="form-control custom-select city" placeholder="Country">
                                                <option value="1">Nairobi</option>
                                                <option value="2">Kisumu</option>
                                                <option value="3">Eldoret</option>
                                                <option value="4">Nakuru</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="fieldset-footer">
                                    <div class="step-btns">
                                        <span class="btn btn-primary btn-next">Next step</span>
                                    </div>
                                    <span>Step 1 of 4</span>
                                </div>
                            </fieldset>

                            <fieldset class="animated fadeInLeft d-none animated ">
                                <div class="fieldset-content">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h5 class="mb-0"><strong>Reasons For Objecting</strong></h5>
                                                    <p class="mb-2 mt-0">After entering a reason please select which
                                                        properties the objections apply to.</p>
                                                    <hr class="mt-0 pt-0">
                                                </div>

                                                <div class="col-sm-12 col-md-8">
                                                    <div class="row">
                                                        <div class="clone-container col-12">
                                                            <p class="d-none">1</p>
                                                            <div class="row Seen">
                                                                <div class="col-12">
                                                                    <ul class="list-group list-group-horizontal-sm-down">
                                                                        @foreach ($objectingList as $objectingItem)
                                                                            <li class="list-group-item">
                                                                                <input type="checkbox"
                                                                                    id="LR-{{ $objectingItem }}"
                                                                                    name="properties[]">
                                                                                <label
                                                                                    for="LR-{{ $objectingItem }}">{{ $objectingItem }}</label>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>

                                                                    <div class="form-group">
                                                                        <label class="mb-0"><strong>Reason for
                                                                                rejecting</strong></label>
                                                                        <input type="text" name="reasons"
                                                                            class="form-control filter-input mb-0 mt-0"
                                                                            placeholder="Enter your reason for rejecting the USV">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row d-none CloneMe">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <input type="text"
                                                                            class="form-control filter-input mb-0 mt-0"
                                                                            placeholder="Enter your reason for rejecting the USV">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-12 d-flex justify-flex-end mb-20">
                                                            <button type="button"
                                                                class="btn  btn-primary btn-add-duplicate">Add
                                                                a reason</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="co-sm-12 col-md-4 bg-gray">
                                                    <div class="file-uploads">
                                                        <label class="mb-0"><strong>Supporting
                                                                Documents</strong></label>
                                                        <div class="input-file ownership-docs">
                                                            <label for="ownership-docs">
                                                                <div class="selected-file d-none">
                                                                    <i class="flaticon-add"></i>
                                                                    <p>File selected</p>

                                                                </div>
                                                                <img src="images/bg/objection-doc.png">
                                                                <p>Objection Documents</p>
                                                            </label>
                                                            <input type="file" id="ownership-docs" name="files[]"
                                                                multiple="multiple" class="d-none">
                                                        </div>
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
                                    <span>Step 2 of 4</span>
                                </div>
                            </fieldset>

                            <fieldset class="d-none animated  summary-container fadeInLeft">
                                <div class="fieldset-content">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="mb-0"><strong>Objection Summary</strong></h5>
                                            <p class="mb-2 mt-0">Please fill in the inputs below with the objector's
                                                information.</p>
                                            <hr class="mt-0 pt-0">
                                        </div>
                                        <div class="col-12">
                                            <div class="row objection-summary">
                                            </div>
                                        </div>

                                        <div class="col-12 total-cost">
                                            <h6 class="text-left"><strong>Total Objection Cost</strong></h6>
                                            <h3 class="text-left text-success objection-cost">KES 1,000</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="fieldset-footer">
                                    <div class="step-btns">
                                        <span class="btn  btn-outline-primary btn-prev">Previous step</span>
                                        <span class="btn btn-primary btn-next btn-submit-objection">Checkout step</span>
                                    </div>
                                    <span>Step 3 of 4</span>
                                </div>
                            </fieldset>

                            <fieldset class="payment-container d-none  animated fadeInLeft">
                                <div class="fieldset-content">
                                    <div class="row">
                                        <div class="payment-methods col-12">
                                            <div class="mpesa-payment animated fadeIn">
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <h5 class="mb-0"><strong>Mobile Money</strong></h5>
                                                        <p class="mb-2 mt-0">Enter your mobile money number below to proceed
                                                            with the transaction.</p>
                                                        <hr class="mt-0 pt-0">
                                                    </div>
                                                    <div class="mb-2 col-12">
                                                        <p>A payment of a non-refutable fee of <strong>KES
                                                                500</strong> will accompany an objection
                                                            in accordance with the Valuation for <strong>Rating Act
                                                                Cap 266 Section 10</strong></p>
                                                    </div>
                                                    <div class="input-group mb-3 col-12">
                                                        <input type="text" name="mpesa-number"
                                                            class="form-control filter-input mt-0" id="phone-wallet"
                                                            placeholder="Enter mobile money number">

                                                        <button class="btn btn-primary btn-payment" type="button"
                                                            id="button-addon2">Get payment
                                                            request</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fieldset-footer">
                                    <div class="step-btns ">
                                    </div>
                                    <span>Step 4 of 4</span>
                                </div>
                            </fieldset>
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
                e.preventDefault();
                var fullname = $('input[name="fullname"]').val();
                var ratable_owner = $('input[name="ratable-owner"]').val();
                var ratable_relation = $('input[name="relation"]').val();
                var address = $('input[name="address"]').val();
                var postal_address = $('input[name="postal_address"]').val();
                var phone = $('input[name="phone"]').val();
                var town_id = $('select[name="town_id"]').val();
                var reasons = $('input[name="reasons"]');
                var properties = $('input[name="properties[]"]');
                var files = $('input[name="files[]"]');
                var objectioncost = 0;
                var objectionnumber = 0;

                $(properties).each(function(index, value) {
                    var property_no = $(this).siblings('label').text()
                    var row = $('<div class="col-sm-12 col-lg-6"></div>');
                    row.append('<h6><strong>L.R.No</strong></h6>');
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
                });

                objectioncost = objectionnumber * 500;

                $('.objection-cost').text('KES ' + numberWithCommas(objectioncost));
            });
        });

    </script>

    <script type="text/javascript">
        $('.btn-payment').on('click', function(e) {
            e.preventDefault();
            var Sendfunction = 'CustomerPayBillOnlinePush';
            var PayBillNumber = '367776';
            var Amount = '1';
            var PhoneNumber = $('input[name="mpesa-number"]').val();
            var AccountReference = 'ObjectionFee';
            var TransactionDesc = "Property objection Fee";
            var FullNames = $('input[name="fullname"]').val();

            $('#mpesa-modal').modal('show');
            $('.phoner').text(PhoneNumber);
            $('.objection-amount').text('KES ' + Amount);

            //Modal
            var receipt_no;
            var receipt_name;
            var receipt_amount;
            var receipt_amount_words;
            var receipt_desc;

            $.ajax({
                url: "https://payme.revenuesure.co.ke/index.php",
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    function: Sendfunction,
                    PayBillNumber: PayBillNumber,
                    Amount: Amount,
                    PhoneNumber: PhoneNumber,
                    AccountReference: AccountReference,
                    TransactionDesc: TransactionDesc,
                    FullNames: FullNames
                },

                success: function(data) {

                    $('.phoner').text(PhoneNumber);
                    var response = JSON.parse(data);
                    // console.log(response);

                    if (response == "") {
                        swal('Error!', 'Objection not submitted', 'error');
                        console.log('Nothing');
                        return;
                    }

                    if (response.status == 200) {
                        checkpayment(response.data, FullNames);
                        // console.log('Here');

                    } else {
                        console.log('Failed');
                        swal('Error!', data.message, 'error');
                        return;
                    }
                }
            });

            function submitObjection() {
                // swal('Success!', 'Objecion Submitted', 'success');
                var fullname = $('input[name="fullname"]').val();
                console.log('fullname: ' + fullname);
                var ratable_owner = $('input[name="ratable-owner"]').val();
                console.log('ratable_owner: ' + ratable_owner);
                var ratable_relation = $('input[name="relation"]').val();
                console.log('ratable_relation: ' + ratable_relation);
                var address = $('input[name="address"]').val();
                console.log('address: ' + address);
                var postal_address = $('input[name="postal_address"]').val();
                console.log('postal_address: ' + postal_address);
                var phone = $('input[name="phone"]').val();
                console.log('phone: ' + phone);
                var town_id = $('select[name="City"]').children("option:selected").val();;
                console.log('town_id: ' + town_id);
                var reasons = $('input[name="reasons"]');
                var properties = $('input[name="properties[]"]');
                // var files = $('File').val();
                var files = 'File';

                var propertiesArray = [];
                var reasonsArray = [];
                var token = "{{ $session }}";

                $(properties).each(function(index, value) {
                    var property_no = $(this).siblings('label').text();
                    if (property_no != '' || property_no != undefined || property_no != null) {
                        console.log('PropItem: ' + property_no);
                        propertiesArray.push(property_no);
                    }
                });

                $(reasons).each(function(index, value) {
                    var objection = $(this).val();
                    if (objection != '' || objection != undefined || objection != null) {
                        console.log('Reas: ' + objection);
                        reasonsArray.push(objection);
                    }
                });

                var JsonPropArray = JSON.stringify(propertiesArray);
                var JsonReasArray = JSON.stringify(reasonsArray);

                console.log('Prop: ' + JsonPropArray);
                console.log('Reas: ' + JsonReasArray);

                $.ajax({
                    url: "{{ config('global.url') }}" + 'property/objection/',
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        "Authorization": 'JWT {{ $session }}',
                    },
                    data: {
                        fullname: fullname,
                        ratable_owner: ratable_owner,
                        ratable_relation: ratable_relation,
                        address: address,
                        postal_address: postal_address,
                        phone: phone,
                        town_id: town_id,
                        reasons: JsonReasArray,
                        properties: JsonPropArray,
                        files: files
                    },

                    success: function(data) {

                        console.log(data);

                        if (data == "") {
                            swal('Error!', 'Objection not submitted', 'error');
                            swal('Error!', data.msg, 'error');;
                            return;
                        }

                        if (data.success == true) {
                            $('#mpesa-modal .confirmed-payment').removeClass(
                                'd-none').siblings().addClass(
                                'd-none');
                            $('.waiting-payment p').text(
                                "Transaction was successful. Click the button below to download receipt."
                            );
                            $('#mpesa-modal .modal-footer').removeClass('d-none');

                        } else {
                            swal('Error!', data.msg, 'error');
                            return;
                        }
                    }
                });

            }

            function checkpayment(reference, names) {
                var date = moment().format('DD-MM-YYYY');
                console.log(date);

                $.ajax({
                    url: "{{ config('global.url') }}" + 'payment_callback/',
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        "Authorization": 'JWT {{ $session }}',
                    },
                    data: {
                        reference_number: names,
                        bill_number: reference,
                        amount: 1,
                        receipt_number: reference,
                        payment_date: date,
                    },

                    success: function(data) {

                        console.log('CheckPayment' + data);

                        if (data == "") {
                            swal('Error!', 'Objection not submitted', 'error');
                            swal('Error!', data.msg, 'error');;
                            return;
                        } else {
                            console.log("Payment");
                            getReceipt(data.bill_number);

                        }
                    }
                });

            }

            function getReceipt(bill_number) {
                $.ajax({
                    url: "{{ config('global.url') }}" + 'receipts/?q=' + bill_number,
                    type: "GET",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {

                        console.log(data);
                        if (data == "") {
                            swal('Error!', 'Payment not found', 'error');
                            return;
                        }
                        if (data.success == true) {
                            submitObjection();

                            receipt_no = bill_number;
                            receipt_name = FullNames;
                            receipt_amount = Amount;
                            receipt_desc = TransactionDesc;
                            receipt_amount_words = inWords(receipt_amount);

                        } else if (data.data > 0) {
                            swal('Error!', 'Payment not found', 'error');

                            return;
                        }
                    }
                });
            }

            $('input[name="receipt_no"]').val();
            $('input[name="receipt_name"]').val();
            $('input[name="receipt_amount"]').val();
            $('input[name="receipt_desc"]').val();

            event.preventDefault();
        });

    </script>
@endsection
