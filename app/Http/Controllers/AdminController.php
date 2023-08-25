<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function AdminDashboard() {
        return view ('admin.index');
    }

    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
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
        $data->telefone = $request->telefone;

        if ($request->file('imagem')) {
            $file = $request->file('imagem');
            @unlink(public_path('upload/admin-imagem/'.$data->imagem));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin-imagem'), $filename);
            $data['imagem'] = $filename;
        }

        $data->save();

        $notification = array (
            'message' => 'Perfil de Administrador actualizado com sucesso',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }

    public function AdminAlterar(){

        $id = Auth::user()->id;
        $profileData = User::find($id);

        return view('admin.admin-password', compact('profileData'));
    }

    public function AdminUpdatePassword (Request $request){

        //Validação
        $request ->validate([
            'old_password'=> 'required',
            'new_password'=> 'required|confirmed'
        ]);

        //Conrrespondência com a palavra-passe antiga

        if (!Hash::check($request->old_password, auth::user()->password)) {
            $notification = array (
                'message' => 'A Palavra-passe antiga não corresponde!',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }

        // Actualização da nova palavra-passe

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        $notification = array (
            'message' => 'A Palavra-passe foi actualizada com sucesso!',
            'alert-type' => 'success'
        );

        return back()->with($notification);

    }
}
