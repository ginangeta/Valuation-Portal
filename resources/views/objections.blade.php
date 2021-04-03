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
                        <p>A Payment request of <strong>KES 1,000</strong> has been sent to <strong
                                class="phoner">0704549859</strong>, kindly enter your mobile wallet <strong>PIN</strong>
                            to confirm transaction</p>
                    </div>
                </div>
                <div class="modal-footer d-none">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="receipt.html" type="button" class="btn btn-primary">View Receipt</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

    <!--Breadcrumb section starts-->
    <div class="breadcrumb-section bg-h" style="background-image: url(images/breadcrumb/breadcrumb_1.jpg); height: 280px;">
        <div class="overlay op-5"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <div class="breadcrumb-menu">
                        <h2>Objection Application Form</h2>
                        <span><a href="index.html">Home</a></span>
                        <span><a href="details.html">Property details(
                                @if (count($LrNumbers) > 0)
                                    @foreach ($LrNumbers as $LrNumber)
                                        {{ $LrNumber }},
                                    @endforeach
                                @endif
                                )
                            </a></span>
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
                        <form action="#" class="p-5 bg-white permit-form">
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
                                            <h5 class=""><strong>Objector Details</strong></h5>
                                            <hr class="mt-0 pt-0">
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>
                                                    Are you the ratable owner?
                                                </label>
                                                <div class="d-flex">
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
                                        <div class="col-lg-6 col-sm-12 non-ratable-owner d-none">
                                            <div class="form-group">
                                                <label class="mb-0"><strong>Objector</strong></label>
                                                <input type="text" class="form-control filter-input mt-0"
                                                    placeholder="Enter your name in full">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-12 non-ratable-owner d-none">
                                            <div class="form-group">
                                                <label class="mb-0"><strong>Relation</strong></label>
                                                <input type="text" class="form-control filter-input mt-0"
                                                    placeholder="Enter relation to ratable owner">
                                            </div>
                                        </div>

                                        <div class="col-md-12 ratable-owner">
                                            <div class="form-group">
                                                <label class="mb-0"><strong>Objector</strong></label>
                                                <input type="text" class="form-control filter-input mt-0"
                                                    placeholder="Enter your name in full">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="mb-0"><strong>Address</strong></label>
                                                <input type="text" class="form-control filter-input mt-0"
                                                    placeholder="Address of your current address">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="mb-0"><strong>Phone number</strong></label>
                                                <input type="text" class="form-control filter-input mt-0"
                                                    placeholder="Enter your phone number">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="mb-0"><strong>Postal address</strong></label>
                                                <input type="text" class="form-control filter-input mt-0"
                                                    placeholder="Enter your postal address">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="mb-0"><strong>Select town</strong></label>
                                            <select name="City" id="" title="Please select your postal city"
                                                class="form-control custom-select city" placeholder="Country">
                                                <option>Nairobi</option>
                                                <option>Kisumu</option>
                                                <option>Eldoret</option>
                                                <option>Nakuru</option>
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
                                                    <h5 class=""><strong>Reasons For Objecting</strong></h5>
                                                    <hr class="mt-0 pt-0">
                                                </div>

                                                <div class="col-sm-12 col-md-8">
                                                    <div class="row">
                                                        <div class="clone-container col-12">
                                                            <p class="d-none">1</p>
                                                            <div class="row Seen">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="mb-0"><strong>Reason for
                                                                                rejecting</strong></label>
                                                                        <input type="text"
                                                                            class="form-control filter-input mt-0"
                                                                            placeholder="Enter your reason for rejecting the USV">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row d-none CloneMe">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <input type="text"
                                                                            class="form-control filter-input mt-0"
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
                                                            <input type="file" id="ownership-docs" class="d-none">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fieldset-footer">
                                    <div class="step-btns">
                                        <span class="btn  btn-outline-primary btn-prev">Previous step</span>
                                        <span class="btn btn-primary btn-next">Next step</span>
                                    </div>
                                    <span>Step 2 of 4</span>
                                </div>
                            </fieldset>

                            <fieldset class="d-none animated  summary-container fadeInLeft">
                                <div class="fieldset-content">
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class=""><strong>Objection Summary</strong></h5>
                                            <hr class="mt-0 pt-0">
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-sm-12 col-lg-6">
                                                    <h6><strong>L.R.No</strong></h6>
                                                    <p class="mb-0">LR-45512</p>

                                                    <h6><strong>Owner</strong></h6>
                                                    <p class="mb-0">RELIABLE REALTY MANAGERS LIMITED</p>

                                                    <h6><strong>Location/Situation</strong></h6>
                                                    <p class="mb-0">Kasarani-Thika Road</p>

                                                    <div class="row">
                                                        <div class="col-sm-12 col-lg-6">
                                                            <h6><strong>Objector</strong></h6>
                                                            <p>SHARON ONYANGO</p>

                                                            <h6><strong>P.O.Box Address</strong></h6>
                                                            <p class="mb-0">9385-00618</p>
                                                            <p class="mb-0">Nairobi,KENYA</p>
                                                        </div>
                                                    </div>

                                                    <h6><strong>Approximate Area in Hectares</strong></h6>
                                                    <p>0.0207</p>

                                                    <h6><strong>Objection Reasons</strong></h6>
                                                    <ul>
                                                        <li>USV does not conquer with the current property market
                                                            value
                                                        </li>
                                                        <li>Property has no viable transportation access</li>
                                                        <li>Has it's own water source</li>
                                                    </ul>

                                                </div>

                                                <div class="col-sm-12 col-lg-6">
                                                    <h6><strong>L.R.No</strong></h6>
                                                    <p class="mb-0">LR-15485</p>

                                                    <h6><strong>Owner</strong></h6>
                                                    <p class="mb-0">RELIABLE REALTY MANAGERS LIMITED</p>

                                                    <h6><strong>Location/Situation</strong></h6>
                                                    <p class="mb-0">Kasarani-Thika Road</p>

                                                    <div class="row">
                                                        <div class="col-sm-12 col-lg-6">
                                                            <h6><strong>Objector</strong></h6>
                                                            <p>SHARON ONYANGO</p>

                                                            <h6><strong>P.O.Box Address</strong></h6>
                                                            <p class="mb-0">2558-00610</p>
                                                            <p class="mb-0">Nairobi,KENYA</p>
                                                        </div>
                                                    </div>

                                                    <h6><strong>Approximate Area in Hectares</strong></h6>
                                                    <p>0.0207</p>

                                                    <h6><strong>Objection Reasons</strong></h6>
                                                    <ul>
                                                        <li>USV does not conquer with the current property market
                                                            value
                                                        </li>
                                                        <li>Property has no viable transportation access</li>
                                                        <li>Has it's own water source</li>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 total-cost">
                                            <h6 class="text-left"><strong>Total Objection Cost</strong></h6>
                                            <h3 class="text-left text-success">KES 1,000</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="fieldset-footer">
                                    <div class="step-btns">
                                        <span class="btn  btn-outline-primary btn-prev">Previous step</span>
                                        <span class="btn btn-primary btn-next">Checkout step</span>
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
                                                        <h5 class=""><strong>Mobile Money</strong></h5>
                                                        <hr class="mt-0 pt-0">
                                                    </div>
                                                    <div class="mb-2 col-12">
                                                        <p>A payment of a non-refutable fee of <strong>KES
                                                                500</strong> will accompany an objection
                                                            in accordance with the Valuation for <strong>Rating Act
                                                                Cap 266 Section 10</strong></p>
                                                    </div>
                                                    <div class="input-group mb-3 col-12">
                                                        <input type="text" class="form-control filter-input mt-0"
                                                            id="phone-wallet" placeholder="Enter mobile money number">

                                                        <button class="btn btn-primary btn-payment" type="button"
                                                            id="button-addon2" data-toggle="modal"
                                                            data-target="#mpesa-modal">Get payment
                                                            request</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fieldset-footer">
                                    <div class="step-btns ">
                                        <span class="btn  btn-outline-primary btn-prev">Previous step</span>
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
