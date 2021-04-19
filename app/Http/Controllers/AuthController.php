<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //

    public function signin()
    {
        return view('app');
    }

    public function authenticate(Request $request)
    {
        // dd($request->all());
        $url = config('global.url').'user/login/';

        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        // dd($data);

        $response = Http::post($url,$data);

        $created = json_decode($response->body());

        // dd($created);

        if(is_null($created))
        {
            return redirect()->back()->with('errors', 'An error occured.');
        }


        if(!$created->success)
        {
            return redirect()->back()->with('errors', $created->msg);
        }

        if(is_null($created->data)){

            return redirect()->back()->with('errors', $created->msg);
        }

        // dd($created);

        Session::put('user', $created->data);

        Session::put('Usertoken', $created->data->token);

        // dd(Session::all());

        $Session = Session::get('Usertoken');

        return redirect()->route('details');

    }

    public function registration(Request $request){
        // dd($request->all());
        $url = config('global.url').'register/client/';

        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'identification_no' => $request->identification_no,
        ];

        // dd($data);

        $response = Http::post($url,$data);

        $created = json_decode($response->body());

        // dd($created);

        if(is_null($created))
        {
            return redirect()->back()->with('errors', 'An error occured.');
        }

        if($created->success = false)
        {
            return redirect()->back()->with('error', $created->msg);
        }

        // dd($created);

        Session::put('register', $created->data);
        return redirect()->back()->with('success', $created->msg);

        // dd(Session::all());

    }


    public function forgotPassword()
    {
        return view('forgot_password');
    }

    public function requestPassword(Request $request)
    {
        // dd($request->all());
        $url = config('global.url').'Account/ForgotPassword';

        $data = [
            'email' => $request->email,
        ];

        // dd($data);

        $response = Http::withToken(Session::get('Usertoken'))->post($url,$data);

        $created = json_decode($response->body());

        // dd($created);

        if(is_null($created))
        {
            return redirect()->back()->with('errors', 'An error occured.');
        }

        if($created->status_code !=200)
        {
            return redirect()->back()->with('errors', $created->message);
        }

        // dd($created);
        return route('home')->with('success', $created->msg);

    }

    public function changePassword(Request $request)
    {
        // dd($request->all());
        $url = config('global.url').'user/change_password/';
        // dd($url);

        $data = [
            'email' => $request->Reset_email,
            'password' => $request->Sent_password,
            'new_password' => $request->Reset_password
        ];

        // dd($data);

        $response = Http::post($url,$data);
        // dd($response);

        $created = json_decode($response->body());

        // dd($created);

        if(is_null($created))
        {
            return redirect()->view('change-password')->with('errors', 'An error occured.');
        }

        if(!$created->success)
        {
            return redirect()->route('home')->with('errors', $created->msg);
        }

        // dd($created);

        return redirect()->route('home')->with('success', 'The password has been reset successfully.');

    }   


    public function resetPassword(Request $request)
    {
        // dd($request->all());
        $url = config('global.url').'user/forgot_password/';
        // dd($url);

        $data = [
            'email' => $request->Forgot_email,
        ];

        // dd($data);

        $response = Http::post($url,$data);
        // dd($response);

        $created = json_decode($response->body());

        // dd($created);

        if(is_null($created))
        {
            return redirect()->back()->with('errors', 'An error occured.');
        }

        if(!$created->success)
        {
            return redirect()->back()->with('errors', $created->msg);
        }

        // dd($created);

        return view('change-password')->with('success', $created->msg);


    }

    public function logout()
    {
        Session::flush('token');
        Session::flush('user');

        return redirect()->route('home');
    }
}