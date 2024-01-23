<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    public function Estado (){

        $estados = Estado::all();
        return view("estado.index", compact("estados"));
    }
    
    public function Create(){
        return view('estado.create');
    }

    public function Store(Request $request){

        Estado::create($request->all());
        return redirect()->route('estado');
    }

    public function Edit (Estado $estado){
        return view('estado.edit', compact('estado'));
    }


    public function Update(Request $request, Estado $estado){
        
        $estado->update($request->all()); 
        return redirect()->route('estado');
    }

    public function Show(Estado $estado){
        return view ('estado.show', compact('estado'));
    }

    public function Destroy (Request $request, Estado $estado){ 
        $estado->delete();
        return redirect()->route('estado');
    }
}
