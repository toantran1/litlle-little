<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
class HomeController extends Controller
{
    public function index(){
        return view('pages.home');
    }
    public function download_ticket(){
        // $file = "resources/views/pages/mail.blade.php";
        $file= public_path(). "/frontend/images/ticket-info.png";
        $headers = array(
            'Content-Type' => 'images/png',
        );
    
        return Response::download($file, 'InfoTicket.png', $headers);
    }
}
