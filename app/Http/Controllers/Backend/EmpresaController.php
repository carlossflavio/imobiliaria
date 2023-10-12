<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    //

    public function AllEmpresa()
    {

        $mostrar = empresa::latest()->get();
        return view('empresa.all', compact('mostrar'));
    }


    public function AdicionarEmpresa()
    {
        return view('empresa.add');
    }

    public function StoreEmpresa(Request $request)
    {

        //Validação
        $request->validate([
            'nif' => 'required|unique:empresas|max:21',
            'nome_empresa' => 'required|unique:empresas|max:200',
            'email_empresa' => 'required|unique:empresas|max:50',
            'telefone' => 'required|max:30',
            'localizacao' => 'required|max:30',
            'sobre_nos' => 'required',
        ]);
        empresa::insert([
            'nif' => $request->nif,
            'nome_empresa' => $request->nome_empresa,
            'email_empresa' => $request->email_empresa,
            'telefone' => $request->telefone,
            'localizacao' => $request->localizacao,
            'sobre_nos' => $request->sobre_nos,

        ]);

        $notification = array(
            'message' => 'Dados da empresa adicionado com sucesso!',
            'alert-type' => 'success'
        );

        return redirect()->route('todos.empresa')->with($notification);
    }

    public function EditarEmpresa($id)
    {

        $mostrar = empresa::findOrfail($id);

        return view('empresa.edit', compact('mostrar'));
    }

    public function UpdateEmpresa(Request $request)
    {

        $pid = $request->id;

        empresa::findOrfail($pid)->update([
            'nif' => $request->nif,
            'nome_empresa' => $request->nome_empresa,
            'email_empresa' => $request->email_empresa,
            'telefone' => $request->telefone,
            'localizacao' => $request->localizacao,
            'sobre_nos' => $request->sobre_nos,
        ]);

        $notification = array(
            'message' => 'Dados da empresa actualizados com sucesso!',
            'alert-type' => 'success'
        );

        return redirect()->route('todos.empresa')->with($notification);
    }

    public function EliminarEmpresa($id)
    {

        empresa::findOrfail($id)->delete();

        $notification = array(
            'message' => 'Dados da empresa eliminados com sucesso!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

}
