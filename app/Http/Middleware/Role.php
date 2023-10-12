<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        //Se os dados do login forem diferntes da tabela user no campo role retorna a página incial
        if ($request->user()->role !== $role) {
<<<<<<< HEAD

            $notification = [
                'message' => 'Você não está autorizado a acessar esta página como Funcionário.',
                'alert-type' => 'error',
            ];

            return redirect()->route('user.form')->with($notification);
        }


=======
            return redirect('/');
        }
>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085
        return $next($request);
    }
}
