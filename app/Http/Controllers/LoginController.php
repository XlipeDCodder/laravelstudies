<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
   public function login(){
      return view('site.login');
   }

   public function store()
   {
       if (auth()->attempt(request(['email', 'password'])) == false) {
           return back();
       }
       
       return redirect()->to('/home');
   }

   public function destroy()
   {
       auth()->logout();
       
       return redirect()->to('/login');
   }

}
