<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {

<<<<<<< HEAD
                if (Auth::check() && Auth::user()->role == 'secretaria'){


                    return redirect('/user/dashboard');
=======
                if (Auth::check() && Auth::user()->role == 'cliente'){
                    return redirect('/');
                }

                if (Auth::check() && Auth::user()->role == 'user'){
                    return redirect('/utilizador/dashboard');
                }

                if (Auth::check() && Auth::user()->role == 'admin'){
                    return redirect('/admin/dashboard');
>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085
                }

            }
        }

        return $next($request);
    }
}
