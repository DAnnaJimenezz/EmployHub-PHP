<?php

namespace App\Http\Controllers;

use App\Http\Requests\RelacionRequest;
use App\Models\Relacion;
use App\Models\Tipo_usuario;
use Illuminate\Http\Request;

class RelacionController extends Controller
{
    public function Relacion (){

        $relaciones = Relacion::all();
        return view("relacion.index", ["relaciones"=> $relaciones]);
    }
    
    public function Create(){

        $tipo_usuarios = Tipo_usuario::all();
        return view('/relacion/create',['tipo_usuario'=> $tipo_usuarios]);
    }

    public function Store(RelacionRequest $request){

        $relacion = new Relacion($request->validated());
        $relacion->save();

        return redirect('relacion')->with('success',  'Relacion creada exitosamente');
    }

    public function Edit (Relacion $relacion){
        return view('relacion.edit', compact('relacion'));
    }


    public function Update(RelacionRequest $request, Relacion $relacion){
        
        $relacion->update($request->all()); 
        return redirect()->route('relacion');
    }

    public function Show(Relacion $relacion){
        return view ('relacion.show', compact('relacion'));
    }

    public function Destroy (Request $request, Relacion $relacion){ 
        $relacion->delete();
        return redirect()->route('relacion');
    }
}
