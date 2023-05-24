<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Mail; 

class ResetPasswordController extends Controller
{
    public function reset(Request $request)
    {
        User::select('email')->where('email',$request->email);

        Mail::send('login.ResetPassword', ['email' => $request->email], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password Anda');
        });

        return redirect('/login')->with('reset', 'Silahkan periksa email Anda');
    }

    public function verifikasi($email)
    {
        $verif = User::where('email', $email)->first();
  
        if(!is_null($verif) ){
            //$user = $verif->user;

            if($verif->can_reset_password == 0) {
                $verif->can_reset_password = 1;
                $verif->save();
            }
        }

        $email = User::where('email', $email)->first();
        return redirect()->route('user.edit',['email'=>$email->email]);
    }

    public function edit($email)
    {
        $email = User::where('email', $email)->get();
        return view('login.EditPassword', ['email' => $email]);
    }

    public function update(Request $request)
    {
        //DB::table('aset_tetaps')->where('id_Aset',$request->id_Aset)->update(['nama_Aset' => $request->nama_Aset]);
        //User::where(auth()->user()->email)->update([
          //  'password' => Hash::make($request->password)
        //]);

        //return back()->with("status", "Password changed successfully!");
        $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], [
            'password.required' => 'Masukkan password',
            'password.min' => 'Masukkan setidaknya 8 karakter',
            'password.confirmed' => 'Password tidak sesuai',
        ]
        );
        DB::table('users')->where('email',$request->email)->update([
            'password' => Hash::make($request->password),
            'can_reset_password' => $request->status
        ]);
       // User::where('email',$request->email)->update([]);
        
        return redirect('/login');
    }
}
