<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\orderTicket;
use App\OrderDetail;
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
        session::put('email_cus',$orderTicket->email);
       
    //  $get_order_id= Session::get('order_id');
     
    //     if(isset($get_order_id)){
            return redirect::to('/payment');    
        // }else{
        //     return redirect('/');
        // }   
            
        
        
    }
    public function delete_order(){
        $id = session::get('order_id');
        DB::table('tbl_order_ticket')->where('order_id',$id)->delete();
    }

    public function insert_order_detail(){
        $order_id= session::get('order_id');
       
        
        $data = request()->validate([
            'total_price' => 'required',          
            'quantity_ticket'=> 'required',
            'date_use'=> 'required',
            'username_order'=> 'required',
            'user_phone'=> 'required',
            'user_email'=>'required',
            'package_id'=>'required',
            'package_name'=>'required',
            'package_code'=>'required'

        ]);

        $orderDetail= new OrderDetail();
        $orderDetail->id = $order_id;
        $orderDetail->username_order = $data['username_order'];
        $orderDetail->email = $data['user_email'];
        $orderDetail->phone_number = $data['user_phone'];
        $orderDetail->quantity_ticket = $data['quantity_ticket'];
        $orderDetail->total_price = $data['total_price'];
        $orderDetail->package_id = $data['package_id'];
        $orderDetail->package_name = $data['package_name'];
        $orderDetail->package_code = $data['package_code'];
        $orderDetail->date_use = $data['date_use'];
        $orderDetail->status ="Payed";

        $orderDetail->save();

        Session::put('username', $orderDetail->username_order);
        Session::put('qty_ticket', $orderDetail->quantity_ticket);
        Session::put('Code_ticket', $orderDetail->package_code);
        Session::put('package_name_ticket',  $orderDetail->package_name);
        Session::put('date', $orderDetail->date_use);
        Session::put('price', $orderDetail->total_price);


        $this->delete_order();
        return redirect::to('/payment-success');
    }
}
