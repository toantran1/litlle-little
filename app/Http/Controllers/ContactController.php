<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\Redirect;
class ContactController extends Controller
{
    public function contact_page(){
        return view('pages.contact');
    }

    public function send_recommend(){
        
        $data = request()->validate([
            'contact_name' => 'required',
            'contact_email'=> 'required',
            'contact_phone'=> 'required',
            'cus_address'=> 'required',
            'message_cus'=> 'required',
          
        ]);

        $contact = new Contact;

        $contact->cusName = $data['contact_name'];
        $contact->email = $data['contact_email'];
        $contact->phone = $data['contact_phone'];
        $contact->address = $data['cus_address'];
        $contact->message = $data['message_cus'];
        $contact->save();

        return redirect::to('/');
    }
}
