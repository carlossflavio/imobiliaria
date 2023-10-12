<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Validation\Rules;

class UtilizadorController extends Controller
{

    public function Index()
    {
        return view ('utilizador.user-login');
    }


    public function Login(Request $request)
    {
        // dd($request->all());

        $verifica = $request->all();
        if (Auth::guard('web')->attempt(['email' => $verifica['email'], 'password' => $verifica['password']])) {

            $notification = array(
                'message' => 'Login efectuado com sucesso!',
                'alert-type' => 'info'
            );

            return redirect()->route('user.index')->with($notification);
        } else {
            $notification = array(
                'message' => 'Email ou Palavra-passe inválidos, por favor verifique seus dados!',
                'alert-type' => 'error'
            );

            return back()->with($notification);
        }
    }


    public function UserRegister()
    {
        return view('utilizador.user-add');
    }
    //
    public function UserDashboard()
    {
        return view('utilizador.user-index');
    }

    public function UserStore(Request $request){

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'sobrenome' => ['nullable', 'string', 'max:255'],
            'nif' => ['required', 'string', 'nif', 'max:21', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'nif' => ['nullable', 'string', 'max:255'],
            'telefone' => ['nullable', 'string', 'max:255'],
            'morada' => ['nullable', 'string', 'max:255'],
            'role' => ['required', 'string', 'in:secretaria,agente'],
            'status' => ['required', 'string', 'in:activo,inactivo'],
            'imagem' => ['nullable', 'image', 'max:2048'], // Max 2MB, pode ajustar conforme necessário
        ]);

        try {
            // Lidar com o upload da imagem
            $imagem = null;
            if ($request->hasFile('imagem')) {
                $uploadedImage = $request->file('imagem');
                if ($uploadedImage->isValid()) {
                    $imagem = $uploadedImage->storeAs('upload/User-imagem/imagem', uniqid('imagem_') . '.' . $uploadedImage->getClientOriginalExtension(), 'public');
                } else {
                    throw new \Exception('Erro ao fazer o upload da imagem.');
                }
            }

            $user = User::create([
                'name' => $request->name,
                'sobrenome' => $request->sobrenome,
                'nif' => $request->nif,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'nif' => $request->nif,
                'telefone' => $request->telefone,
                'morada' => $request->morada,
                'role' => $request->role,
                'status' => $request->status,
                'imagem' => $imagem,
            ]);

            event(new Registered($user));

            $notification = [
                'message' => 'Funcionário registrado com sucesso',
                'alert-type' => 'success',
            ];

            return redirect()->back()->with($notification);

        } catch (\Exception $e) {
            $notification = [
                'message' => 'Erro ao registrar o funcionário: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->back()->with($notification);
        }
    }

    public function UserLogout(Request $request)
=======
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UtilizadorController extends Controller
{
    //
    public function UtilizadorDashboard() {
        return view ('utilizador.index');
    }

    public function UtilizadorLogout(Request $request)
>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
<<<<<<< HEAD
    } // Logout para Admin
=======
    }// Logout para Admin
>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085
}
