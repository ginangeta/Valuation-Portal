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
    <div class="breadcrumb-section bg-h" style="background-image: url({{ asset('images/breadcrumb/breadcrumb_1.jpg') }})">
        <div class="overlay op-5"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <div class="breadcrumb-menu">
                        <h2>Property details</h2>
                        <span><a href="{{ route('home') }}">Home</a></span>
                        <span>property details</span>
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
                                    <h3 class="site-heading text-black mb-0">Search For Property</h3>
                                    <p class="mb-2 mt-0">Fill in the input below to search for a particular
                                        property. Once obtained, one can search for yet another property which will allow
                                        multiple property objection.</p>
                                    <div class="input-group mb-3">
                                        <input type="text" id="searchcriteria" name="searchcriteria"
                                            class="form-control filter-input mt-0"
                                            placeholder="Search by serial number, lr no or owner name">

                                        <button type="button"
                                            class="btn btn-primary btn-payment btn-searchcriteria text-white"
                                            id="search-property">Search for Property</a>
                                    </div>
                                </div>
                            </div>

                            <!--Listing Details starts-->
                            <div class="list-details-wrap bg-white">
                                <div id="description" class="list-details-section">
                                    <h4 class="overview-content-header">Property details</h4>
                                    <div class="overview-content-details">
                                        <p class="">Below are the details on the searched property.</p>
                                        <small>Click either: 
                                            <span class="zmdi zmdi-print text-success font-12"> To print property USV</span> ,
                                            <span class="zmdi zmdi-alert-triangle text-warning font-12"> For single property objection</span> ,
                                            <span class="zmdi zmdi-delete text-danger font-12"> To delete item from the objection table</span>
                                        </small>
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

                                        <div class="d-flex justify-content-center">
                                            <label for="searchcriteria" class="search-image">
                                                <img src="images/bg/search.jpg">
                                            </label>
                                        </div>

                                        <div class="table-responsive d-none">
                                            <table class="table table-sm table-bordered input-table table-striped"
                                                id="data-table">
                                                <thead>
                                                    <tr>
                                                        <th>LR No.</th>
                                                        <th>Situation</th>
                                                        <th>Owner</th>
                                                        <th>Approx. Area(Ha)</th>
                                                        <th>Property Unimproved Site Value (USV)</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="usv-btns d-none">
                                            <button type="submit" class="btn btn-danger center mb-3 py-2 btn-control">Submit
                                                Objection To USV</a>
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
    <script type="text/javascript">
        function numberWithCommas(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        $('.btn-searchcriteria').on('click', function(e) {
            e.preventDefault();
            var searchcriteria = $('#searchcriteria').val();
            if (searchcriteria == '' || searchcriteria == null) {
                return;
            } else {
                console.log(searchcriteria);

                $.ajax({
                    url: "{{ config('global.url') }}" + 'properties/?q=' + searchcriteria,
                    type: "GET",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {

                        // console.log(data);
                        if (data == "") {
                            swal('Error!', 'Property not found', 'error');
                            $('#searchcriteria').val('');

                            return;
                        }
                        if (data.count == 0) {
                            swal('Error!', 'Property not found', 'error');
                            $('#searchcriteria').val('');

                            return;

                        } else if (data.count > 0) {
                            $('#searchcriteria').val('');
                            $('.search-image').addClass('d-none');
                            $('.table-responsive').removeClass('d-none');
                            $('.usv-btns').removeClass('d-none');

                            $.each(data.results, function(index, results) {
                                var rn = $('<tr class=""></tr>');
                                var item_num = index + 1;


                                // var LRNo = $('.LRNo').html();

                                // var term = results.id; // term you're searching for
                                // var column = 0; // which column to search
                                // var pattern = new RegExp(term,
                                //     'g'); // make search more flexible 
                                // var table = document.getElementById('dataTable');
                                // if (document.getElementById("dataTable").rows.length != 0) {
                                //     var tr = table.getElementsByTagName('tr');
                                //     for (var i = 0; i < tr.length; i++) {
                                //         var td = tr[i].getElementsByTagName('TD');
                                //         for (var j = 0; j < td.length; j++) {
                                //             if (j == column && td[j].innerHTML == term) {

                                //                 // for more flexibility use match() function and the pattern built above
                                //                 // if(j == column && td[j].innerHTML.match(pattern)){

                                //                 console.log('Found it: ' + td[j].innerHTML);
                                //             }
                                //         }
                                //     }
                                // }


                                //first approach to add data (not flexible)
                                // rn.append('<td>' + item_num + '</td>');
                                rn.append('<td class="LRId d-none">' + results.id +
                                    '<input name="LRId[]" class="d-none" value="' +
                                    results
                                    .id + '" required> </td>');
                                rn.append('<td class="LRNo">' + results.lr_no +
                                    '<input name="LRNo[]" class="d-none" value="' +
                                    results
                                    .lr_no + '" required> </td>');
                                var Link = 5;
                                rn.append('<td><p class="mb-0">' + results.situation +
                                    '</p></td>');
                                rn.append('<td>' + results.owner + '</td>');
                                rn.append('<td>' + results.approx_area + '</td>');
                                rn.append('<td>KES ' + numberWithCommas(results.usv) +
                                    '</td>');
                                rn.append(
                                    '<td class="d-flex flex-row align-content-center"><a onclick="printUSV(' +
                                    results.serial_no + ');"' +
                                    `class="btn-print-usv ml-2 text-success" style="font-size: 20px !important; padding-right: 8px !important;"><i
                                                class="zmdi zmdi-print"></i></a>`+
                                                '<a class="ml-2 text-warning" style="font-size: 20px !important; padding-right: 8px !important;" onclick="objectSingleUsv(' +results.serial_no + ');"><i'+
                                                        ` class="zmdi zmdi-alert-triangle"></i></a>
                                                <a class="ml-2 btn-remove-property text-info" style="font-size: 20px !important; padding-right: 8px !important;"><i
                                                class="zmdi zmdi-delete text-danger"></i></a></td>`
                                );
                                $('#data-table tbody').append(rn);

                                $('.btn-remove-property').on('click', function(e) {
                                    e.preventDefault();
                                    $(this).parent().parent().remove();
                                });

                            });

                            return;
                        }
                    }
                });
            }
        });

    </script>
    <script>
        function printUSV(SerialNo) {
            // alert(LRNo1);
            let url =
                "usv.singleproperty/:LRNo";
            url = url.replace(':LRNo', SerialNo + '.0');
            document.location.href = url;
        }

    </script>
    <script type="text/javascript">
        function objectSingleUsv(SerialNo) {
            // alert(LRNo1);
            let url =
                "objection.singleproperty/:LRNo";
            url = url.replace(':LRNo', SerialNo + '.0');
            document.location.href = url;
        }

    </script>
@endsection
