<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    public function Cargo (){

        $cargos = Cargo::all();
        return view("cargo.index", compact("cargos"));
    }
    
    public function Create(){
        return view('cargo.create');
    }

    public function Store(Request $request){

        $cargo = new Cargo($request->validated());
        $cargo->save();
        return redirect('cargo')->with('success', 'Cargo creado exitosamente');
    }

    public function Edit (Cargo $cargo){
        return view('cargo.edit', compact('cargo'));
    }


    public function Update(Request $request, Cargo $cargo){
        
        $cargo->update($request->all()); 
        return redirect()->route('cargo');
    }

    public function Show(Cargo $cargo){
        return view ('cargo.show', compact('cargo'));
    }

    public function Destroy (Request $request, Cargo $cargo){ 
        $cargo->delete();
        return redirect()->route('cargo');
    }
}
