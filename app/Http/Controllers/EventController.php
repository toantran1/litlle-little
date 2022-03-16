<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function event_dashboard(){
        return view('pages.event');
    }
    public function event_detail(){
        return view('pages.event_detail');
    }
}
