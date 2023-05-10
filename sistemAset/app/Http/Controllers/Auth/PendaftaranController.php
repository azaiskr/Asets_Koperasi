<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Mail; 

class PendaftaranController extends Controller
{
    public function register()
    {
        if (Auth::check()) {
            return redirect('/');
        }else{
            return view('login.daftar');
        }
    }

    public function actionregister(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], [
            'name.required' => 'Nama wajib diisi',
            'name.max' => 'Nama terlalu panjang',
            'email.email' => 'Masukkan dengan format email yang benar',
            'email.unique' => 'Email sudah terdaftar',
            'email.max' => 'Email terlalu panjang',
            'password.required' => 'Masukkan password',
            'password.min' => 'Masukkan setidaknya 8 karakter',
            'password.confirmed' => 'Password tidak sesuai',
        ]
        );

        $token = Str::random(64);

        $user = User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'token' => $token,
            'active' => 1
        ]);
  
        Mail::send('login.VerifikasiEmail', ['token' => $token], function($message) use($request){
              $message->to($request->email);
              $message->subject('Verifikasi Email Anda');
          });
        
        return redirect('/login')->with('verifikasi', 'Silahkan periksa email Anda');
    }

}
