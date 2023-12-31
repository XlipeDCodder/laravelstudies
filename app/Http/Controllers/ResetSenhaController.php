<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class ResetSenhaController extends Controller
{
    public function reset(){
        return view('site.reset');
    }

    public function resetpost(Request $request){
        $request->validate([
            'email' => "required|email|exists:users"
        ]);

        $token = Str::random(length:64);

        DB::table(table:'password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);

        Mail::send("site.resetmail", ['token' => $token], function ($message) use ($request){
            $message->to($request->email);
            $message->subject("Reset de senha");
        });
            
        return redirect()->to(route('site.reset'));
    }

    public function resetlink($token){
        return view ("novasenha", compact('token'));
    }


    public function novasenha(Request $request){
        $request->validate([
            'email' => "required|email|exists:users",
            'password' => "required|string|min:6|confirmed",
            'password_confirmation' => "required" 
        ]);

        $updateSenha = DB::table('password_reset_tokens')->where([
            "email" => $request->email,
            "token" => $request->token,
        ])->first();
        if(!$updateSenha){
            return redirect()->to(route('site.resetlink'));
        }
    }

}
