<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class PropertiesController extends Controller
{
    public function singlePropertyUsv($lr_no){
        $url = config('global.url').'properties/?q='.$lr_no;

        $response = Http::withToken(Session::get('token'))->get($url);

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

        return view('usv', ['UsvDetails' => $created->results]);
        // return view('usv')->with($lr_no);
    }

    public function createObjections(Request $request){

        $objectingArray = array_combine($request->LRId, $request->LRNo);

        $url = config('global.url').'towns';
        $billerurl = 'https://pilot.revenuesure.co.ke/users/authenticate';

        $data = [
            'email' => "valuation@gmail.com",
            'password' => "123456789"
        ];

        $response = Http::withToken(Session::get('token'))->get($url);

        $BillerResponse = Http::withToken(Session::get('token'))->post($billerurl,$data);

        $BillerResponseData = json_decode($BillerResponse->body());

        $towns  = json_decode($response->body());

        $session = Session::get('token');

        return view('objections', [
            'objectingList' => $objectingArray, 
            'session' => $session,
            'towns' => $towns->results,
            'billerResponse' => $BillerResponseData->data->auth_token]);
    }
}
