<?php

namespace App\Http\Controllers\Backend;

use App\Models\Cidade;
use App\Models\Imovel;
<<<<<<< HEAD
use App\Models\Status;
use App\Models\Distrito;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImovelController extends Controller
{

    public function TodosImovel()
    {
        $imoveis = Imovel::all();
        return view('admin.imoveis.all-imovel', compact('imoveis'));
=======
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
>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085
    }

    public function AdicionarImovel()
    {
<<<<<<< HEAD
        $cidades = Cidade::all();
        $distritos = Distrito::all();
        $status = Status::all();
        return view('admin.imoveis.add-imovel', compact('cidades', 'distritos', 'status'));
=======

        $cidades = Cidade::all();
        $distritos = Distrito::all();
        $tiposImovel = TipoImovel::all();
        $statusImoveis = StatusImovel::all();
        return view('imoveis.add-imovel', compact('cidades','distritos','statusImoveis', 'tiposImovel'));
>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085
    }

    public function StoreImovel(Request $request)
    {

<<<<<<< HEAD
        $request->validate([
            'titulo' => 'required|string|max:255',
            'tipo_negociacao' => 'required|in:venda,arrendamento',
            'preco' => 'required|numeric',
            'localizacao' => 'required|string|max:255',
            'imagem_frontal' => 'required|image|max:2048',
            'id_cidade' => 'required|exists:cidades,id',
            'id_distrito' => 'required|exists:distritos,id',
            'id_status' => 'required|exists:status,id',
            'descricao' => 'required|string',
            'tipo_imovel' => 'required|string|in:casa,apartamento,terreno', // Campo para selecionar o tipo de imóvel
        ]);


        $imovel = new Imovel([
            'titulo' => $request->input('titulo'),
            'tipo_negociacao' => $request->input('tipo_negociacao'),
            'preco' => $request->input('preco'),
            'localizacao' => $request->input('localizacao'),
            'descricao' => $request->input('descricao'),
            'imagem_frontal' => '',
            'imagens_outras' => [],
            'id_cidade' => $request->input('id_cidade'),
            'id_distrito' => $request->input('id_distrito'),
            'id_status' => $request->input('id_status'),
            'recursos_opcionais' => [],
            'informacoes_casa' => [],
            'informacoes_apartamento' => [],
            'informacoes_terreno' => [],
        ]);

        if ($request->hasFile('imagem_frontal')) {
            $imagemFrontal = $request->file('imagem_frontal');
            $nomeImagemFrontal = uniqid() . '.' . $imagemFrontal->getClientOriginalExtension();
            $caminhoImagemFrontal = $imagemFrontal->storeAs('public/upload/imoveis/imagens-frontais', $nomeImagemFrontal);
            $imovel->imagem_frontal = str_replace('public/', 'storage/', $caminhoImagemFrontal);
        }

        if ($request->hasFile('imagens_outras')) {
            $imagensOutras = $request->file('imagens_outras');
            foreach ($imagensOutras as $imagem) {
                $nomeImagem = uniqid() . '.' . $imagem->getClientOriginalExtension();
                $caminhoImagem = $imagem->storeAs('public/upload/imoveis/multiplas-imagens', $nomeImagem);
                $imagens_outras[] = str_replace('public/', 'storage/', $caminhoImagem);
            }
            $imovel->imagens_outras = json_encode($imagens_outras);
        }


        // Informações específicas com base no tipo de imóvel selecionado
        $tipoImovel = $request->input('tipo_imovel');

        if ($tipoImovel === 'casa') {

            $imovel->informacoes_casa = json_encode([
                'tipo' => 'casa',
                'num_quartos' => $request->input('num_quartos'),
                'num_banheiros' => $request->input('num_banheiros'),
                'num_suites' => $request->input('num_suites'),
                'salas' => $request->input('salas'),
                'cozinhas' => $request->input('cozinhas'),
                'garagem' => $request->input('garagem') ? true : false,
                'quintal' => $request->input('quintal') ? true : false,
            ]);
        } elseif ($tipoImovel === 'apartamento') {

            $imovel->informacoes_apartamento = json_encode([
                'tipo' => 'apartamento',
                'num_quartos' => $request->input('num_quartos'),
                'num_banheiros' => $request->input('num_banheiros'),
                'num_suites' => $request->input('num_suites'),
                'salas' => $request->input('salas'),
                'num_varandas' => $request->input('num_varandas'),
                'lugar_estacionamento' => $request->input('lugar_estacionamento') ? true : false,
            ]);
        } elseif ($tipoImovel === 'terreno') {

            $imovel->informacoes_terreno = json_encode([
                'tipo' => 'terreno',
                'latitude' => $request->input('latitude'),
                'longitude' => $request->input('longitude'),
                'tamanho' => $request->input('tamanho'),
                'zoneamento' => $request->input('zoneamento'),
            ]);
        }


        $imovel->save();

        $notification = array(
            'message' => 'Imóvel registrado com sucesso',
            'alert-type' => 'success'
        );

        return redirect()->route('imoveis.all')->with($notification);
    }

    public function EditImovel($id)
    {
        $imovel = Imovel::findOrFail($id); // Buscar o imóvel pelo ID
        $cidades = Cidade::all();
        $distritos = Distrito::all();
        $status = Status::all();
        return view('admin.imoveis.edit-imovel', compact('imovel', 'cidades', 'distritos', 'status'));
    }

    public function UpdateImovel(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'tipo_negociacao' => 'required|in:venda,arrendamento',
            'preco' => 'required|numeric',
            'localizacao' => 'required|string|max:255',
            'id_cidade' => 'required|exists:cidades,id',
            'id_distrito' => 'required|exists:distritos,id',
            'id_status' => 'required|exists:status,id',
            'descricao' => 'required|string',
            'tipo_imovel' => 'required|string|in:casa,apartamento,terreno',
        ]);

        // Buscar o imóvel com base em um campo único, como o título
        $imovel = Imovel::where('titulo', $request->input('titulo'))->first();

        if (!$imovel) {
            $notification = [
                'message' => 'Não é possível alterar o tipo de imóvel por favor registre um novo Imóvel!',
                'alert-type' => 'info',
            ];

            return redirect()->route('imoveis.add')->with($notification);
        }

        $imovel->update([
            'titulo' => $request->input('titulo'),
            'tipo_negociacao' => $request->input('tipo_negociacao'),
            'preco' => $request->input('preco'),
            'localizacao' => $request->input('localizacao'),
            'id_cidade' => $request->input('id_cidade'),
            'id_distrito' => $request->input('id_distrito'),
            'id_status' => $request->input('id_status'),
            'descricao' => $request->input('descricao'),
        ]);

        // Campos específicos com base no tipo de imóvel selecionado
        $tipoImovel = $request->input('tipo_imovel');

        if ($tipoImovel === 'casa') {
            $imovel->update([
                'informacoes_casa' => json_encode([
                    'tipo' => 'casa',
                    'num_quartos' => $request->input('num_quartos'),
                    'num_banheiros' => $request->input('num_banheiros'),
                    'num_suites' => $request->input('num_suites'),
                    'salas' => $request->input('salas'),
                    'cozinhas' => $request->input('cozinhas'),
                    'garagem' => $request->input('garagem') ? true : false,
                    'quintal' => $request->input('quintal') ? true : false,
                ])
            ]);
        } elseif ($tipoImovel === 'apartamento') {
            $imovel->update([
                'informacoes_apartamento' => json_encode([
                    'tipo' => 'apartamento',
                    'num_quartos' => $request->input('num_quartos'),
                    'num_banheiros' => $request->input('num_banheiros'),
                    'num_suites' => $request->input('num_suites'),
                    'salas' => $request->input('salas'),
                    'num_varandas' => $request->input('num_varandas'),
                    'lugar_estacionamento' => $request->input('lugar_estacionamento') ? true : false,
                ])
            ]);
        } elseif ($tipoImovel === 'terreno') {
            $imovel->update([
                'informacoes_terreno' => json_encode([
                    'tipo' => 'terreno',
                    'latitude' => $request->input('latitude'),
                    'longitude' => $request->input('longitude'),
                    'tamanho' => $request->input('tamanho'),
                    'zoneamento' => $request->input('zoneamento'),
                ])
            ]);
        }

        $notification = [
            'message' => 'Imóvel atualizado com sucesso',
            'alert-type' => 'success',
        ];

        return redirect()->route('imoveis.all')->with($notification);
    }

    public function DeleteImovel($id)
{
    // Encontre o imóvel pelo ID
    $imovel = Imovel::find($id);

    if (!$imovel) {
        $notification = [
            'message' => 'Imóvel não encontrado',
            'alert-type' => 'error',
        ];

        return redirect()->route('imoveis.all')->with($notification);
    }

    // Exclua o imóvel
    $imovel->delete();

    $notification = [
        'message' => 'Imóvel excluído com sucesso',
        'alert-type' => 'success',
    ];

    return redirect()->back()->with($notification);
}
=======
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


>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085
}
