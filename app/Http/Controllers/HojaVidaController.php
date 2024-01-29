<?php

namespace App\Http\Controllers;

use App\Models\Hoja_vida;
use Illuminate\Http\Request;

class HojaVidaController extends Controller
{
    public function Hoja_vida (){

        $hojas_vidas = Hoja_vida::all();
        return view("hojavida.index", compact("hojas_vidas"));
    }
    
    public function Create(){
        return view('hojavida.create');
    }

    public function Store(Request $request){

        // $hoja_vida = new Hoja_vida($request->validated());
        // $hoja_vida->save();
        // return redirect('hoja_vida')->with('success', 'Hoja de vida creada Exitosamente');

        Hoja_vida::create($request->all());
        return redirect()->route('hoja_vida');
    }

    public function Edit (Hoja_vida $hoja_vida){
        return view('hojavida.edit', compact('hoja_vida'));
    }


    public function Update(Request $request, Hoja_vida $hoja_vida){
        
        $hoja_vida->update($request->all()); 
        return redirect()->route('hoja_vida');
    }

    public function Show(Hoja_vida $hoja_vida){
        return view ('hojavida.show', compact('hoja_vida'));
    }

    public function Destroy (Request $request, Hoja_vida $hoja_vida){ 
        $hoja_vida->delete();
        return redirect()->route('hoja_vida');
    }
}
