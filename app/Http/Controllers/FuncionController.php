<?php

namespace App\Http\Controllers;

use App\Models\Funcion;
use Illuminate\Http\Request;

class FuncionController extends Controller
{
    public function Funcion (){

        $funciones = Funcion::all();
        return view("funcion.index", compact("funciones"));
    }
    
    public function Create(){
        return view('funcion.create');
    }

    public function Store(Request $request){

        Funcion::create($request->all());
        return redirect()->route('funcion');
    }

    public function Edit (Funcion $funcion){
        return view('funcion.edit', compact('funcion'));
    }


    public function Update(Request $request, Funcion $funcion){
        
        $funcion->update($request->all()); 
        return redirect()->route('funcion');
    }

    public function Show(Funcion $funcion){
        return view ('funcion.show', compact('funcion'));
    }

    public function Destroy (Request $request, Funcion $funcion){ 
        $funcion->delete();
        return redirect()->route('funcion');
    }
}
