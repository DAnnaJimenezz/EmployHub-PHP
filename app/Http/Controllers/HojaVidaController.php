<?php

namespace App\Http\Controllers;

use App\Http\Requests\HojaVidaRequest;
use App\Models\Hoja_vida;
use Illuminate\Http\Request;

class HojaVidaController extends Controller
{
    public function Hoja_vida (){

        $hojas_vidas = Hoja_vida::all();
        return view("hoja_vida.index", compact("hojas_vidas"));
    }
    
    public function Create(){
        return view('hoja_vida.create');
    }

    public function Store(HojaVidaRequest $request){

        // $hoja_vida = new Hoja_vida($request->validated());
        // $hoja_vida->save();
        // return redirect('hoja_vida')->with('success', 'Hoja de vida creada Exitosamente');

        Hoja_vida::create($request->all());
        return redirect()->route('hoja_vida');
    }

    public function Edit (Hoja_vida $hoja_vida){
        return view('hoja_vida.edit', compact('hoja_vida'));
    }


    public function Update(HojaVidaRequest $request, Hoja_vida $hoja_vida){
        
        $hoja_vida->update($request->all()); 
        return redirect()->route('hoja_vida');
    }

    public function Show(Hoja_vida $hoja_vida){
        return view ('hoja_vida.show', compact('hoja_vida'));
    }

    public function Destroy (Request $request, Hoja_vida $hoja_vida){ 
        $hoja_vida->delete();
        return redirect()->route('hoja_vida');
    }
}
