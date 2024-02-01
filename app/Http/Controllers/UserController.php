<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeEmail;
use App\Models\Tipo_usuario;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function User (){

        $users = User::all();
        return view("users.index", ["users"=> $users]);
    }
    
    public function Create(){

        $tipo_usuarios = Tipo_usuario::all();
        return view('auth/register',['tipo_usuario'=> $tipo_usuarios]);
    }

    public function Store(Request $request){

        $user = new User();
        $user->username = $request->input('username');
        $user->correo_electronico = $request->input('correo_electronico');
        $user->id_tipo_usuario = $request->input('id_tipo_usuario');
        $user->password = Hash::make($request->password);
        $user->save();

        Mail::to($request['correo_electronico'])->send(new WelcomeEmail($user));

        return view('auth.welcome');

        return redirect()->back()->with('mensaje',  'User creado correctamente...');
    }

    public function Edit (User $usuario){
        return view('usuario.edit', compact('usuario'));
    }

    public function Update(Request $request, User $usuario){
        
        $usuario->update($request->all()); 
        return redirect()->route('usuario');
    }

    public function Show(User $usuario){
        return view ('usuario.show', compact('usuario'));
    }

    public function Destroy (Request $request, User $usuario){ 
        $usuario->delete();
        return redirect()->route('usuario');
    }
}
