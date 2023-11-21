<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistroController extends Controller
{
    
    public function create(Request $request){
        if(auth()->check()){
            return view('site.principal')->with('ErrorMsg2','Desconecte para fazer um novo cadastro.');
        }return view('site.registro');
    }
    
    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        

        if(User::where('email','=',request('email'))->exists()){
            return view('site.registro')->with('ErrorMsg','Email ja existente.');
        }

        $user = User::create(request(['name', 'email', 'password']));
        
        auth()->login($user);
        
        return redirect()->to('/home');
    }
}

