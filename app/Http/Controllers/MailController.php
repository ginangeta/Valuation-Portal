<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailController extends Controller
{
   public function sendMail(Request $request) {

      // dd($request);

       $mail = new PHPMailer;

      //   $mail->SMTPDebug = 0;                                   
      //   $mail->isSMTP();                                        
      //   $mail->Host = 'smtp.gmail.com';                                             
      //   $mail->SMTPAuth = true;      
      //   $mail->SMTPSecure = 'tls';                            
      //   $mail->Port = 587;                              
        $mail->Username = 'valuation@nairobi.go.ke';             
        $mail->Password = 'Nairobi2021';                                            
        $mail->setFrom($mail->Username, 'NCCG Public Portal');
        $mail->addReplyTo($mail->Username, 'Valuation Email');
        
        $mail->isHTML(true);                                                                  
        $mail->Subject = 'Valuation Contact Us';
        $mail->Body    = $request->Mail_Comment;  
        try
        {
            $mail->addAddress($request->Mail_Email, $request->Mail_Name);
            $mail->send();
            $mail->clearAddresses();
        }
        catch (Exception $e)
        {
            echo "Mailer Error ({$request->Mail_Email}) {$mail->ErrorInfo}\n";
        }
        dd($mail);
   }

}
