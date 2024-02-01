<?php

namespace App\Http\Controllers;

use App\Http\Requests\CandidatoRequest;
use App\Models\Candidato;
use Illuminate\Http\Request;

class CandidatoController extends Controller
{
    public function Candidato (){

        $candidatos = Candidato::all();
        return view("candidato.index", compact("candidatos"));
    }
    
    public function Create(){
        return view('candidato.create');
    }

    public function Store(CandidatoRequest $request){

        $candidato = new Candidato($request->validated());
        $candidato->save();
        return redirect('candidato')->with('success', 'Candidato creado exitosamente');
    }

    public function Edit (Candidato $candidato){
        return view('candidato.edit', compact('candidato'));
    }


    public function Update(CandidatoRequest $request, Candidato $candidato){
        
        $candidato->update($request->all()); 
        return redirect()->route('candidato');
    }

    public function Show(Candidato $candidato){
        return view ('candidato.show', compact('candidato'));
    }

    public function Destroy (Request $request, Candidato $candidato){ 
        $candidato->delete();
        return redirect()->route('candidato');
    }

    public function header()
    {
        return view('layouts.headerCandidato');
    }
}
