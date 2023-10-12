<?php

namespace App\Http\Controllers\Backend;

use App\Models\Cidade;
use App\Models\Imovel;
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
    }

    public function AdicionarImovel()
    {
        $cidades = Cidade::all();
        $distritos = Distrito::all();
        $status = Status::all();
        return view('admin.imoveis.add-imovel', compact('cidades', 'distritos', 'status'));
    }

    public function StoreImovel(Request $request)
    {

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
}
