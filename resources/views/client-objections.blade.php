@extends('layouts.frame')

@section('content')

    <!--Header ends-->
    <!--Breadcrumb section starts-->
    <div class="breadcrumb-section bg-h" style="background-image: url({{ asset('images/breadcrumb/breadcrumb_1.jpg') }})">
        <div class="overlay op-5"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mt-30">
                    <div class="breadcrumb-menu">
                        <h2>My Objections</h2>
                        <span><a href="{{ route('home') }}">Home</a></span>
                        <span>My Objections</span>
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
                            <!--Listing Details starts-->
                            <div class="list-details-wrap bg-white">
                                <div id="description" class="list-details-section">
                                    <div class="row property-heading">
                                        <div class="col-12">
                                            <h4 class="overview-content-header">Client Objections</h4>
                                            <div class="overview-content-details">
                                                <p class="">Below are the details objections you have raised.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <form id="properties-form" action="{{ route('createObjections') }}" method="POST"
                                        class="bg-white w-100 filter v3 listing-filter">
                                        @csrf
                                        @if (Session::has('success'))
                                            <p class="alert alert-success">
                                                {{ Session::get('success') }}</p>
                                        @endif
                                        @if (Session::has('errors'))
                                            <p class="alert alert-danger">{{ Session::get('errors') }}
                                            </p>
                                        @endif

                                        <div class="table-responsive">
                                            <table class="table table-sm table-bordered input-table table-striped"
                                                id="data-table">
                                                <thead class="">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Objection Id</th>
                                                        <th>Serial No.</th>
                                                        <th>LR No.</th>
                                                        <th>Situation</th>
                                                        <th>Owner</th>
                                                        <th>Phone</th>
                                                        <th>Documents</th>
                                                        <th>Payment Status</th>
                                                        <th>Objection Date</th>
                                                        <th>USV</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($Objections as $key => $Objection)
                                                        @if ($Objection->property->is_objected)
                                                            <tr>

                                                            @else
                                                            <tr style="background-color: #f8d7da;">

                                                        @endif
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>PV-2021-{{ $Objection->id }}</td>
                                                        <td>{{ $Objection->property->serial_no }}</td>
                                                        <td>{{ $Objection->property->lr_no }}</td>
                                                        <td>
                                                            <p class="mb-0">{{ $Objection->property->situation }}
                                                            </p>
                                                            <p class="mb-0 d-none">
                                                                <small>Kasarani Road</small>
                                                            </p>
                                                        </td>
                                                        <td>{{ $Objection->property->owner }}</td>
                                                        <td><a
                                                                href="tel:{{ $Objection->phone }}">{{ $Objection->phone }}</a>
                                                        </td>
                                                        <td><a href="#" data-toggle="modal"
                                                                data-target="#objection-documents{{ $key + 1 }}">{{ count($Objection->documents) }}
                                                                Documents</a></td>
                                                        <td>
                                                            @if ($Objection->status === 'Pending')
                                                                <span
                                                                    class="badge badge-pill d-inline badge-warning">{{ $Objection->status }}
                                                                </span>
                                                            @endif
                                                            @if ($Objection->status === 'Paid')
                                                                <span
                                                                    class="badge badge-pill d-inline badge-success">{{ $Objection->status }}
                                                                </span>
                                                            @endif
                                                        </td>
                                                        <td>{{ date('d M Y h:i A', strtotime($Objection->objection_date)) }}
                                                        </td>
                                                        <td>KES {{ number_format($Objection->property->usv) }}
                                                        </td>
                                                        <td class="d-flex justify-content-between flex-column">
                                                            <a class="btn btn-info btn-sm btn--icon-text my-auto"
                                                                data-toggle="modal"
                                                                data-target="#details{{ $Objection->id }}"><i
                                                                    class="zmdi zmdi-eye my-auto"></i>Details</a>
                                                            <br>
                                                            <a data-toggle="modal"
                                                                data-target="#withdraw{{ $Objection->id }}"
                                                                class="btn btn-danger text-white btn-sm btn--icon-text mt-2"><i
                                                                    class="zmdi zmdi-print mr-2 my-auto"></i>
                                                                Withdraw Objection </a>
                                                        </td>

                                                        <!-- Modals -->
                                                        <!-- objection withdrawal -->
                                                        <div class="modal fade" id="withdraw{{ $Objection->id }}"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title text-capitalize"
                                                                            id="exampleModalLongTitle">
                                                                            LR No:
                                                                            {{ $Objection->property->lr_no }}
                                                                            objection
                                                                            withdrawal
                                                                        </h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <center class="p-5">
                                                                            <img class="errorImg"
                                                                                style="height: 300px !important;"
                                                                                src="{{ asset('/img/not-found.jpg') }}">
                                                                        </center>
                                                                        <h6 class="text-center" id="customer-info">
                                                                            Are you sure you want to withdraw the
                                                                            objection to the rateable
                                                                            property of the draft
                                                                            valuation roll for Property NO: <strong
                                                                                id="property-number">{{ $Objection->property->lr_no }}</strong>?
                                                                        </h6>


                                                                    </div>
                                                                    <div class="modal-footer">

                                                                        <button type="button"
                                                                            class="btn btn-success btn--icon-text px-5 d-none"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close">OK</button>
                                                                        <form action="{{ route('withdrawObjection') }}"
                                                                            method="post"
                                                                            id="withdraw-objection{{ $Objection->id }}">
                                                                            @csrf
                                                                            <input type="hidden" id="objection_id"
                                                                                name="objection_id"
                                                                                value="{{ $Objection->id }}">
                                                                            <input type="hidden" id="property_id"
                                                                                name="property_id"
                                                                                value="{{ $Objection->property->id }}">
                                                                        </form>

                                                                        <button type="button" id="close"
                                                                            class="btn btn-outline-dark text-black btn--icon-text"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close">Close</button>

                                                                        <button id="print-receipt"
                                                                            onclick="document.getElementById('withdraw-objection{{ $Objection->id }}').submit();"
                                                                            class="btn btn-success btn--icon-text"
                                                                            data-dismiss="modal" aria-label="Close"><i
                                                                                class="zmdi zmdi-check-all mr-2"></i>Yes,
                                                                            Withdraw Objection</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- objector documents -->
                                                        <div class="modal fade" id="objection-documents{{ $key + 1 }}"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title text-capitalize"
                                                                            id="exampleModalLongTitle">
                                                                            LR No:
                                                                            {{ $Objection->property->lr_no }}
                                                                            objection
                                                                            documents
                                                                        </h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>

                                                                    <div class="modal-body">
                                                                        @if (count($Objection->documents) > 0)
                                                                            <h6><strong>Click to download</strong>
                                                                            </h6>
                                                                            <ul style="padding-left: 20px;">
                                                                                @foreach ($Objection->documents as $key => $document)
                                                                                    <li>
                                                                                        <a href="{{ $document->url }}"
                                                                                            download>{{ $document->name }}</a>
                                                                                    </li>
                                                                                @endforeach
                                                                            </ul>
                                                                        @endif
                                                                        @if (count($Objection->documents) == 0)
                                                                            <h5>No Documents</h5>
                                                                        @endif

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-success btn-secondary"
                                                                            data-dismiss="modal">OK</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- objection details -->
                                                        <div class="modal fade" id="details{{ $Objection->id }}"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title text-capitalize"
                                                                            id="exampleModalLongTitle">
                                                                            LR No:
                                                                            {{ $Objection->property->lr_no }}
                                                                            objection
                                                                            details
                                                                        </h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>

                                                                    <div class="modal-body">
                                                                        <h6><strong>Serial No.</strong></h6>
                                                                        <p>{{ $Objection->property->serial_no }}
                                                                        </p>
                                                                        <hr>

                                                                        <div class="row">
                                                                            <div class="col-sm-12 col-lg-6">
                                                                                <h6><strong>Owner</strong></h6>
                                                                                <p>{{ $Objection->property->owner }}
                                                                                </p>

                                                                                <h6><strong>P.O.Box Address</strong>
                                                                                </h6>
                                                                                <p class="mb-0">
                                                                                    {{ $Objection->property->po_box }}-{{ $Objection->property->postal_code }}
                                                                                </p>
                                                                                <p class="mb-0">
                                                                                    {{ $Objection->property->situation }}
                                                                                </p>
                                                                            </div>
                                                                            <div class="col-sm-12 col-lg-6">
                                                                                <h6><strong>Objector</strong></h6>
                                                                                <p>{{ $Objection->objector_name }}
                                                                                </p>

                                                                                <h6><strong>P.O.Box Address</strong>
                                                                                </h6>
                                                                                <p class="mb-0">
                                                                                    {{ $Objection->property->po_box }}-{{ $Objection->property->postal_code }}
                                                                                </p>
                                                                                <p class="mb-0">
                                                                                    {{ $Objection->property->situation }}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <hr>

                                                                        <h6><strong>Approximate Area in
                                                                                Hectares</strong></h6>
                                                                        <p>{{ $Objection->property->approx_area }}
                                                                        </p>
                                                                        <hr>

                                                                        <div class="row">
                                                                            <div class="col-6">
                                                                                <h6><strong>Objection Date</strong>
                                                                                </h6>
                                                                                <p>{{ date('d M Y h:i A', strtotime($Objection->objection_date)) }}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <hr>

                                                                        <h6><strong>Objections</strong></h6>
                                                                        <ul>
                                                                            @foreach ($Objection->reasons as $key => $reason)
                                                                                <li>{{ $reason->description }}
                                                                                </li>
                                                                            @endforeach
                                                                        </ul>
                                                                        <hr>

                                                                        <div class="row">
                                                                            <div class="col-6">
                                                                                <h6 class="text-left">
                                                                                    <strong>Unimproved Site
                                                                                        Value(USV)</strong>
                                                                                </h6>
                                                                                <h3 class="text-left">KES
                                                                                    {{ number_format($Objection->property->usv) }}
                                                                                </h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-success btn-secondary"
                                                                            data-dismiss="modal">OK</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Modals -->

                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--Listing Details ends-->
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>
    <!--Blog section ends-->
@endsection

@section('scripts')

@endsection
