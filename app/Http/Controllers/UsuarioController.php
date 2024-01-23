<?php

namespace App\Http\Controllers;

use App\Models\Tipo_usuario;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UsuarioController extends Controller
{
    public function Usuario (){

        $usuario = Usuario::all();
        return view("usuario.index", ["usuario"=> $usuario]);
    }
    
    public function Create(){

        $tipo_usuarios = Tipo_usuario::all();
        return view('auth/register',['tipo_usuarios'=> $tipo_usuarios]);
    }

    public function Store(Request $request){

        $usuario = new Usuario();
        $usuario->username = $request->input('username');
        $usuario->email = $request->input('email');
        $usuario->id_user_types = $request->input('id_user_types');
        $usuario->password = Hash::make($request->password);
        $usuario->save();

        Mail::to($request['email'])->send(new WelcomeEmail($usuario));

        return view('auth.welcome');

        return redirect()->back()->with('mensaje',  'Usuario creado correctamente...');

    }

    public function Edit (Usuario $usuario){
        return view('usuario.edit', compact('usuario'));
    }

    public function Update(Request $request, Usuario $usuario){
        
        $usuario->update($request->all()); 
        return redirect()->route('usuario');
    }

    public function Show(Usuario $usuario){
        return view ('usuario.show', compact('usuario'));
    }

    public function Destroy (Request $request, Usuario $usuario){ 
        $usuario->delete();
        return redirect()->route('usuario');
    }
}
