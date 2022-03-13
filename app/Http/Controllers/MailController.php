<?php

namespace App\Http\Controllers;
use App\OrderDetail; 
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
class MailController extends Controller
{
    
    public function send_mail(){
      
        $to_name = "Đầm Sen Park System";
        $to_email = session::get('email_cus');
       

        $data= array("name"=>"abc", "body"=>"xyz");

        Mail::send('pages.mail',$data,function($message) use($to_name,$to_email){
            $message->to($to_email)->subject('Information your Ticket!');
            $message->from($to_email,$to_name);
        });

        return redirect('/payment-success')->with('message','');
       
    }
}
