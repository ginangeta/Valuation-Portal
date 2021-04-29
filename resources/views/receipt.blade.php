<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body data-new-gr-c-s-check-loaded="8.872.0" data-gr-ext-installed="">
    <img style="position:absolute;top:0.90in;left:1.37in;width:1.07in;height:1.04in" src="receipt/ri_1.png">
    <div style="position:absolute;top:0.47in;left:1.50in;width:3.99in;line-height:0.38in;"><span
            style="font-style:normal;font-weight:bold;font-size:22pt;font-family:Times;color:#000000">NAIROBI CITY
            COUNTY</span><span
            style="font-style:normal;font-weight:bold;font-size:22pt;font-family:Times;color:#000000"> </span><br></div>
    <div style="position:absolute;top:0.95in;left:2.45in;width:2.37in;line-height:0.13in;"><span
            style="font-style:italic;font-weight:normal;font-size:8pt;font-family:Times;color:#000000">Tel No:
            020-344194,0725-624489,0735-825383</span><span
            style="font-style:italic;font-weight:normal;font-size:8pt;font-family:Times;color:#000000"> </span><br>
    </div>
    <div style="position:absolute;top:1.16in;left:2.9in;line-height:0.13in;"><a
            href="mailto:valuation@nairobi.go.ke"><span
                style="font-style:italic;font-weight:normal;font-size:8pt;font-family:Times;color:#000000">Email:
                valuation@nairobi.go.ke</span></a>
        <span style="font-style:italic;font-weight:normal;font-size:8pt;font-family:Times;color:#000000"> </span><br>
    </div>
    <div style="position:absolute;top:1.38in;left:3.44in;width:0.58in;line-height:0.13in;"><span
            style="font-style:italic;font-weight:normal;font-size:8pt;font-family:Times;color:#000000">Emergency</span><span
            style="font-style:italic;font-weight:normal;font-size:8pt;font-family:Times;color:#000000"> </span><br>
    </div>
    <div style="position:absolute;top:1.59in;left:3.21in;width:1.07in;line-height:0.13in;"><span
            style="font-style:italic;font-weight:normal;font-size:8pt;font-family:Times;color:#000000">Tel No:
            020-2222181</span><span
            style="font-style:italic;font-weight:normal;font-size:8pt;font-family:Times;color:#000000"> </span><br>
    </div>
    <div style="position:absolute;top:2.01in;left:2.30in;width:3.84in;line-height:0.22in;"><span
            style="font-style:normal;font-weight:normal;font-size:13pt;font-family:Times;color:#000000;white-space: nowrap;">Fee
            Description RECEIPT</span><span
            style="font-style:normal;font-weight:normal;font-size:13pt;font-family:Times;color:#000000"> </span><br>
    </div>
    <img style="position:absolute;top:2.20in;left:1.50in;width:3.86in;height:0.02in" src="receipt/vi_1.png">
    <div style="position:absolute;top:2.46in;left:0.43in;width:0.75in;line-height:0.17in;"><span
            style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#000000">Receipt
            No</span><span style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#000000">
        </span><br></div>
    <div style="position:absolute;top:2.4in;left:2.15in;width:1.06in;line-height:0.14in;"><span
            style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Times;color:#000000; white-space:nowrap">{{ $receipt->receipt_no }}</span><span
            style="font-style:normal;font-weight:bold;font-size:8pt;font-family:Times;color:#000000">
        </span><br></div>
    <img style="position:absolute;top:2.57in;left:1.16in;width:3.14in;height:0.01in" src="receipt/vi_2.png">
    <div style="position:absolute;top:2.46in;left:4.29in;width:0.34in;line-height:0.17in;"><span
            style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#000000">Date</span><span
            style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#000000"> </span><br></div>
    <div style="position:absolute;top:2.4in;left:4.72in;width:1.07in;line-height:0.14in;"><span
            style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Times;color:#000000">{{ date('d-m-Y', strtotime($receipt->receipt_date)) }}</span><br>
    </div>
    <img style="position:absolute;top:2.57in;left:4.72in;width:1.30in;height:0.01in" src="receipt/vi_3.png">
    <div style="position:absolute;top:2.85in;left:0.43in;width:1.54in;line-height:0.17in;"><span
            style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#000000">Payment received
            from</span><span style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#000000">
        </span><br></div>
    <div style="position:absolute;top:2.80in;left:2.19in;width:0.91in;line-height:0.12in;"><span
            style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Times;color:#000000;white-space:nowrap">{{ $receipt->receipt_name }}</span><span
            style="font-style:normal;font-weight:bold;font-size:7pt;font-family:Times;color:#000000"> </span><br></div>
    <img style="position:absolute;top:2.96in;left:1.97in;width:2.33in;height:0.01in" src="receipt/vi_4.png">
    <div style="position:absolute;top:2.85in;left:4.29in;width:0.41in;line-height:0.17in;"><span
            style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#000000;white-space:nowrap">of
            KES</span><span style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#000000">
        </span><br></div>
    <div style="position:absolute;top:2.79in;left:5.15in;width:0.45in;line-height:0.14in;"><span
            style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Times;color:#000000;white-space:nowrap">{{ $receipt->receipt_amount }}</span><br>
    </div>
    <img style="position:absolute;top:2.96in;left:4.93in;width:1.08in;height:0.01in" src="receipt/vi_5.png">
    <div style="position:absolute;top:3.24in;left:0.43in;width:0.61in;line-height:0.17in;"><span
            style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#000000">In
            words</span><span style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#000000">
        </span><br></div>
    <div style="position:absolute;top:3.22in;left:1.63in;width:0.21in;line-height:0.14in;"><span
            style="font-style:normal;font-weight:bold;font-size:8pt;font-family:Times;color:#000000">***</span><br>
    </div>
    <div style="position:absolute;top:3.22in;left:1.89in;width:1.35in;line-height:0.14in;"><span
            style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Times;color:#000000;white-space:nowrap;text-transform: uppercase;">{{ $receipt->receipt_amount_words }}
            ***</span>
        <span style="font-style:normal;font-weight:bold;font-size:8pt;font-family:Times;color:#000000"> </span><br>
    </div>
    <img style="position:absolute;top:3.35in;left:0.98in;width:5.03in;height:0.01in" src="receipt/vi_6.png">
    <!-- <img style="position:absolute;top:3.39in;left:2.34in;width:1.77in;height:1.77in" src="t0.png" /> -->
    <div style="position:absolute;top:3.62in;left:0.43in;width:0.27in;line-height:0.17in;"><span
            style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#000000">For</span><span
            style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#000000"> </span><br></div>
    <div style="position:absolute;top:3.6in;left:0.8in;width:0.68in;line-height:0.14in;"><span
            style="font-style:normal;font-weight:bold;font-size:9pt;font-family:Times;color:#000000;white-space:nowrap">{{ $receipt->receipt_desc }}
        </span><span style="font-style:normal;font-weight:bold;font-size:8pt;font-family:Times;color:#000000">
        </span><br></div>
    <img style="position:absolute;top:3.73in;left:0.73in;width:5.29in;height:0.01in" src="receipt/vi_7.png">
    <div style="position:absolute;top:4.01in;left:0.43in;width:0.56in;line-height:0.17in;"><span
            style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#000000">Paid
            via</span><span style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#000000">
        </span><br></div>
    <div style="position:absolute;top:4.02in;left:1.72in;width:0.45in;line-height:0.14in;"><span
            style="font-style:normal;font-weight:bold;font-size:12pt;font-family:Times;color:#000000;white-space:nowrap">M-PESA</span><br>
    </div>
    <img style="position:absolute;top:4.16in;left:1.07in;width:4.95in;height:0.01in" src="receipt/vi_8.png">
    <img style="position:absolute;top:4.29in;left:3.86in;width:2.16in;height:0.27in" src="receipt/vi_9.png">
    <div style="position:absolute;top:4.38in;left:3.91in;width:0.67in;line-height:0.14in;"><span
            style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#000000;white-space: nowrap;">Bill
            Amount</span><span style="font-style:normal;font-weight:bold;font-size:8pt;font-family:Times;color:#000000">
        </span><br></div>
    <div style="position:absolute;top:4.38in;left:5.42in;width:0.45in;line-height:0.14in;text-align: end;"><span
            style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#000000">{{ $receipt->billed_amount }}
        </span><br></div>
    <img style="position:absolute;top:4.55in;left:3.86in;width:2.16in;height:0.27in" src="receipt/vi_10.png">
    <div style="position:absolute;top:4.64in;left:3.91in;width:0.95in;line-height:0.14in;"><span
            style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#000000;white-space: nowrap;">Amount
            Received</span><br></div>
    <div style="position:absolute;top:4.64in;left:5.42in;width:0.45in;line-height:0.14in; text-align: end;"><span
            style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#000000">{{ $receipt->receipt_amount }}</span><br>
    </div>
    <img style="position:absolute;top:4.81in;left:3.86in;width:2.16in;height:0.27in" src="receipt/vi_11.png">
    <div style="position:absolute;top:4.90in;left:3.91in;width:0.44in;line-height:0.14in;"><span
            style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#000000">Balance</span><br>
    </div>
    <div style="position:absolute;top:4.90in;left:5.42in;width:0.45in;line-height:0.14in; text-align: end;"><span
            style="font-style:normal;font-weight:bold;font-size:10pt;font-family:Times;color:#000000">{{ $receipt->bill_balance }}</span><br>
    </div>

    <div
        style="display:flex; justify-content:space-between;position:absolute;top:5.26in;left:0.43in;width:5.6in;line-height:0.13in;">

        <div style="">
            <span style="font-style:italic;font-weight:normal;font-size:8pt;font-family:Times;color:#000000">Served
                by</span>
            <span style="font-style:italic;font-weight:normal;font-size:8pt;font-family:Times;color:#000000"><strong>NCCG
                    Draft Valuation System</strong>
            </span>
        </div>

        <div style="">
            <span style="font-style:italic;font-weight:normal;font-size:8pt;font-family:Times;color:#000000">Bill
                No</span>
            <span style="font-style:italic;font-weight:normal;font-size:8pt;font-family:Times;color:#000000">
                <strong>{{ $receipt->receipt_no }}</strong>
            </span>
        </div>

        <div style="">
            <span style="font-style:italic;font-weight:normal;font-size:8pt;font-family:Times;color:#000000">Acc No:
                <strong>1-2101</strong>
            </span>
        </div>

        <div style="">
            <span style="font-style:italic;font-weight:normal;font-size:8pt;font-family:Times;color:#000000">Date:
                <strong>{{ date('d-m-Y', strtotime($receipt->receipt_date)) }}</strong>
            </span>
        </div>
        <img style="position:absolute;top: 5.25in;left:5.15in;width: 0.64in;/* height:0.34in */" src="receipt/NBk.png">
    </div>
</body>

</html>
