@extends('layouts.frame')

@section('content')

    <div class="modal fade" id="objecting-usv" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-light text-white">
                    <h4>Objection form for 20856/19</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">
                            <i class="lnr lnr-cross"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-12 mb-20">
                        <p>A payment of a non-refutable fee of <strong>KES 500</strong> will accompany an objection
                            in accordance with the Valuation for <strong>Rating Act Cap 266 Section 10</strong></p>
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

                    <div class="row px-3">
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
                            <label class="mb-0">Select town</label>
                            <select class="listing-input hero__form-input form-control custom-select"
                                data-live-search="true">
                                <option>Nairobi</option>
                                <option>Kisumu</option>
                                <option>Eldoret</option>
                                <option>Nakuru</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <hr>
                        </div>

                        <div class="clone-container col-12">
                            <p class="d-none">1</p>
                            <div class="row Seen">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="mb-0"><strong>Reason for rejecting</strong></label>
                                        <input type="text" class="form-control filter-input mt-0"
                                            placeholder="Enter your reason for rejecting the USV">
                                    </div>
                                </div>
                            </div>

                            <div class="row d-none CloneMe">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control filter-input mt-0"
                                            placeholder="Enter your reason for rejecting the USV">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 d-flex justify-flex-end mb-20">
                            <button type="button" class="btn  btn-primary btn-add-duplicate">Add a
                                reason</button>
                        </div>

                        <div class="col-md-8 col-sm-12">
                            <div class="form-group">
                                <label class="mb-0"><strong>Mpesa number</strong></label>
                                <input type="text" class="form-control filter-input mt-0" placeholder="Enter mpesa number">
                                <small>Enter the Mpesa number to pay with above.</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal">Close</button>
                    <button class="btn btn-danger" data-dismiss="modal" data-toggle="modal"
                        data-target="#objection-confirmation">Submit objection</button>
                </div>
            </div>
        </div>
    </div>

    <!-- reverse_payment_warning modal -->
    <div class="modal fade" id="objection-confirmation" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-light text-white py-3">
                    <h5 class="modal-title" id="exampleModalLongTitle">Make Objection to USV for LR: 20856/19</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">
                            <i class="lnr lnr-cross"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4>5 Objections reasons by <strong>Objector's Name</strong></h4>
                    <div class="warning-container">
                        <img src="img/alarm.svg">
                        <p class="font-16">
                            Are you sure you want to objection this USV?
                            Notice, once submission the only way to change this objections is through a physical
                            visitation to the county offices.
                        </p>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn  btn-outline-dark" data-dismiss="modal">No, Dont
                        object</button>
                    <button type="button" class="btn  btn-danger btn--icon-text text-white" data-dismiss="modal"> <i
                            class="ti-trash mr-3"></i>Yes, I want to object it</button>
                </div>
            </div>
        </div>
    </div>
    <!-- reverse_payment_warning modal -->
    <!--Header ends-->
    <!--Breadcrumb section starts-->
    <div class="breadcrumb-section bg-h" style="background-image: url(images/breadcrumb/breadcrumb_1.jpg)">
        <div class="overlay op-5"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <div class="breadcrumb-menu">
                        <h2>Property details</h2>
                        <span><a href="index.html">Home</a></span>
                        <span>property details (LR-45512)</span>
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
                    <div class="col-12">
                        <div class="listing-desc-wrap">

                            <div class="">
                                <div class="form-group">
                                    <h3 class="site-heading text-black mb-0">Seach For Property</h3>
                                    <p class="mb-2 mt-0">Fill in the input below to search for a particular
                                        property. Once obtained, one can search for yet another property which will allow
                                        multiple property objection.</p>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control filter-input mt-0"
                                            placeholder="Enter L.R Number">

                                        <button class="btn btn-primary btn-payment" type="button"
                                            id="search-property">Search for Property</button>
                                    </div>
                                </div>
                            </div>

                            <!--Listing Details starts-->
                            <div class="list-details-wrap bg-white">
                                <div id="description" class="list-details-section">
                                    <h4>Property details</h4>
                                    <div class="overview-content">
                                        <p class="">Below are the details on the searched property.</p>
                                    </div>
                                    <div>
                                        <div class="mt-20">
                                            <ul class="listing-address">
                                                <li>LR No : <span>LR-45512</span></li>
                                                <li>Location : <span>Kasarani - Kasarani Road</span></li>
                                                <li>Owner : <span>Reliable Reality Managers Limited</span></li>
                                                <li>P.O. BOX : <span>58504</span></li>
                                                <li>Postal Code : <span>00200</span></li>
                                                <li>Area(Ha) : <span>0.0256</span></li>
                                                <li>
                                                    <p class="mt-5 mt-35">Property Unimproved Site Value(USV) in KES</p>
                                                    <div class="trend-open">
                                                        <p>KES 4,876,300.00 </p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <button class="btn btn-sm btn-warning btn-remove-property"><i
                                                    class="lnr lnr-cross text-black"></i> Remove</button>
                                        </div>
                                    </div>
                                    <div class="2nd-Property d-none">
                                        <hr>
                                        <div class="mt-20">
                                            <ul class="listing-address">
                                                <li>LR No : <span>LR-15485</span></li>
                                                <li>Location : <span>Kasarani - Kasarani Road</span></li>
                                                <li>Owner : <span>Reliable Reality Managers Limited</span></li>
                                                <li>P.O. BOX : <span>2558</span></li>
                                                <li>Postal Code : <span>00610</span></li>
                                                <li>Area(Ha) : <span>0.0256</span></li>
                                                <li>
                                                    <p class="mt-5 mt-35">Property Unimproved Site Value (USV)</p>
                                                    <div class="trend-open">
                                                        <p>KES 4,876,300.00 </p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <button class="btn btn-sm btn-warning btn-remove-property"><i
                                                    class="lnr lnr-cross text-black"></i> Remove</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Listing Details starts-->

                            <div class="usv-btns">
                                <a class="btn btn-danger" href="objection.html">Object USV</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>
    <!--Blog section ends-->
@endsection
