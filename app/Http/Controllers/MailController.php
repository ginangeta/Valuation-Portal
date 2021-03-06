<?php

namespace App\Http\Controllers;

use Mail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class MailController extends Controller
{
   public function sendMail(Request $request) {

    $url = config('global.url').'send/email/';
    // dd($url);

    $data = [
        'name' => $request->Mail_Name,
        'subject' => $request->Mail_Subject,
        'email' => $request->Mail_Email,
        'body' => $request->Mail_Comment
    ];

    // dd($data);

    $response = Http::post($url,$data);
    // dd($response);

    $created = json_decode($response->body());

    // dd($created);

    if(is_null($created))
    {
        return redirect()->route('home')->with('Email_errors', 'An error occured. Email not sent.');
    }

    if(!$created->success)
    {
        return redirect()->route('home')->with('Email_errors', $created->msg);
    }

    // dd($created);

    return redirect()->route('home')->with('Email_success', 'Email was sent successfully.');
   }

}
