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
                        <h2>My Bills</h2>
                        <span><a href="{{ route('home') }}">Home</a></span>
                        <span>My Bills</span>
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
                                            <h4 class="overview-content-header">Client Bills</h4>
                                            <div class="overview-content-details">
                                                <p class="">Below are the details bills you have raised.</p>
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
                                            <table class="table table-sm table-bordered input-table" id="data-table">
                                                <thead class="">
                                                    <tr>
                                                        <th>Bill No</th>
                                                        <th>Objection No.</th>
                                                        <th>Transaction Date.</th>
                                                        <th>Transacted By</th>
                                                        <th>Status</th>
                                                        <th>Bill Amount</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <tbody>
                                                    @foreach ($payments as $payment)
                                                        <tr>
                                                            <td>{{ $payment->bill_no }}</td>
                                                            <td>{{ $payment->objection_no }}</td>
                                                            <td>{{ date('d M Y h:i A', strtotime($payment->created_at)) }}
                                                            </td>
                                                            <td class="w60">{{ $payment->billed_user }}</td>
                                                            <td>
                                                                <span
                                                                    class="listview__item chat__available">{{ $payment->status }}</span>
                                                            </td>
                                                            <td class="text-capitalize">KES {{ $payment->total }}
                                                            </td>
                                                            <td class="d-flex justify-content-between flex-column">
                                                                &nbsp;
                                                                <a href="#" data-toggle="modal"
                                                                    data-target="#payment-details{{ $payment->bill_no }}"
                                                                    class="btn btn-primary btn-sm btn--icon-text"><i
                                                                        class="zmdi zmdi-eye mr-2 my-auto">View Details</i>
                                                                    </a>
                                                                    @if ($payment->status === "Paid")
                                                                    <a href="getBillReceipt/{{$payment->bill_no}}" target="_blank" class="btn btn-warning btn-sm btn--icon-text"><i
                                                                        class="zmdi zmdi-print mr-2 my-auto"></i> Print Receipt</a> 
                                                                    @endif
                                                            </td>
                                                        </tr> 
                                                        <!-- objection modal -->
                                                        <div class="modal fade"
                                                            id="payment-details{{ $payment->bill_no }}" tabindex="-1"
                                                            role="dialog" aria-labelledby="exampleModalCenterTitle"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title text-capitalize"
                                                                            id="exampleModalLongTitle">
                                                                            Bill No: {{ $payment->bill_no }}
                                                                            payment
                                                                            details
                                                                        </h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>

                                                                    <div class="modal-body">
                                                                        <h6><strong>Objection No.</strong></h6>
                                                                        <p>{{ $payment->objection_no }}</p>
                                                                        <hr>

                                                                        <h6><strong>Objection Items</strong></h6>
                                                                        @if (count($payment->bill_items) > 0)
                                                                            <ul style="padding-left: 20px;">
                                                                                @foreach ($payment->bill_items as $key => $item)
                                                                                    <li>
                                                                                        <div
                                                                                            class="d-flex justify-content-between">
                                                                                            <p>{{ $item->description }}
                                                                                            </p>
                                                                                            <p>KES
                                                                                                {{ number_format($item->amount) }}
                                                                                            </p>
                                                                                        </div>
                                                                                    </li>
                                                                                @endforeach
                                                                            </ul>
                                                                        @endif
                                                                        <hr>

                                                                        <h6><strong>Paid By</strong></h6>
                                                                        <p>{{ $payment->billed_user }}</p>
                                                                        <hr>

                                                                        <div class="row">
                                                                            <div class="col-6">
                                                                                <h6><strong>Payment Date</strong>
                                                                                </h6>
                                                                                <p>{{ date('d M Y h:i A', strtotime($payment->created_at)) }}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <hr>

                                                                        <h6><strong>Payment Status</strong></h6>
                                                                        <span
                                                                            class="badge badge-pill d-inline badge-warning">{{ $payment->status }}</span>
                                                                        <hr>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-success btn-secondary"
                                                                            data-dismiss="modal">OK</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </tbody>

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
