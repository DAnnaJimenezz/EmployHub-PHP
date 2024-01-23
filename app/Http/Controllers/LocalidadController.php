<?php

namespace App\Http\Controllers;

use App\Models\Localidad;
use Illuminate\Http\Request;

class LocalidadController extends Controller
{
    public function Localidad (){

        $localidades = Localidad::all();
        return view("localidad.index", compact("localidades$localidades"));
    }
    
    public function Create(){
        return view('localidad.create');
    }

    public function Store(Request $request){

        Localidad::create($request->all());
        return redirect()->route('localidad');
    }

    public function Edit (Localidad $localidad){
        return view('localidad.edit', compact('localidad'));
    }


    public function Update(Request $request, Localidad $localidad){
        
        $localidad->update($request->all()); 
        return redirect()->route('localidad');
    }

    public function Show(Localidad $localidad){
        return view ('localidad.show', compact('localidad'));
    }

    public function Destroy (Request $request, Localidad $localidad){ 
        $localidad->delete();
        return redirect()->route('localidad');
    }
}
