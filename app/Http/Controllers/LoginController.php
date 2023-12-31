<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
   public function login(){
      if(auth()->check()){
        return redirect()->to('/home');
      }else
      return view('site.login');
   }
   public function store()
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return view('site.login')->with('ErrorMsg1','Senha incorreta.');
        }
        
        return redirect()->to('/home');
    }
    
    public function destroy()
    {
        auth()->logout();
        
        return redirect()->to('/login');
    }
}



