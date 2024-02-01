<?php

namespace App\Http\Controllers;

use App\Http\Requests\PonderacionRequest;
use App\Models\Ponderacion;
use Illuminate\Http\Request;

class PonderacionController extends Controller
{
    public function Ponderacion (){

        $ponderaciones = Ponderacion::all();
        return view("ponderacion.index", compact("ponderaciones"));
    }
    
    public function Create(){
        return view('ponderacion.create');
    }

    public function Store(PonderacionRequest $request){
        
        $ponderacion = new Ponderacion($request->validated());
        $ponderacion->save();

        return redirect('ponderacion')->with('success', 'Ponderaciones creadas exitosamente');
    }

    public function Edit (Ponderacion $ponderacion){
        return view('ponderacion.edit', compact('ponderacion'));
    }


    public function Update(PonderacionRequest $request, Ponderacion $ponderacion){
        
        $ponderacion->update($request->all()); 
        return redirect()->route('ponderacion');
    }

    public function Show(Ponderacion $ponderacion){
        return view ('ponderacion.show', compact('ponderacion'));
    }

    public function Destroy (Request $request, Ponderacion $ponderacion){ 
        $ponderacion->delete();
        return redirect()->route('ponderacion');
    }
}
