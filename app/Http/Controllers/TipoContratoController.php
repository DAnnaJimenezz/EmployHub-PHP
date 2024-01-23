<?php

namespace App\Http\Controllers;

use App\Models\Tipo_contrato;
use Illuminate\Http\Request;

class TipoContratoController extends Controller
{
    public function Tipo_contrato (){

        $tipo_contratos = Tipo_contrato::all();
        return view("tipo_contrato.index", compact("tipo_contratos"));
    }
    
    public function Create(){
        return view('tipo_contrato.create');
    }

    public function Store(Request $request){

        Tipo_contrato::create($request->all());
        return redirect()->route('tipo_contrato');
    }

    public function Edit (Tipo_contrato $tipo_contrato){
        return view('tipo_contrato.edit', compact('tipo_contrato'));
    }


    public function Update(Request $request, Tipo_contrato $tipo_contrato){
        
        $tipo_contrato->update($request->all()); 
        return redirect()->route('tipo_contrato');
    }

    public function Show(Tipo_contrato $tipo_contrato){
        return view ('tipo_contrato.show', compact('tipo_contrato'));
    }

    public function Destroy (Request $request, Tipo_contrato $tipo_contrato){ 
        $tipo_contrato->delete();
        return redirect()->route('tipo_contrato');
    }
}
