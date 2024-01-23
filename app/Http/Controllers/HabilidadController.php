<?php

namespace App\Http\Controllers;

use App\Models\Habilidad;
use Illuminate\Http\Request;

class HabilidadController extends Controller
{
    public function Habilidad()
    {
        $habilidades = Habilidad::all();
        return view("habilidad.index", compact("habilidades"));
    }

    public function Create()
    {
        return view('habilidad.create');
    }

    public function Store(Habilidad $request)
    {
        $ability = new Habilidad($request->validated());
        $ability->save();
        return redirect('habilidad')->with('success', 'Habilidad creada exitosamente');
    }

    public function Edit(Habilidad $habilidad)
    {
        return view('habilidad.edit', compact('habilidad'));
    }

    public function Update(Habilidad $request, Habilidad $habilidad)
    {
        $habilidad->update($request->validated());
        return redirect()->route('habilidad');
    }

    public function Show(Habilidad $habilidad)
    {
        return view('habilidad.show', compact('habilidad'));
    }

    public function Destroy(Request $request, Habilidad $habilidad)
    {
        $habilidad->delete();
        return redirect()->route('habilidad');
    }
}
