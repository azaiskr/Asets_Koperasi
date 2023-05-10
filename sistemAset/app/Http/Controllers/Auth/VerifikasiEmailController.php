<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class VerifikasiEmailController extends Controller
{
    public function verifikasi($token)
    {
        $verif = User::where('token', $token)->first();
  
  
        if(!is_null($verif) ){
            //$user = $verif->user;
              
            if(!$verif->is_email_verified) {
                $verif->is_email_verified = 1;
                $verif->save();
            }
        }
        return redirect('/login');
    }
}
