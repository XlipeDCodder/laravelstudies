<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function contact(){
        
        return view('site.contact');
    }
}
