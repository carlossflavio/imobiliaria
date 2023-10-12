<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Imovel;
=======
>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index() {

        return view('pages.index');
    }
<<<<<<< HEAD
    public function MostrarImovel(){

        $imoveis = Imovel::all();
        $imoveis = Imovel::paginate(4);
        return view('pages.imoveis', compact('imoveis'));

    }
=======
>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085

}
