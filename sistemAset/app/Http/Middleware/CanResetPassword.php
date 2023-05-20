<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CanResetPassword
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = User::where('email',$request->email)->first();
        if ($user->can_reset_password == 0) {
            return redirect('/lupaPassword')
                    ->with('resetIssues', 'Silahkan masukkan email Anda.');
        } else {
            return $next($request);
        }

        
    }
}
