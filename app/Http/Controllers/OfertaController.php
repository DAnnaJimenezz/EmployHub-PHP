<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfertaRequest;
use App\Models\Oferta;
use App\Models\Tipo_contrato;
use Illuminate\Http\Request;

class OfertaController extends Controller
{
    public function Oferta (){

        $ofertas = Oferta::all();
        return view("oferta.index", ["ofertas"=> $ofertas]);
    }
    
    public function Create()
    {
        $tipo_contratos = Tipo_contrato::all();
        return view('oferta.create', ['tipo_contratos' => $tipo_contratos]);
    }
    

    public function Store(OfertaRequest $request){

        // $oferta = new Oferta($request->validated());
        // $oferta->save();

        // return redirect('oferta')->with('success', 'Oferta creada exitosamente');

        Oferta::create($request->all());
        return redirect()->route('oferta');
    }

    public function Edit (Oferta $oferta){
        return view('oferta.edit', compact('oferta'));
    }


    public function Update(OfertaRequest $request, Oferta $oferta){
        
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
