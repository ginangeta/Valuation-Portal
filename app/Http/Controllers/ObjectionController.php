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
}
