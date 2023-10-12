<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Admin;
use App\Models\Horarios;
=======
use App\Models\User;
>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
<<<<<<< HEAD
    public function Index()
    {
        return view('admin.admin-login');
    }

    public function AdminDashboard()
    {
        return view('admin.admin-index');
    }

    public function Login(Request $request)
    {
        // dd($request->all());

        $verifica = $request->all();
        if (Auth::guard('admin')->attempt(['email' => $verifica['email'], 'password' => $verifica['password']])) {
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

=======
    public function AdminDashboard() {
        return view ('admin.admin-index');
    }

    public function AdminLogin() {
        return view('admin.admin-login');
    }

>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085
    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

<<<<<<< HEAD

        $notification = array(
            'message' => 'Sessão Terminada com sucesso',
            'alert-type' => 'success'
        );

        return redirect()->route('login.form')->with($notification);
    } // Logout para Admin

    public function AdminProfile()
    {


        $id = Auth::guard('admin')->user()->id;
        $profileData = Admin::find($id);


        return view('admin.admin-profile', compact('profileData'));
    } // Editar perfil Admin

    public function AdminProfileStore(Request $request)
    {

        $id = Auth::guard('admin')->user()->id;
        $data = Admin::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
=======
        return redirect('/admin/login');
    }// Logout para Admin

    public function AdminProfile(){

        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('admin.admin-profile', compact('profileData'));
    }// Editar perfil Admin

    public function AdminProfileStore(Request $request){

        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->morada = $request->morada;
>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085
        $data->telefone = $request->telefone;

        if ($request->file('imagem')) {
            $file = $request->file('imagem');
<<<<<<< HEAD
            @unlink(public_path('upload/admin-imagem/' . $data->imagem));
            $filename = date('YmdHi') . $file->getClientOriginalName();
=======
            @unlink(public_path('upload/admin-imagem/'.$data->imagem));
            $filename = date('YmdHi').$file->getClientOriginalName();
>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085
            $file->move(public_path('upload/admin-imagem'), $filename);
            $data['imagem'] = $filename;
        }

        $data->save();

<<<<<<< HEAD
        $notification = array(
=======
        $notification = array (
>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085
            'message' => 'Perfil de Administrador actualizado com sucesso',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
<<<<<<< HEAD
    }

    public function AdminAlterar()
    {

        $id = Auth::guard('admin')->user()->id;
        $profileData = Admin::find($id);
=======

    }

    public function AdminAlterar(){

        $id = Auth::user()->id;
        $profileData = User::find($id);
>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085

        return view('admin.admin-password', compact('profileData'));
    }

<<<<<<< HEAD
    public function AdminUpdatePassword(Request $request)
    {

        //Validação
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed'
=======
    public function AdminUpdatePassword (Request $request){

        //Validação
        $request ->validate([
            'old_password'=> 'required',
            'new_password'=> 'required|confirmed'
>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085
        ]);

        //Conrrespondência com a palavra-passe antiga

<<<<<<< HEAD
        if (!Hash::check($request->old_password, Auth::guard('admin')->user()->password)) {
            $notification = [
                'message' => 'A Palavra-passe antiga não corresponde!',
                'alert-type' => 'error'
            ];
=======
        if (!Hash::check($request->old_password, auth::user()->password)) {
            $notification = array (
                'message' => 'A Palavra-passe antiga não corresponde!',
                'alert-type' => 'error'
            );
>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085
            return back()->with($notification);
        }

        // Actualização da nova palavra-passe

<<<<<<< HEAD
        Admin::whereId(Auth::guard('admin')->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        $notification = array(
=======
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        $notification = array (
>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085
            'message' => 'A Palavra-passe foi actualizada com sucesso!',
            'alert-type' => 'success'
        );

        return back()->with($notification);
<<<<<<< HEAD
    }

                                        //CADASTRAR HORÁRIOS

    public function  CreateHorarios()
    {
        return view('admin.horarios.add-horarios');
    }

    public function StoreHorarios(Request $request)
    {
        // Validação dos dados do formulário
        $request->validate([
            'data_disponivel' => 'required|date',
            'horario_inicio' => 'required|date_format:H:i',
            'horario_fim' => 'required|date_format:H:i|after:horario_inicio',
        ]);

        // Armazenar o horário disponível
        Horarios::create($request->all());

            $notification = array(
                'message' => 'Horário disponível cadastrado com sucesso',
                'alert-type' => 'success'
            );

            return redirect()->route('horario.all')->with($notification);
    }

    public function AllHorarios (){

        $horario = Horarios::all();
        return view ('admin.horarios.all-horarios', compact('horario'));
    }

=======

    }
>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085
}
