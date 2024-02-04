<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmpresaRequest;
use App\Models\Empresa;
use App\Models\Tipo_usuario;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function Empresa (){


        $empresas = Empresa::all();
        return view("empresa.index", ["empresas"=>$empresas]);
    }
    
    public function Create(){

        $tipo_usuarios = Tipo_usuario::all();
        return view('empresa.create',['tipo_usuario'=> $tipo_usuarios]);
    }

    public function Store(EmpresaRequest $request){

        $empresa = new Empresa($request->validated());
        $empresa->save();
        return redirect('empresa')->with('success', 'Compañia creada exitosamente');

    }

    public function Edit (Empresa $empresa){
        return view('empresa.edit', compact('empresa'));
    }


    public function Update(EmpresaRequest $request, Empresa $empresa){
        
        $empresa->update($request->all()); 
        return redirect()->route('empresa');
    }

    public function Show(Empresa $empresa){
        return view ('empresa.show', compact('empresa'));
    }

    public function Destroy (Request $request, Empresa $empresa){ 
        $empresa->delete();
        return redirect()->route('empresa');
    }

    public function header()
    {
        return view('layouts.headerEmpresa');
    }
}
