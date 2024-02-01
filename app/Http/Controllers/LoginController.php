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
            'username' => 'required|string|max:10',
            'password' => 'required|string|max:20|min:10',
        ]);
        
        if(!auth()->attempt($request->only('username', 'password'))){
            return back()->with('mensaje', 'Credenciales incorrectas');
        }

        $user = Auth::user();
        session(['tipo_usuario' => $user->id_tipo_usuario]);

        switch ($user->id_tipo_usuario) {
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