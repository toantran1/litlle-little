<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orderTicket;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class joinPackageController extends Controller
{
    function index(){
      $id = session::get('order_id');
       $result = DB::table('tbl_order_ticket')
       ->join('tbl_packageticket','tbl_order_ticket.package_id',"=" ,'tbl_packageticket.package_id')
       ->where('tbl_order_ticket.order_id',$id)
       ->get(['tbl_packageticket.package_price',
              'tbl_packageticket.package_code',
              'tbl_packageticket.package_name',
              'tbl_order_ticket.package_id',
              'tbl_order_ticket.quantity_ticket',
              'tbl_order_ticket.date_use',
              'tbl_order_ticket.user_order',
              'tbl_order_ticket.phone_number',
              'tbl_order_ticket.email',
              'tbl_order_ticket.order_id']);

              if(isset($id) && $result == true){
                return view('pages.payment')->with(compact('result'));
                
              }else{
                return redirect('/');
              }   
    }
}
