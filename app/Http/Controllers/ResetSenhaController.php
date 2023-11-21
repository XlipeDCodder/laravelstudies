<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResetSenhaController extends Controller
{
    public function reset(){
        return view('site.reset');
    }
}
