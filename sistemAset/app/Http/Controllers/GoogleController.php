<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
        
            $user = Socialite::driver('google')->user();
         
            $finduser = User::where('id', $user->id)->first();
         
            if($finduser){
         
                Auth::login($finduser);
        
                return redirect('/');
         
            }else{
                $token = Str::random(64);

                $newUser = User::updateOrCreate(['email' => $user->email],[
                        'name' => $user->name,
                        'id'=> $user->id,
                        'password' => Hash::make($user->password),
                        'is_email_verified' => 1,
                        'token' => $user->token,
                    ]);
         
                Auth::login($newUser);
        
                return redirect('/');
            }
        
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
