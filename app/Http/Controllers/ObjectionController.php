<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class ObjectionController extends Controller
{    
    public function getReceipt(Request $request)
    {
        // dd($request->all());
        // $objectingArray = array_combine($request->LRId, $request->LRNo);

        $session = Session::get('Usertoken');

        return view('receipt', [
            'receipt' => $request, 
            'session' => $session]);

    }

    public function sendObjection(Request $request){
        // dd($request->all());
        $url = config('global.url').'property/objection/';
        $Asseturl = config('global.url').'attach/objection/files/';

        $files =  $request->files;
        $fileIdsArray = [];
        $uploadFiles = [];
        $uploadFileNames = [];

        $Assetresponse = Http::withToken(Session::get('Usertoken'));
        foreach($files as $k => $filebag)
        {
            foreach($filebag as $k => $file){
                 $file_name = $file->getClientOriginalName();
                 $file_content = fopen($file, 'r');
                 $data = file_get_contents($file);
                 $Assetresponse = $Assetresponse->attach('files', $file_content, $file_name);

                //  dd($Assetresponse);
                 array_push($uploadFiles, $data);
                 array_push($uploadFileNames, $file_name);
            }
        }

        // dd($Assetresponse);

        $Assetresponse = $Assetresponse->post($Asseturl);
        $Assetcreated = json_decode($Assetresponse->body());
        $DocumentIds = $Assetcreated->data->document_ids;

        // dd($DocumentIds);

        $data = [
            'fullname' => $request->fullname,
            'ratable_owner' => filter_var($request->ratable_owner, FILTER_VALIDATE_BOOLEAN),
            'ratable_relation' => $request->ratable_relation,
            'address' => $request->address,
            'postal_address' => $request->postal_address,
            'phone' => $request->phone,
            'town_id' => $request->town_id,
            'reasons' => $request->reasons,
            'properties' => $request->properties,
            'documents' => $DocumentIds,
        ];

        // dd($data);

        $response = Http::withToken(Session::get('Usertoken'))->post($url,$data);
        $created = json_decode($response->body());

        // dd($created);
        $billerurl = 'https://pilot.revenuesure.co.ke/users/authenticate';

        $billerdata = [
            'email' => "valuation@gmail.com",
            'password' => "123456789"
        ];


        $BillerResponse = Http::withToken(Session::get('Usertoken'))->post($billerurl,$billerdata);
        $BillerResponseData = json_decode($BillerResponse->body());
        // dd($BillerResponseData);

        if(is_null($created))
        {
            // dd($created);
            return redirect()->route('details')->with('errors', 'An error occured. Please try again');
        }

        // dd($created);

        if(!$created->success)
        {
            return redirect()->route('details')->with('errors', $created->msg);
        }

        if(is_null($created->data)){
            dd($created);
        }

        // dd($created);

        return view('payment', [
            'ObjectionBillInfo' => $created->data->bill_info,
            'billerResponse' => $BillerResponseData->data->auth_token]);

        // dd(Session::all());
    }

    public function sendNotFoundObjection(Request $request){
        // dd($request->all());

        $url = config('global.url').'property/not_found/objection/';
        $Asseturl = config('global.url').'attach/objection/files/';

        $files =  $request->files;
        $fileIdsArray = [];
        $uploadFiles = [];
        $uploadFileNames = [];

        $Assetresponse = Http::withToken(Session::get('Usertoken'));
        foreach($files as $k => $filebag)
        {
            foreach($filebag as $k => $file){
                 $file_name = $file->getClientOriginalName();
                 if(empty($file_name)){
                    return redirect()->route('details')->with('errors', 'An error occured. Rename your file with just letters and try again. Please try again');
                 }else if(!isset($file_name)){
                    return redirect()->route('details')->with('errors', 'An error occured. Rename your file with just letters and try again. Please try again');
                 }
                 
                 $file_content = fopen($file, 'r');
                 $data = file_get_contents($file);
                 $Assetresponse = $Assetresponse->attach('files', $file_content, $file_name);

                //  dd($Assetresponse);
                 array_push($uploadFiles, $data);
                 array_push($uploadFileNames, $file_name);
            }
        }

        // dd($Assetresponse);

        $Assetresponse = $Assetresponse->post($Asseturl);
        $Assetcreated = json_decode($Assetresponse->body());
        $DocumentIds = $Assetcreated->data->document_ids;

        // dd($DocumentIds);

        $data = [
            'fullname' => $request->fullname,
            'ratable_owner' => filter_var($request->ratable_owner, FILTER_VALIDATE_BOOLEAN),
            'ratable_relation' => $request->ratable_relation,
            'address' => $request->address,
            'postal_address' => $request->postal_address,
            'phone' => $request->phone,
            'town_id' => $request->town_id,
            'lr_no' => $request->lr_no,
            'po_box' => $request->postal_address,
            'approx_area' => $request->approx_area,
            'land_use' => $request->land_use,
            'documents' => $DocumentIds,
        ];

        // dd($data);

        $response = Http::withToken(Session::get('Usertoken'))->post($url,$data);
        $created = json_decode($response->body());

        // dd($created);
        $billerurl = 'https://pilot.revenuesure.co.ke/users/authenticate';

        $billerdata = [
            'email' => "valuation@gmail.com",
            'password' => "123456789"
        ];


        $BillerResponse = Http::withToken(Session::get('Usertoken'))->post($billerurl,$billerdata);
        $BillerResponseData = json_decode($BillerResponse->body());
        // dd($BillerResponseData);

        if(is_null($created))
        {
            // dd($created);
            return redirect()->route('details')->with('errors', 'An error occured. Please try again');
        }

        // dd($created);

        if(!$created->success)
        {
            return redirect()->route('details')->with('errors', $created->msg);
        }

        if(is_null($created->data)){
            dd($created);
        }

        // dd($created);

        return view('payment', [
            'ObjectionBillInfo' => $created->data->bill_info,
            'billerResponse' => $BillerResponseData->data->auth_token]);

        // dd(Session::all());
    }

    public function objectionBill($BillNo){
        // $url = config('global.url').'bills/?q='.$BillNo;

        // $response = Http::withToken(Session::get('Usertoken'))->get($url);

        // $created  = json_decode($response->body());

        // dd($created);

        $billerurl = 'https://pilot.revenuesure.co.ke/users/authenticate';

        $billerdata = [
            'email' => "valuation@gmail.com",
            'password' => "123456789"
        ];


        $BillerResponse = Http::withToken(Session::get('Usertoken'))->post($billerurl,$billerdata);
        $BillerResponseData = json_decode($BillerResponse->body());
        $BillerToken = $BillerResponseData->data->auth_token;
        // dd($BillerToken);

        $billurl = 'https://pilot.revenuesure.co.ke/billing/invoice';

        $billdata = [
            'billNo' => $BillNo
        ];
        
        $BillResponse = Http::withToken($BillerToken)->post($billurl,$billdata);
        $BillResponseData = json_decode($BillResponse->body());

        // dd($BillResponseData);


        if(is_null($BillResponseData))
        {
            return redirect()->back()->with('errors', 'An error occured.');
        }

        if($BillResponseData->status !=200)
        {
            return redirect()->back()->with('errors', 'Obtaining bill failed');
        }

        return view('bill', ['bill' => $BillResponseData->data]);
        // return view('usv')->with($lr_no);
    }

    public function initiateMpesaPayment(Request $request)
    {
    	$url = 'https://payme.revenuesure.co.ke/index.php';

    	$data = [
    		'function' => 'CustomerPayBillOnlinePush',
    		'PayBillNumber' => '367776',
    		'Amount' => (int)$request->amount,
    		'AccountReference' => $request->accountReference,
    		'TransactionDesc' => $request->transactionDesc,
    		'PhoneNumber' => $request->phoneNumber,
    		'FullNames' => $request->name
    	];

    	// dd($data);

    	$response = Http::asForm()->post($url, $data);

    	// dd($response);

    	$created =json_decode($response->body());

    	return response()->json($created);

    	// dd($created);
    }

    public function checkVerification(Request $request)
    {
    	$url = 'https://payme.revenuesure.co.ke/index.php';

    	$data = [
    		'function' => 'checkPaymentVerification',
    		'account_reference' => $request->billNo
    	];

    	$response = Http::asForm()->post($url, $data);

    	// dd($response);

    	$created =json_decode($response->body());

    	return response()->json($created);
    }

    public function getBillReceipt($BillNo)
    {
        $url = config('global.url').'receipts/?q='.$BillNo;

        $response = Http::withToken(Session::get('Usertoken'))->get($url);

        $created =json_decode($response->body());
        // dd($response);
    
        // dd($created->data[0]);

        $session = Session::get('Usertoken');

        return view('receipt', [
            'receipt' => $created->data[0], 
            'session' => $session]);


    }

    public function printReceipt($billNo){
        $billerurl = 'https://pilot.revenuesure.co.ke/users/authenticate';

        $billerdata = [
            'email' => "valuation@gmail.com",
            'password' => "123456789"
        ];


        $BillerResponse = Http::withToken(Session::get('Usertoken'))->post($billerurl,$billerdata);
        $BillerResponseData = json_decode($BillerResponse->body());
        $BillerToken = $BillerResponseData->data->auth_token;

        // $url = config('global.url').'receipts/?q='.$billNo;
        $url = "https://pilot.revenuesure.co.ke/invoice/receipt";

        $data = [
            'billNo' => $billNo,
            'payReferenceNo' => "",
            'receiptNo' => "",
            'multi' => ""
        ];

        $response = Http::withToken($BillerToken)->post($url, $data);
        

        $created =json_decode($response->body());
        // dd($response);
        
        return response()->json($created);

        // dd($created);
        
    }

    public function to_curl($url, $data){
        $headers = array(
            'Content-Type: application/json',
            'Authorization: JWT ' .$data['token'],
            'api-key:7935cf09148cbce9794db37be028260a',
            'Content-Length: ' . strlen(json_encode($data))
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        $output = curl_exec($ch);
        // dd($output);
        if (curl_errno($ch))
        {
            print "Error: " . curl_error($ch);
        }
        else
        {
            return $output;
        }
    }

    // public function sendObjection(Request $request){
    //     // dd($request->all());
    //     $url = config('global.url').'property/objection/';

    //     $data = [
    //         'token' => Session::get('Usertoken'),
    //         'fullname' => $request->fullname,
    //         'ratable_owner' => filter_var($request->ratable_owner, FILTER_VALIDATE_BOOLEAN),
    //         'ratable_relation' => $request->ratable_relation,
    //         'address' => $request->address,
    //         'postal_address' => $request->postal_address,
    //         'phone' => $request->phone,
    //         'town_id' => $request->town_id,
    //         'reasons' => $request->reasons,
    //         'properties' => $request->properties,
    //     ];

    //     // dd($data);

        
    //     $img = $_FILES['files'];
    //     $file_name = [];
    //     $file_content = [];
    //     // dd($data);
    //     // dd($img);

    //     function reArrayFiles($file)
    //     {
    //         $file_ary = array();
    //         $file_count = count($file['name']);
    //         $file_key = array_keys($file);

    //         for($i=0;$i<$file_count;$i++)
    //         {
    //             foreach($file_key as $val)
    //             {
    //                 // dd($val);
    //                 $file_ary[$i][$val] = $file[$val][$i];
    //             }
    //         }
    //         return $file_ary;

    //     }
    
    //     if(!empty($img))
    //     {
    //         $img_desc = reArrayFiles($img);
    //         // print_r((object)$img_desc);
    //         // dd($img_desc);

    //         $file_count = count($img_desc);
    //         $file_key = array_keys($img_desc);
    //         // dd($file_count);

    //         foreach($img_desc as $file)
    //         {
    //             // dd($file);
    //             $name = $file['name'];
    //             $content = fopen($file['tmp_name'], 'r');
    //             array_push($file_name, $name);
    //             array_push($file_content, $content);
    //         }

    //         dd($file_content);
        
    //     }

    //     // $files = $request->files;

    //     // $response = Http::withToken(Session::get('Usertoken'));
    //     //     foreach($files as $k => $file)
    //     //     {
    //     //              $response = $response->attach('file['.$k.']', $file);
    //     //     }
    //     //     $response = $response->post($url, $data);
    //     dd(Http::withToken(Session::get('Usertoken'))->attach('files', $file_name, $file_content));
            
    //     $response = Http::withToken(Session::get('Usertoken'))->attach('files', $file_name, $file_content)->post($url, $data);

    //     // $response = Http::withToken(Session::get('Usertoken'))->post($url, $data);
    //     $created = json_decode($response->body());

    //     // dd($created);
    //     $billerurl = 'https://pilot.revenuesure.co.ke/users/authenticate';

    //     $billerdata = [
    //         'email' => "valuation@gmail.com",
    //         'password' => "123456789"
    //     ];


    //     $BillerResponse = Http::withToken(Session::get('Usertoken'))->post($billerurl,$billerdata);
    //     $BillerResponseData = json_decode($BillerResponse->body());
    //     // dd($BillerResponseData);

    //     if(is_null($created))
    //     {
    //         // dd($created);
    //         return redirect()->route('details')->with('errors', 'An error occured. Please try again');
    //     }

    //     // dd($created);

    //     if(!$created->success)
    //     {
    //         return redirect()->route('details')->with('errors', $created->msg);
    //     }

    //     if(is_null($created->data)){
    //         dd($created);
    //     }

    //     return view('payment', [
    //         'ObjectionBillInfo' => $created->data->bill_info,
    //         'billerResponse' => $BillerResponseData->data->auth_token]);

    //     // dd(Session::all());
    // }
}
