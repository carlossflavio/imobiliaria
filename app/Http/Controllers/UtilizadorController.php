<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UtilizadorController extends Controller
{
    //
    public function UtilizadorDashboard() {
        return view ('utilizador.index');
    }

    public function UtilizadorLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }// Logout para Admin
}
