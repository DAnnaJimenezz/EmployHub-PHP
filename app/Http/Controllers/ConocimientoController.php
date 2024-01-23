<?php

namespace App\Http\Controllers;

use App\Models\Conocimiento;
use Illuminate\Http\Request;

class ConocimientoController extends Controller
{
    public function Conocimiento (){

        $conocimientos = Conocimiento::all();
        return view("conocimiento.index", compact("conocimientos"));
    }
    
    public function Create(){
        return view('conocimiento.create');
    }

    public function Store(Request $request){

        $conocimiento = new Conocimiento($request->validated());
        $conocimiento->save();
        return redirect('conocimiento')->with('success', 'Conocimientos creados exitosamente');
    }

    public function Edit (Conocimiento $conocimiento){
        return view('conocimiento.edit', compact('conocimiento'));
    }


    public function Update(Request $request, Conocimiento $conocimiento){
        
        $conocimiento->update($request->all()); 
        return redirect()->route('conocimiento');
    }

    public function Show(Conocimiento $conocimiento){
        return view ('conocimiento.show', compact('conocimiento'));
    }

    public function Destroy (Request $request, Conocimiento $conocimiento){ 
        $conocimiento->delete();
        return redirect()->route('conocimiento');
    }
}
