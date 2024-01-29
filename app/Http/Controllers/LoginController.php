<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nombre_usuario' => 'required|string|max:10',
            'contraseña' => 'required|string|max:20|min:10',
        ]);
        
        if(!auth()->attempt($request->only('nombre_usuario', 'contraseña'))){
            return back()->with('mensaje', 'Credenciales incorrectas');
        }

        $usuario = Auth::user();
        session(['tipo_usuario' => $usuario->id_tipo_usuario]);

        switch ($usuario->id_tipo_usuario) {
            case 1:
                return redirect()->route('headerAdmin');
            case 2:
                return redirect()->route('headerSeleccionador');
            case 3:
                return redirect()->route('headerReclutador');
            case 4:
                return redirect()->route('headerCandidato');
            case 5:
                return redirect()->route('headerEmpresa');
        }
    }
}