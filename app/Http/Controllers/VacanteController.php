<?php

namespace App\Http\Controllers;

use App\Models\Vacante;
use Illuminate\Http\Request;

class VacanteController extends Controller
{
    public function Vacante (){

        $vacantes = Vacante::all();
        return view("vacante.index", compact("vacantes"));
    }
    
    public function Create(){
        return view('vacante.create');
    }

    public function Store(Request $request){

        $vacante = new Vacante($request->validated());
        $vacante->save();

        return redirect('vacante')->with('success', 'Vacante creado exitosamente');
    }

    public function Edit (Vacante $vacante){
        return view('vacante.edit', compact('vacante'));
    }


    public function Update(Request $request, Vacante $vacante){
        
        $vacante->update($request->all()); 
        return redirect()->route('vacante');
    }

    public function Show(Vacante $vacante){
        return view ('vacante.show', compact('vacante'));
    }

    public function Destroy (Request $request, Vacante $vacante){ 
        $vacante->delete();
        return redirect()->route('vacante');
    }
}
