<?php

namespace App\Http\Controllers\Cliente;

use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ClienteController extends Controller
{
    // public function DashboardCliente(){
    //     return view('pages.index');
    // }
    public function Index()
    {
        return view('pages.authentic.login');
    }

    public function ClienteRegister()
    {
        return view('pages.authentic.register');
    }

    public function Login(Request $request)
    {
        // Validação dos campos de entrada
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('cliente')->attempt($credentials)) {
            // Login bem-sucedido
            $notification = [
                'message' => 'Login efetuado com sucesso!',
                'alert-type' => 'success',
            ];
            return redirect()->route('pages.index')->with($notification);
        } else {
            // Login falhou
            $notification = [
                'message' => 'Email ou senha inválidos, por favor verifique seus dados.',
                'alert-type' => 'error',
            ];
            return back()->withInput()->with($notification);
        }
    }

    public function ClienteStore(Request $request )
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:clientes',
            'password' => 'required|min:8|confirmed',
        ],
        [
            'email.unique' => 'Este e-mail já exite!',
            'password.min'  => 'A password deve ter no minímo 8 caracters.',
            'password.confirmed' => 'A confirmação da password não corresponde à password.',
        ]);
       
        $cliente = Cliente::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'perfil_completo' => false,
        ]);

        $cliente->save();
     
        return redirect()->route('cliente.form')
        ->with('success', 'Cadastro feito com sucesso! Digite seu email e password para continuar.');
    }

    public function ClienteEdit(){

        $id = Auth::guard('cliente')->user()->id;
        $profileData = Cliente::find($id);

        return view('pages.cliente.cliente-profile', compact('profileData'));
    }

    public function ClienteUpdate(Request $request){

        $id = Auth::guard('cliente')->user()->id;
        $data = Cliente::find($id);
        $data->name = $request->name;
        $data->telefone = $request->telefone;
        $data->sobrenome = $request->sobrenome;
        $data->nif = $request->nif;
        $data->morada = $request->morada;
        $data->nacionalidade = $request ->nacionalidade;

        if ($request->file('imagem')) {
            $file = $request->file('imagem');
            @unlink(public_path('upload/cliente-imagem/' . $data->imagem));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/cliente-imagem'), $filename);
            $data['imagem'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Os seus dados foram actualizado com sucesso!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);


    }

    public function ClienteLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();


        $notification = array(
            'message' => 'Sessão Terminada com sucesso',
            'alert-type' => 'success'
        );

        return redirect()->route('cliente.form')->with($notification);
    } // Logout para Cliente
}
