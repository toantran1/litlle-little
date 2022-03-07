<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\orderTicket;
session_start();
class OrderTicketController extends Controller
{
    public function insert_orderTicket(){
        $sId = session_id();

        $data = request()->validate([
            'package' => 'required',
            'quantity_ticket'=> 'required',
            'date_book'=> 'required',
            'username_order'=> 'required',
            'phone'=> 'required',
            'email'=>'required'
        ]);

        $orderTicket = new orderTicket;

        $orderTicket->sId = $sId;
        $orderTicket->user_order = $data['username_order'];
        $orderTicket->email = $data['email'];
        $orderTicket->phone_number = $data['phone'];
        $orderTicket->quantity_ticket = $data['quantity_ticket'];
        $orderTicket->package_id = $data['package'];      
        $orderTicket->date_use = $data['date_book'];

        $orderTicket->save();
        Session::put('order_id',$orderTicket->order_id);
        return redirect('/payment');      
        
    }
}
