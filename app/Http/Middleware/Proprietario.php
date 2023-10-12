<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Proprietario
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!Auth::guard('proprietario')->check()){

            $notification = [
                'message' => 'Você não está autorizado a acessar esta página como proprietários.',
                'alert-type' => 'error',
            ];

            return redirect()->route('proprietario.form')->with($notification);
        }
        return $next($request);
    }
}
