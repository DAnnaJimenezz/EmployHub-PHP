<?php

namespace App\Http\Controllers;

use App\Http\Requests\DenominacionRequest;
use App\Models\Denominacion;
use Illuminate\Http\Request;

class DenominacionController extends Controller
{
    public function Denominacion (){

        $denominaciones = Denominacion::all();
        return view("denominacion.index", compact("denominaciones"));
    }
    
    public function Create(){
        return view('denominacion.create');
    }

    public function Store(DenominacionRequest $request){

        $denominacion = new Denominacion($request->validated());
        $denominacion->save();
        return redirect('denominacion')->with('success', 'Denominacion creada exitosamente');
    }

    public function Edit (Denominacion $denominacion){
        return view('denominacion.edit', compact('denominacion'));
    }


    public function Update(DenominacionRequest $request, Denominacion $denominacion){
        
        $denominacion->update($request->all()); 
        return redirect()->route('denominacion');
    }

    public function Show(Denominacion $denominacion){
        return view ('denominacion.show', compact('denominacion'));
    }

    public function Destroy (Request $request, Denominacion $denominacion){ 
        $denominacion->delete();
        return redirect()->route('denominacion');
    }
}
