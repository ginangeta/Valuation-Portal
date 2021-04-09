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
                        <form class="p-5 bg-white permit-form">
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
                                    <span class="flaticon-cellphone"></span>
                                    <h4>Checkout</h4>
                                </div>
                            </div>

                            <fieldset class="payment-container animated fadeInLeft">
                                <div class="fieldset-content">
                                    <div class="row">
                                        <div class="payment-methods col-12">
                                            <div class="mpesa-payment animated fadeIn">
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <h5 class="mb-0"><strong>Payment</strong></h5>

                                                        <p class="">Your objection fee bill number is <strong
                                                                id="OB_bill_no"
                                                                class="OB_bill_no">{{ $ObjectionBillInfo->bill_no }}</strong>.
                                                            Select one of the methods below to complete your objection
                                                            submission. </p>
                                                        <hr class="mt-0 pt-0">
                                                    </div>

                                                    <div class="mb-2 col-12 d-none">
                                                        <p class="mb-2 mt-0">A payment of a non-refutable fee of <strong>KES
                                                                500</strong> will acompany an objection
                                                            in accordance with the Valuation for <strong>Rating Act
                                                                Cap 266 Section 10</strong></p>
                                                    </div>

                                                    <div class="pay-now mb-3 mt-3 col-12">
                                                        <h6 class="mb-0"><strong>Pay Now</strong></h6>
                                                        <p class="">Enter your mobile money number below to proceed
                                                            with the transaction.</p>

                                                        <input type="text" name="mpesa_number"
                                                            class="form-control filter-input mt-0" id="phone-wallet"
                                                            placeholder="Enter mobile money number">

                                                        <button class="btn btn-primary btn-payment" type="button"
                                                            id="button-addon2">Pay</button>
                                                    </div>

                                                    <div class="mb-3 mt-3 col-12">
                                                        <h6 class="mb-0"><strong>Pay Later</strong></h6>
                                                        <p class="">Click the button below to download your objection bill.
                                                        </p>
                                                        <div class="payment-information">
                                                            <p><strong>MPESA</strong></p>
                                                            <p>Paybill: <strong>367776</strong></p>
                                                            <p>Account No: <strong
                                                                    class="OB_bill_no">{{ $ObjectionBillInfo->bill_no }}</strong>
                                                            </p>
                                                            <p>Amount: <strong
                                                                    class="Payment_Amount">KES {{ $ObjectionBillInfo->total }}</strong>
                                                            </p>
                                                            <p>Enter your pin</p>
                                                            <p>OK</p>
                                                        </div>
                                                        <a class="btn btn-warning btn-bill-download" onclick="printBill()"
                                                            type="button" id="button-addon2">Download Bill</a>
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
        $('.btn-payment').on('click', function(e) {
            e.preventDefault();
            var date = moment().format('DD-MM-YYYY');
            var MpesaAmount = $('.objection-cost').text();
            var BillTotal  =  '{{ $ObjectionBillInfo->total }}'
            var BillCost = BillTotal.split(".");

            var Sendfunction = 'CustomerPayBillOnlinePush';
            console.log("Push Sendfunction: " + Sendfunction);
            var PayBillNumber = '175555';
            console.log("Push PayBillNumber: " + PayBillNumber);
            var Amount = BillCost[0];
            // var Amount = "2";
            console.log("Push Amount: " + Amount);
            var PhoneNumber = $('input[name="mpesa_number"]').val();
            console.log("Push Number: " + PhoneNumber);
            var AccountReference = $('#OB_bill_no').text();
            console.log("Push AccountReference: " + AccountReference);
            var TransactionDesc = "Property objection Fee For: " + AccountReference;
            console.log("Push TransactionDesc: " + TransactionDesc);
            var FullNames = '---';
            console.log("Push FullNames: " + FullNames);

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
                url: "https://payme.revenuesure.co.ke/api/index.php",
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
                    console.log("Push Response: " + response);

                    if (response == "") {
                        swal('Error!', 'Objection not submitted', 'error');
                        console.log('Nothing');
                        return;
                    }

                    if (response.status == 200) {
                        checkpayment(response.data, FullNames);
                        console.log('Here');

                    } else {
                        console.log('Failed');
                        swal('Error!', data.message, 'error');
                        return;
                    }
                }
            });


            function checkpayment(reference, names) {
                console.log("Checking Payment");
                var checkPaymentFuntion = 'checkPaymentVerification';

                $.ajax({
                    url: "https://payme.revenuesure.co.ke/api/index.php",
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    },
                    data: {
                        function: checkPaymentFuntion,
                        account_reference: reference,

                    },

                    success: function(data) {
                        var response = JSON.parse(data);
                        console.log('CheckPayment: ' + data);

                        if (response == "") {
                            console.log("Recalled");
                            swal('Error!', 'Push not Sent', 'error');
                            $('#mpesa-modal').modal('hide');
                            return;
                        } else if (response.success == false) {
                            console.log("Recalled");
                            checkpayment(reference, names);

                        } else if (response.data.callback_returned == "UNPAID") {
                            console.log("Cancelled");
                            swal('Error!', 'Payment Cancelled', 'error');
                            $('#mpesa-modal').modal('hide');
                        } else if (response.data.callback_returned == "PENDING") {
                            console.log("Pending");
                            checkpayment(reference, names);

                        } else if (response.data.callback_returned == "PAID") {
                            getReceipt(reference);

                        }
                    }
                });

            }

            function getReceipt(bill_number) {
                console.log(bill_number);
                console.log('{{ $billerResponse }}')
                $.ajax({
                    url: "https://pilot.revenuesure.co.ke/billing/invoice",
                    type: "POST",
                    contentType: "application/json",
                    dataType: "json",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        "Authorization": '{{ $billerResponse }}',
                    },
                    data: JSON.stringify({
                        billNo: bill_number,
                    }),

                    success: function(data) {
                        console.log(data);
                        if (data == "") {
                            swal('Error!', 'Payment not found', 'error');
                            return;
                        }
                        if (data.status == 200) {
                            confirmationModal();

                            var results = data.data.header;
                            var d = new Date("2021-04-07T16:14:09.000Z");

                            var new_date = results.dateCreated.split("T"); 
                            var billAmount = results.billAmount.split(".");

                            receipt_no = bill_number;
                            receipt_name = results.payerName;
                            receipt_amount = billAmount[0];
                            receipt_desc = 'Objection Fee';
                            receipt_date = new_date[0];
                            receipt_amount_words = inWords(receipt_amount);

                            console.log(receipt_amount_words);

                            $('input[name="receipt_no"]').val(receipt_no);
                            $('input[name="receipt_name"]').val(receipt_name);
                            $('input[name="receipt_date"]').val(receipt_date);
                            $('input[name="receipt_amount"]').val(receipt_amount);
                            $('input[name="receipt_amount_words"]').val(receipt_amount_words);
                            $('input[name="receipt_desc"]').val(receipt_desc);

                        } else if (data.data > 0) {
                            swal('Error!', 'Payment not found', 'error');

                            return;
                        }
                    }
                });
            }

            function confirmationModal() {
                console.log('Modal');
                $('#mpesa-modal .confirmed-payment').removeClass(
                    'd-none').siblings().addClass('d-none');
                $('.waiting-payment p').text(
                    "Transaction was successful. Click the button below to download receipt."
                );
                $('#mpesa-modal #objections-form').removeClass('d-none');
            }

            event.preventDefault();
        });

    </script>

    <script type="text/javascript">
        function printBill() {
            var BillNo = $('#OB_bill_no').text();
            let url = "objectionBill/:BillNo";
            url = url.replace(':BillNo', BillNo);
            document.location.href = url;
        }

    </script>

@endsection
