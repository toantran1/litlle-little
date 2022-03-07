<?php

namespace App\Http\Controllers;
use App\orderTicket; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
session_start();
class Paymentcontroller extends Controller
{
    public function payment_info(){
        return view('pages.payment');
    }

    public function get_info_payment(){
        $id = session::get('order_id');
        // dd($id);
        $orderTicket = orderTicket::all()->where('order_id',$id);
     
        return view('pages.payment')->with(compact('orderTicket'));
    }
}
