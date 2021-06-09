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

    <div class="modal fade" id="notfound" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLongTitle">PROPERTY NOT FOUND</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <center class="p-5">
                        <img class="errorImg" style="height: 300px !important;" src="{{ asset('/img/not-found.jpg') }}">
                    </center>
                    <h4 class="text-center mb-2 pb-2">OBJECT TO THE NEW DRAFT VALUATION ROLL</h4>

                    <h6 class="text-center" id="customer-info">Property NO: <strong id="property-number"></strong> could not
                        be found. Would you like to place an objection to the roll?</h6>


                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-success btn--icon-text px-5 d-none" data-dismiss="modal"
                        aria-label="Close">OK</button>
                    <form target="_blank" action="{{ route('objectNotFound') }}" method="post" id="get-objection">
                        @csrf
                        <input type="hidden" id="propertyNumber" name="propertyNumber" value="">

                    </form>

                    <button type="button" id="close" class="btn btn-outline-dark text-black btn--icon-text"
                        data-dismiss="modal" aria-label="Close">Close</button>

                    <button id="print-receipt" onclick="document.getElementById('get-objection').submit();"
                        class="btn btn-success btn--icon-text" data-dismiss="modal" aria-label="Close"><i
                            class="zmdi zmdi-check-all mr-2"></i>Yes, Object to the Roll</button>
                </div>
            </div>
        </div>
    </div>

    <!--Header ends-->
    <!--Breadcrumb section starts-->
    <div class="breadcrumb-section bg-h" style="background-image: url({{ asset('images/breadcrumb/breadcrumb_1.jpg') }})">
        <div class="overlay op-5"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mt-30">
                    <div class="breadcrumb-menu">
                        <h2>Search Property</h2>
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
                                    <p class="mb-0 mt-0">Enter property details as provided below</p>
                                    <small class="multiple-suggestion d-none mb-2">Once obtained, one can search for yet
                                        another property which will allow
                                        multiple property objection</small>
                                    <div class="input-group mb-3">
                                        <input type="text" id="searchcriteria" name="searchcriteria"
                                            class="form-control filter-input mt-0"
                                            placeholder="Search by Land Reference Number/Property Number">

                                        <button type="button"
                                            class="btn btn-primary btn-payment btn-searchcriteria text-white"
                                            id="search-property">Search for Property</a>
                                    </div>
                                </div>
                            </div>

                            <!--Listing Details starts-->
                            <div class="list-details-wrap bg-white">
                                <div id="description" class="list-details-section">
                                    <div class="row property-heading d-none">
                                        <div class="col-sm-12 col-lg-7">
                                            <h4 class="overview-content-header">Property details</h4>
                                            <div class="overview-content-details">
                                                <p class="">Below are the details on the searched property.</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-5">
                                            <div class="row d-flex flex-column align-content-end">
                                                <span class="zmdi zmdi-print text-success mb-1"> To print property
                                                    USV</span>
                                                <span class="zmdi zmdi-alert-triangle text-warning mb-1"> For single
                                                    property
                                                    objection</span>
                                                <span class="zmdi zmdi-delete text-danger"> To delete item from the
                                                    objection table</span>
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

                                        <div class="d-flex justify-content-center">
                                            <label for="searchcriteria" class="search-image">
                                                <img src="images/bg/search.jpg">
                                            </label>
                                        </div>

                                        <div class="table-responsive d-none">
                                            <table class="table table-sm table-bordered input-table" id="data-table">
                                                <thead>
                                                    <tr>
                                                        <th>LR No.</th>
                                                        <th>Situation</th>
                                                        <th>Ratable Owner</th>
                                                        <th>Approx. Area(Ha)</th>
                                                        <th>Unimproved Site Value (USV)</th>
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
            searchcriteria = searchcriteria.replace(/\s+/g, '');
            if (searchcriteria == '' || searchcriteria == null) {
                return;
            } else {
                console.log(searchcriteria);

                $.ajax({
                    url: "searchProperty/" + searchcriteria,
                    type: "GET",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Authorization': 'Bearer ' + '{{ Session::get('Usertoken') }}',
                    },
                    success: function(data) {

                        // console.log(data);
                        if (data == "") {
                            $('#notfound').modal('show');
                            $('#property-number').text(searchcriteria);
                            $('#propertyNumber').val(searchcriteria);
                            $('#searchcriteria').val('');

                            return;
                        }
                        if (data.count == 0) {
                            $('#notfound').modal('show');
                            $('#property-number').text(searchcriteria);
                            $('#propertyNumber').val(searchcriteria);
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
                                var term = results.id; // term you're searching for
                                var table = $("#data-table");
                                var firstTd = $("td:first", table);
                                var secondTd = firstTd.next();
                                var Serial = results.serial_no;
                                var SerialNo = Serial.split('-');

                                if (firstTd.text() == term) {
                                    swal('Error!',
                                        "You're trying to add an entry that already exists in the table",
                                        'error');

                                } else {
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
                                        '<td class="d-flex flex-row align-content-center"><a href="usv.singleproperty/' +
                                        Serial + '"' +
                                        `target="_blank" class="btn-print-usv ml-2 text-success" style="font-size: 20px !important; padding-right: 8px !important;"><i
                                                                                                                                                                                    class="zmdi zmdi-print"></i></a>` +
                                        '<a class="ml-2 text-warning" style="font-size: 20px !important; padding-right: 8px !important;" href="objection.singleproperty/' +
                                        Serial + '" target="_blank"><i' +
                                        ` class="zmdi zmdi-alert-triangle"></i></a>
                                                                                                                        <a class="ml-2 btn-remove-property text-info" style="font-size: 20px !important; padding-right: 8px !important;"><i
                                                                                                                        class="zmdi zmdi-delete text-danger"></i></a></td>`
                                    );
                                    $('#data-table tbody').append(rn);
                                    $('.property-heading').removeClass('d-none');
                                    $('.alert').addClass('d-none');
                                    $('.multiple-suggestion').removeClass('d-none');
                                }

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
    <script type="text/javascript">
        function printUSV(e) {
            e.preventDefault();

            var SerialNo = $(this).text();
            alert(SerialNo);
            console.log(SerialNo);

            let url =
                "usv.singleproperty/:LRNo";
            url = url.replace(':LRNo', SerialNo);
            // document.location.href = url;
            window.open(url);

        }

    </script>

    <script type="text/javascript">
        $('#searchcriteria').bind("enterKey", function(e) {
            $('.btn-searchcriteria').click();
        });

        $('#searchcriteria').keyup(function(e) {
            if (e.keyCode == 13) {
                $(this).trigger("enterKey");
            }
        });

    </script>
    <script type="text/javascript">
        function objectSingleUsv() {

            var SerialNo = String($(this).attr('id'));
            console.log(SerialNo);

            let url =
                "objection.singleproperty/:LRNo";
            url = url.replace(':LRNo', SerialNo);
            // document.location.href = url;
            window.open(url);
        }

    </script>
@endsection
