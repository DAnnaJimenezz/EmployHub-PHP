<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReclutadorRequest;
use App\Models\Reclutador;
use App\Models\Tipo_usuario;
use Illuminate\Http\Request;

class ReclutadorController extends Controller
{
    public function Reclutador (){


        $reclutadores = Reclutador::all();
        return view("reclutador.index", ["reclutadores"=> $reclutadores]);
    }
    
    public function Create(){

        $tipo_usuarios = Tipo_usuario::all();
        return view('/reclutador/create',['tipo_usuario'=> $tipo_usuarios]);
    }

    public function Store(ReclutadorRequest $request){

        $reclutador = new Reclutador($request->validated());
        $reclutador->save();

        return redirect('reclutador')->with('success', 'Reclutador creado exitosamente');
    }

    public function Edit (Reclutador $reclutador){
        return view('reclutador.edit', compact('reclutador'));
    }


    public function Update(ReclutadorRequest $request, Reclutador $reclutador){
        
        $reclutador->update($request->all()); 
        return redirect()->route('reclutador');
    }

    public function Show(Reclutador $reclutador){
        return view ('reclutador.show', compact('reclutador'));
    }

    public function Destroy (Request $request, Reclutador $reclutador){ 
        $reclutador->delete();
        return redirect()->route('reclutador');
    }

    public function header()
    {
        return view('layouts.headerReclutador');
    }
}
