<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PackageTicket;
class PackageController extends Controller
{
    public function show_package(){
        $packageTicket = PackageTicket::all();
        return view('pages.home')->with(compact('packageTicket'));
    }
}
