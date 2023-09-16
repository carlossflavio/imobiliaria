<?php

namespace App\Http\Controllers\Backend;

use App\Models\Cidade;
use App\Models\Imovel;
use App\Models\Distrito;
use App\Models\TipoImovel;
use App\Models\MultiImagem;
use App\Models\StatusImovel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


class ImovelController extends Controller
{
    //

    public function TodosImovel()
    {
        $imoveis = Imovel::latest()->get();
        return view('imoveis.all-imovel', compact('imoveis'));
    }

    public function AdicionarImovel()
    {

        $cidades = Cidade::all();
        $distritos = Distrito::all();
        $tiposImovel = TipoImovel::all();
        $statusImoveis = StatusImovel::all();
        return view('imoveis.add-imovel', compact('cidades','distritos','statusImoveis', 'tiposImovel'));
    }

    public function StoreImovel(Request $request)
    {

        $imagens = [];
        $imovel = Imovel::create([
            'titulo' => $request->titulo,
            'tipo_negociacao' => $request->tipo_negociacao,
            'qtd_cozinha' => $request->qtd_cozinha,
            'qtd_sala' => $request->qtd_sala,
            'qtd_quartos' => $request->qtd_quartos,
            'qtd_suite' => $request->qtd_suite,
            'qtd_wc' => $request->qtd_wc,
            'quintal' => $request->quintal,
            'varanda' => $request->varanda,
            'dispensa' => $request->dispensa,
            'area_servico' => $request->area_servico,
            'descricao' => $request->descricao,
            'preco' => $request->preco,
            'dimensao' => $request->dimensao,
            'localizacao' => $request->localizacao,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'id_cidade' => $request->id_cidade,
            'id_distrito' => $request->id_distrito,
            'id_tipo_imovel' => $request->id_tipo_imovel,
            'id_status_imovel' => $request->id_status_imovel,
            'imagens' => json_encode($imagens),
        ]);


        if ($request->hasFile('imagens')) {
            foreach ($request->file('imagens') as $image) {
                $path = $image->store('imagens/imoveis/' . $imovel->id, 'public');
                $imagens[] = $path;
            }
        }


        $notification = [
            'message' => 'Imóvel adicionado com sucesso!',
            'alert-type' => 'success',
        ];

        return redirect()->route('all.imoveis')->with($notification);

    }
    public function EditarImovel($id)
    {
        $imoveis = Imovel::findOrFail($id);
        $cidades = Cidade::all();
        $distritos = Distrito::all();
        $statusImoveis = StatusImovel::all();
        return view('imoveis.edit-imovel', compact('imoveis', 'cidades','distritos','statusImoveis'));
    }


}
