<?php

namespace App\Http\Controllers\Cliente;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;


class ClienteController extends Controller
{
    //

    public function VerPerfil() {
        return view ('pages.index');
    }

    public function LoginCliente() {
        return view ('pages.authentic.login');
    }

    public function AddCliente(){
        return view ('pages.authentic.register');
    }

    public function RegistrarCliente(Request $request) {

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'nif' => $request->nif,
            'telefone' => $request->telefone,
            'password' => Hash::make($request->password),
            'role' => 'cliente',
            'status' => 'activo',
        ]);


        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::CLIENTE);
    }


    public function LogoutCliente(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();



        return redirect('/');
    } // Logout para Cliente


}
