<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessorsController extends Controller
{
    public function professors(){
        $profs = [
            0 => [
                'nome' => 'Lynn Alves',
                'status' => 'Active',
                'cnpj' => '12.345.678/0001-00',
                'ddd' => '71', //Salvador
                'telefone' => null,
                'email' => 'teste123@gmail.com'
            ],

            1 => [
                'nome' => 'Luiz Marcio',
                'status' => 'Active',
                'cnpj' => '12.345.678/0001-00',
                'ddd' => '75', //Bahia Geral
                'telefone' => null,
                'email' => 'teste123@gmail.com'
            ]
        ]; 

        // dd($profs);

        
        return view('site.professors', compact('profs'));
    }
}
