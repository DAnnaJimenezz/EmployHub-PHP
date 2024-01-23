<?php

namespace App\Http\Controllers;

use App\Models\Administrador;
use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    public function index(){
        

        $administradores = Administrador::all();
        return view("administrador.index", compact("administradores"));
    
    }

    public function create(){
        return view('administrador.create');
    }

    public function store(Request $request){
        Administrador::create($request->all());
        return redirect()->route('administrador.index');
    }

    public function edit(Administrador $administrador){
        return view('administrador.edit', compact('administrador'));
    }

    public function update(Request $request, Administrador $administrador){
        $administrador->update($request->all()); 
        return redirect()->route('administrador.index');
    }

    public function show(){
        return view('administrador.show', compact('administrador'));
    }

    public function destroy(Administrador $administrador){ 
        $administrador->delete();
        return redirect()->route('administrador.index');
    }

    public function header()
    {
        return view('layouts.headerAdmin');
    }
}
