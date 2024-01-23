<?php

namespace App\Http\Controllers;

use App\Models\Ocupacion;
use Illuminate\Http\Request;

class OcupacionController extends Controller
{
    public function Ocupacion (){

        $ocupaciones = Ocupacion::all();
        return view("ocupacion.index", compact("ocupaciones"));
    }
    
    public function Create(){
        return view('ocupacion.create');
    }

    public function Store(Request $request){

        $ocupacion = new Ocupacion($request->validated());
        $ocupacion->save();
        return redirect('ocupacion')->with('success', 'Ocupación creada exitosamente');
    }

    public function Edit (Ocupacion $ocupacion){
        return view('ocupacion.edit', compact('ocupacion'));
    }


    public function Update(Request $request, Ocupacion $ocupacion){
        
        $ocupacion->update($request->all()); 
        return redirect()->route('ocupacion');
    }

    public function Show(Ocupacion $ocupacion){
        return view ('ocupacion.show', compact('ocupacion'));
    }

    public function Destroy (Request $request, Ocupacion $ocupacion){ 
        $ocupacion->delete();
        return redirect()->route('ocupacion');
    }
}
