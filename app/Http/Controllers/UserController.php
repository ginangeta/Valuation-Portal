<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{    
    public function ClientBills(){
        $url = config('global.url').'client_bills/';

        $response = Http::withToken(Session::get('Usertoken'))->get($url);

        $created  = json_decode($response->body());

        // dd($created);

        if(is_null($created))
        {
            return redirect()->back()->with('errors', 'An error occured.');
        }

        if($created->count = 0)
        {
            return redirect()->back()->with('errors', 'Obtaining property usv failed');
        }

        return view('client-bills', ['payments' => $created->results]);
        // return view('usv')->with($lr_no);
    }

    public function ClientObjections(){
        $url = config('global.url').'client_objections/';

        $response = Http::withToken(Session::get('Usertoken'))->get($url);

        $created  = json_decode($response->body());

        // dd($created);

        if(is_null($created))
        {
            return redirect()->back()->with('errors', 'An error occured.');
        }

        if($created->count = 0)
        {
            return redirect()->back()->with('errors', 'Obtaining property usv failed');
        }

        return view('client-objections', ['Objections' => $created->results]);
        // return view('usv')->with($lr_no);
    }

    public function withdrawObjection(Request $request){
        // dd($request->all());
        $url = config('global.url').'withdraw_objection/';

        $data = [
            'objection_id' => $request->objection_id,
            'property_id' => $request->property_id

        ];

        // dd($data);

        $response = Http::withToken(Session::get('Usertoken'))->post($url,$data);
        $created = json_decode($response->body());

        if(is_null($created))
        {
            // dd($created);
            return redirect()->route('ClientObjections')->with('errors', 'An error occured. Please try again');
        }

        // dd($created);

        if(!$created->success)
        {
            return redirect()->route('ClientObjections')->with('errors', $created->msg);
        }

        if(is_null($created->data)){
            dd($created);
        }

        // dd($created);

        return redirect()->route('ClientObjections')->with('success', $created->msg);

    
    }  
}
