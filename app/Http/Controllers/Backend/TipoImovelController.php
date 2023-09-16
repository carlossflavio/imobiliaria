<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TipoImovel;
use App\Models\Tipologia;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\CssSelector\Node\FunctionNode;

class TipoImovelController extends Controller
{
    //
//     public function TodosTipos()
//     {

//         $tipos = TipoImovel::latest()->get();
//         return view('imoveis.tipos.todos-tipos', compact('tipos'));
//     }


//     public function AdicionarTipo()
//     {
//         return view('imoveis.tipos.add-tipos');
//     }

//     public function StoreTipo(Request $request)
//     {

//         //Validação
//         $request->validate([
//             'nome_tipo' => 'required|unique:tipo_imovels|max:200'
//         ]);

//         TipoImovel::insert([
//             'nome_tipo' => $request->nome_tipo,
//         ]);

//         $notification = array(
//             'message' => 'Tipo de imóvel Adicionado com sucesso!',
//             'alert-type' => 'success'
//         );

//         return redirect()->route('todos.tipos')->with($notification);
//     }

//     public function EditarTipo($id)
//     {

//         $tipos = TipoImovel::findOrfail($id);

//         return view('imoveis.tipos.edit-tipos', compact('tipos'));
//     }

//     public function UpdateTipo(Request $request)
//     {

//         $pid = $request->id;

//         TipoImovel::findOrfail($pid)->update([
//             'nome_tipo' => $request->nome_tipo,
//         ]);

//         $notification = array(
//             'message' => 'Tipo de imóvel actualizado com sucesso!',
//             'alert-type' => 'success'
//         );

//         return redirect()->route('todos.tipos')->with($notification);
//     }

//     public function EliminarTipo($id)
//     {

//         TipoImovel::findOrfail($id)->delete();

//         $notification = array(
//             'message' => 'Tipo de imóvel eliminado com sucesso!',
//             'alert-type' => 'success'
//         );

//         return redirect()->back()->with($notification);
// //     }
// // }

public function AdicionarTipo()
{
 
    return view('imoveis.tipos.add-tipos');
}

    public function TodosTipos()
    {
        $tipos = TipoImovel::latest()->get();
        return view('imoveis.tipos.todos-tipos', compact('tipos'));
    }
    
    public function StoreTipo(Request $request)
    {
        $request->validate([
            'nome_tipo' => 'required|unique:tipo_imovels|max:200',
        ]);

        TipoImovel::create([
            'nome_tipo' => $request->nome_tipo,
        ]);

        $notification = [
            'message' => 'Tipo de imóvel adicionado com sucesso!',
            'alert-type' => 'success',
        ];

        return redirect()->route('todos.tipos')->with($notification);
    }

    public function EditarTipo($id)
    {
        $tipo = TipoImovel::findOrFail($id);
        return view('imoveis.tipos.edit-tipos', compact('tipo'));
    }

    public function UpdateTipo(Request $request)
    {
        $pid = $request->id;

        $request->validate([
            'nome_tipo' => 'required|max:200',
        ]);

        TipoImovel::findOrFail($pid)->update([
            'nome_tipo' => $request->nome_tipo,
        ]);

        $notification = [
            'message' => 'Tipo de imóvel atualizado com sucesso!',
            'alert-type' => 'success',
        ];

        return redirect()->route('todos.tipos')->with($notification);
    }

    public function EliminarTipo($id)
    {
        TipoImovel::findOrFail($id)->delete();

        $notification = [
            'message' => 'Tipo de imóvel eliminado com sucesso!',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }
}

