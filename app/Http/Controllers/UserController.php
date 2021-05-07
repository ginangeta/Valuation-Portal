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

  
}
