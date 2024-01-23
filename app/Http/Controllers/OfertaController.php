<?php

namespace App\Http\Controllers;

use App\Models\Oferta;
use App\Models\Tipo_contrato;
use Illuminate\Http\Request;

class OfertaController extends Controller
{
    public function Oferta (){

        $ofertas = Oferta::all();
        return view("oferta.index", ["ofertas"=> $ofertas]);
    }
    
    public function Create(){

        $tipo_contractos = Tipo_contrato::all();
        return view('/oferta/create',['tipo_contractos'=> $tipo_contractos]);
    }

    public function Store(Request $request){

        // $oferta = new Oferta($request->validated());
        // $oferta->save();

        // return redirect('oferta')->with('success', 'Oferta creada exitosamente');

        Oferta::create($request->all());
        return redirect()->route('oferta');
    }

    public function Edit (Oferta $oferta){
        return view('oferta.edit', compact('oferta'));
    }


    public function Update(Request $request, Oferta $oferta){
        
        $oferta->update($request->all()); 
        return redirect()->route('oferta');
    }

    public function Show(Oferta $oferta){
        return view ('oferta.show', compact('oferta'));
    }

    public function Destroy (Request $request, Oferta $oferta){ 
        $oferta->delete();
        return redirect()->route('oferta');
    }
}
