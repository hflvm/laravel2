<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function redirect($service){
        return Socialite::driver($service)->redirect();
    }

    public function callback($service){
       
        $user = [Socialite::with($service)->user()];
      
         $user[0]->name;
         //return $user;
       return view('auth\registerfb')->with('username',$user);
       
       
    }
}
