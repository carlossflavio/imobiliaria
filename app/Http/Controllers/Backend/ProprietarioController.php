<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Proprietario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProprietarioController extends Controller
{
    //
    public function Index(){
        return view('proprietario.proprietario-login');
    }

    public function Login (Request $request){
        // dd($request->all());

        $verifica = $request->all();
        if (Auth::guard('proprietario')->attempt(['email' => $verifica['email'], 'password' => $verifica['password']])) {
            $notification = array(
                'message' => 'Login efectuado com sucesso!',
                'alert-type' => 'info'
            );

            return redirect()->route('admin.index')->with($notification);
        } else {
            $notification = array(
                'message' => 'Email ou Palavra-passe inválidos, por favor verifique seus dados!',
                'alert-type' => 'error'
            );

            return back()->with($notification);
        }
    }

    public function PropriDashboard (){

    }

    public function PropiRegister(){
        return view ('proprietario.proprietario-add');
    }

    public function PropiStore (Request $request){
        // validação dos dados do formulário
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'sobrenome' => ['nullable', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:proprietarios'],
        'password' => ['required', 'string', 'min:8'],
        'nif' => ['nullable', 'string', 'max:21'],
        'telefone' => ['nullable', 'string', 'max:255'],
        'nacionalidade' => ['nullable', 'string', 'max:255'],
        'profissao' => ['nullable', 'string', 'max:255'],
        'morada' => ['nullable', 'string', 'max:255'],
        'status' => ['required', 'string', 'in:activo,inactivo'],
        'imagem' => ['nullable', 'image', 'max:2048'], // Max 2MB, pode ajustar conforme necessário
    ]);

    try {
        //upload da imagem
        $imagem = null;
        if ($request->hasFile('imagem')) {
            $uploadedImage = $request->file('imagem');
            if ($uploadedImage->isValid()) {
                $imagem = $uploadedImage->storeAs('upload/proprietario-imagem', uniqid('imagem_') . '.' . $uploadedImage->getClientOriginalExtension(), 'public');
            } else {
                throw new \Exception('Erro ao fazer o upload da imagem.');
            }
        }

        // Criar novo proprietário com base nos dados do formulário
            Proprietario::create([
            'name' => $request->name,
            'sobrenome' => $request->sobrenome,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'nif' => $request->nif,
            'telefone' => $request->telefone,
            'nacionalidade' => $request->nacionalidade,
            'profissao' => $request->profissao,
            'morada' => $request->morada,
            'status' => $request->status,
            'imagem' => $imagem,
        ]);

        $notification = array(
            'message' => 'Proprietário registrado com sucesso',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } catch (\Exception $e) {
        $notification = array(
            'message' => 'Erro ao registrar o proprietário',
            'alert-type' => 'error'
        );

        return redirect()->back()->with($notification);
    }
    }
}
