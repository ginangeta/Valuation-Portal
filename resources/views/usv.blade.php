<!DOCTYPE html>
<html lang="en">

<link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="{{asset('vendors/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/flatpickr/flatpickr.min.css')}}">

<style>
    * {
        font-family: 'Montserrat', sans-serif;
        font-size: 11px;
        font-weight: 500;
    }

    strong {
        font-weight: bold;
    }

    body {
        -webkit-print-color-adjust: exact !important;
    }

    .print-btn {
        display: flex;
        z-index: 1000000000;
        position: absolute;
        background: #215939;
        color: white;
        top: 30px;
        right: -400px;
        border-radius: 50%;
        padding: 1rem;
        margin: 0px;
        border: none;
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: 1px 0px 20px 4px rgb(136 136 136 / 0.65);
        cursor: pointer;
        transition: 0.4s;

    }

    .print-btn img {
        height: 35px;
    }

    .print-btn:hover {
        transform: scale(1.2);
    }

    .round-border {
        border-bottom: 0.001in solid black;
        border-right: 0.001in solid black;
        border-left: 0.001in solid black;
    }

    .round-border-title {
        border-bottom: 0.001in solid black;
        border-left: 0.001in solid black;
    }

    @media print {

        /* All your print styles go here */
        .print-btn {
            display: none !important;
        }
    }

</style>


<!-- Mirrored from byrushan.com/projects/material-admin/app/2.6/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jul 2019 11:34:03 GMT -->

<head>

</head>

<body>
    <div class="page"
        style="width: 8.3in; position: relative; height: 11.7in; background-color: white; display: flex; flex-flow: column; padding: 0.2in;">
        <div style="margin-bottom: 0.05in; ">
            <!-- page number goes here -->

            <div style="flex-direction: column; display: flex; justify-content: center; align-items: center;">
                <p
                    style="width: 100%; text-align: center; font-size: 20px; color: black; font-weight: bold; margin-bottom: 10px;">
                    NAIROBI CITY COUNTY</p>
                <p
                    style="width: 100%; text-align: center; font-size: 12px; color: black;font-weight: bold; margin-top: 10px;">
                    DRAFT VALUATION ROLL</p>
                <img src="{{asset('demo/images/nairobi-county2.png')}}" style="height: 100px;">
            </div>
        </div>

        <div style="display: flex; flex-flow: column; align-content:end;">
            <span style="font-size: 10px;">P. O. Box 30037-00100, NAIROBI</span>
            <span style="font-size: 10px;" id="today">DATE: <… /DD/MM/YYYY/…></span>
        </div>

        <div class="" style="width: 100%; height: 10.7in">
            @foreach ($UsvDetails as $UsvDetail)

            <!-- ratable owner info -->
            <p
                style="width: 100%; text-align: center; border:0.001in solid black; font-size: 12px; color:black; font-weight: bold; margin: 0">
                RATABLE OWNER NAME AND ADDRESS
            </p>

            <div class="round-border" style="display: flex; width: 100%;">
                <div class="" style="padding: 0.2in; margin-bottom: 0.05in; width: 7.9in; height: auto;">
                    <h5
                        style="font-size: 15px; color:#215939; text-transform: capitalize; font-weight: bold; margin: 0px;">
                        {{$UsvDetail->owner}}</h5>
                    <div style="display:flex; font-size: 11px;">
                        <div style="display: flex; flex-flow: column;">
                            <span style="font-size: 13px;">P.O.BOX {{$UsvDetail->po_box}} - {{$UsvDetail->postal_code}} </span>
                            <span style="font-size: 13px;">{{$UsvDetail->address}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ratable owner info -->
            <!-- LAND REFERENCE NUMBER-->
            <p class="round-border"
                style="width: 100%; text-align: center; font-size: 12px; color:black; font-weight: bold; margin: 0">
                LAND REFERENCE NUMBER
            </p>

            <div class="round-border" style="display: flex; width: 100%;">
                <div class="" style="padding: 0.2in; margin-bottom: 0.05in; width: 7.9in; height: auto;">
                    <p
                        style="font-size: 15px; text-align: center; color:black; text-transform: capitalize; font-weight: bold; margin: 0px;">
                        {{$UsvDetail->lr_no}}
                    </p>
                </div>
            </div>
            <!-- LAND REFERENCE NUMBER -->
            <!-- PROPERTY DESCRIPTION -->
            <p class="round-border"
                style="width: 100%; text-align: center; font-size: 12px; color:black; font-weight: bold; margin: 0">
                PROPERTY DESCRIPTION
            </p>
            <div class="round-border" style="display: flex; flex-direction: row; flex-wrap: wrap; width: 100%;">
                <!-- Location -->
                <div style=" font-size: 16px; text-align: left; 
                        display: flex; flex-direction: column; flex-basis: 100%; flex: 2;">
                    <p
                        style="width: 100%; border-bottom: 0.001in solid black; text-align: left; font-size: 12px; color:black; padding-left: 0.2in; padding-bottom: 0.05in; font-weight: bold; margin: 0">
                        LOCATION
                    </p>
                    <p
                        style="font-size: 15px; padding: 0.2in;  text-align: left; color:black; text-transform: capitalize; font-weight: bold; margin: 0px;">
                        {{$UsvDetail->situation}}
                    </p>
                </div>
                <!-- Location -->
                <div style=" font-size: 16px; text-align: left; 
                        display: flex; flex-direction: column; flex-basis: 100%; flex: 1;">
                    <p
                        style="width: 100%; border-left: 0.001in solid black; text-align: left; font-size: 12px; color:black; padding-left: 0.2in; padding-bottom: 0.05in; font-weight: bold; margin: 0">
                        APPROX. AREA(Ha)
                    </p>
                    <p
                        style="font-size: 15px; padding: 0.2in; border-top: 0.001in solid black; border-left: 0.001in solid black; text-align: left; color:black; text-transform: capitalize; font-weight: bold; margin: 0px;">
                        {{$UsvDetail->approx_area}}
                    </p>
                </div>
            </div>
            <!-- PROPERTY DESCRIPTION -->
            <!-- USV-->
            <p class="round-border"
                style="width: 100%; text-align: center; font-size: 12px; color:black; font-weight: bold; margin: 0">
                UNIMPROVED SITE VALUE (KES)
            </p>

            <div class="round-border" style="display: flex; width: 100%;">
                <div class="" style="padding: 0.2in; margin-bottom: 0.05in; width: 7.9in; height: auto;">
                    <p
                        style="font-size: 18px; text-align: center; color:black; text-transform: capitalize; font-weight: bold; margin: 0px;">
                        {{number_format($UsvDetail->usv)}}
                    </p>
                </div>
            </div>
            <!-- USV -->
            <!-- USV -->
            <div class="round-border" style="display: flex; width: 100%;">
                <div class=""
                    style="padding: 0.2in; margin-bottom: 0.05in; padding-bottom:1.5in; width: 7.9in; height: auto;">
                    <p
                        style="font-size: 15px; text-align: left; color:black; text-transform: capitalize; font-weight: 500;">
                        The ratable owner is required within 28 days to raise an objection
                        from the date of the publication of the notice.
                    </p>
                    <p
                        style="font-size: 15px; text-align: left; color:black; text-transform: capitalize; font-weight: 500;">
                        An objection can be lodged online through the Draft Valuation
                        Inspection Portal (valuation.nairobi.go.ke) OR at the Valuation
                        Department Office, 4th Floor, City Hall.
                    </p>
                </div>
            </div>
            <!-- USV -->
            @endforeach
        </div>

        <!-- page footer -->
        <div
            style="width: 8.3in; position: relative; height: 11.7in; background-color: white; display: flex; flex-flow: column; padding: 0.2in;">

        </div>

        <button class="print-btn" onclick="window.print()"><img src="{{asset('images/printer.svg')}}" alt="Printer Icon"></button>

        <script src="{{asset('js/plugin.js')}}"></script>
        <script src="{{asset('vendors/moment/moment.min.js')}}"></script>
        <script>
                $('#today').html("DATE: "+(moment().format('DD/MM/YYYY')));
        </script>

</body>

<!-- Mirrored from byrushan.com/projects/material-admin/app/2.6/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jul 2019 11:34:43 GMT -->

</html>
