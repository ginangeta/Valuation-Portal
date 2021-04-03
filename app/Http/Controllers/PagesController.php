<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
     public function home(){
        return view('app');
    }

    public function details(){
        return view('details');
    }

    public function objections(){
        $data = 'LR-45512 & LR-15485';
        $LrNumbers = array(
            'LrNumbers' => ['LR-45512', 'LR-15485']
        );
        // return view('objections', compact('LrNumber'));
        return view('objections')->with($LrNumbers);
    }
    public function receipt(){
        return view('receipt');
    }
    public function error(){
        return view('404');
    }

}
