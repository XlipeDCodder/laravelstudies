<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessorsController extends Controller
{
    public function professors(){
        $profs = [];
        return view('app.professors.index', compact('profs'));
    }
}
