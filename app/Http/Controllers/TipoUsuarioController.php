<?php

namespace App\Http\Controllers;

use App\Models\Tipo_usuario;
use Illuminate\Http\Request;

class TipoUsuarioController extends Controller
{
    public function Tipo_usuario (){

        $tipo_usuarios = Tipo_usuario::all();
        return view("tipo_usuario.index", compact("tipo_usuarios"));
    }
    
    public function Create(){
        return view('tipo_usuario.create');
    }

    public function Store(Request $request){

        Tipo_usuario::create($request->all());
        return redirect()->route('tipo_usuario');
    }

    public function Edit (Tipo_usuario $tipo_usuario){
        return view('tipo_usuario.edit', compact('tipo_usuario'));
    }


    public function Update(Request $request, Tipo_usuario $tipo_usuario){
        
        $tipo_usuario->update($request->all()); 
        return redirect()->route('tipo_usuario');
    }

    public function Show(Tipo_usuario $tipo_usuario){
        return view ('tipo_usuario.show', compact('tipo_usuario'));
    }

    public function Destroy (Request $request, Tipo_usuario $tipo_usuario){ 
        $tipo_usuario->delete();
        return redirect()->route('tipo_usuario');
    }
}
