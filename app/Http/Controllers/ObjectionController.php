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
        $url = config('global.url').'property/objection';

        $data = [
            'fullname' => $request->fullname,
            'ratable_owner' => $request->ratable_owner,
            'ratable_relation' => $request->ratable_relation,
            'address' => $request->address,
            'postal_address' => $request->postal_address,
            'phone' => $request->phone,
            'town_id' => $request->town_id,
            'reasons' => $request->reasons,
            'properties' => $request->properties,
            'files' => $request->files,
        ];

        // dd($data);

        $response = Http::withToken(Session::get('token'))->post($url,$data);

        $created = json_decode($response->body());

        // dd($created);

        if(is_null($created))
        {
            return redirect()->back()->with('errors', 'An error occured.');
        }

        if($created->success = false)
        {
            return redirect()->back()->with('errors', $created->msg);
        }

        if(is_null($created->data)){
            dd($created);
        }

        return view('payment', ['ObjectionBillInfo' => $created->data->bill_info]);

        // dd(Session::all());
    }

    public function objectionBill($BillNo){
        $url = config('global.url').'bills/?q='.$BillNo;

        $response = Http::withToken(Session::get('token'))->get($url);

        $created  = json_decode($response->body());

        // dd($created);


        if(is_null($created))
        {
            return redirect()->back()->with('errors', 'An error occured.');
        }

        if($created->count = 0)
        {
            return redirect()->back()->with('errors', 'Obtaining bill failed');
        }

        return view('bill', ['BillInfo' => $created->results]);
        // return view('usv')->with($lr_no);
    }
}
