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

        $session = Session::get('token');

        return view('receipt', [
            'receipt' => $request, 
            'session' => $session]);

    }

    public function sendObjection(Request $request){
        // dd($request->all());
        $url = config('global.url').'property/objection/';

        $data = [
            'token' => Session::get('token'),
            'fullname' => $request->fullname,
            'ratable_owner' => filter_var($request->ratable_owner, FILTER_VALIDATE_BOOLEAN),
            'ratable_relation' => $request->ratable_relation,
            'address' => $request->address,
            'postal_address' => $request->postal_address,
            'phone' => $request->phone,
            'town_id' => $request->town_id,
            'reasons' => $request->reasons,
            'properties' => $request->properties,
            'files' => $request->files,
        ];

        // dd(json_encode($data));

        // $response = Http::withToken("JWT ".Session::get('token'))->post($url,$data);
        // dd("JWT ".Session::get('token'));
        
        $created = json_decode($this->to_curl($url, $data));
        // $created = json_decode($response->body());

        // dd($created);
        $billerurl = 'https://pilot.revenuesure.co.ke/users/authenticate';

        $billerdata = [
            'email' => "valuation@gmail.com",
            'password' => "123456789"
        ];


        $BillerResponse = Http::withToken(Session::get('token'))->post($billerurl,$billerdata);
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

        return view('payment', [
            'ObjectionBillInfo' => $created->data->bill_info,
            'billerResponse' => $BillerResponseData->data->auth_token]);

        // dd(Session::all());
    }

    public function objectionBill($BillNo){
        // $url = config('global.url').'bills/?q='.$BillNo;

        // $response = Http::withToken(Session::get('token'))->get($url);

        // $created  = json_decode($response->body());

        // dd($created);

        $billerurl = 'https://pilot.revenuesure.co.ke/users/authenticate';

        $billerdata = [
            'email' => "valuation@gmail.com",
            'password' => "123456789"
        ];


        $BillerResponse = Http::withToken(Session::get('token'))->post($billerurl,$billerdata);
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
}
