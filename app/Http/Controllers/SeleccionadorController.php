<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeleccionadorRequest;
use App\Models\Seleccionador;
use App\Models\Tipo_usuario;
use Illuminate\Http\Request;

class SeleccionadorController extends Controller
{
    public function Seleccionador (){


        $seleccionadores = Seleccionador::all();
        return view("seleccionador.index", compact("seleccionadores"));
    }
    
    public function Create(){

        $tipo_usuarios = Tipo_usuario::all();
        return view('/seleccionador/create',['tipo_usuario'=> $tipo_usuarios]);
    }

    public function Store(SeleccionadorRequest $request){

        // $seleccionador = new Seleccionador($request->validated());
        // $seleccionador->save();

        // return redirect('seleccionador')->with('success', 'Seleccionador creado exitosamente');

        Seleccionador::create($request->all());
        return redirect()->route('seleccionador');
    }

    public function Edit (Seleccionador $seleccionador){
        return view('seleccionador.edit', compact('seleccionador'));
    }


    public function Update(SeleccionadorRequest $request, Seleccionador $seleccionador){
        
        $seleccionador->update($request->all()); 
        return redirect()->route('seleccionador');
    }

    public function Show(Seleccionador $seleccionador){
        return view ('seleccionador.show', compact('seleccionador'));
    }

    public function Destroy (Request $request, Seleccionador $seleccionador){ 
        $seleccionador->delete();
        return redirect()->route('seleccionador');
    }

    public function header()
    {
        return view('layouts.headerSeleccionador');
    }
}
