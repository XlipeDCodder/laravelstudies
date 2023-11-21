<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal(){
        if(!auth()->check()){
            return redirect()->to('/login');
        }return view('site.principal');
        
    } 
}
