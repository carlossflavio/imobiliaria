<?php

namespace App\Http\Controllers;

use App\Models\Imovel;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index() {

        return view('pages.index');
    }
    public function MostrarImovel(){

        $imoveis = Imovel::all();
        $imoveis = Imovel::paginate(4);
        return view('pages.imoveis', compact('imoveis'));

    }

}
