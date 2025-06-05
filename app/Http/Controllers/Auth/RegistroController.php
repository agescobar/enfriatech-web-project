<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\usuarios;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function showRegistrationForm()
    {
        return view('registro');
    }
    
    public function registrar(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'clave' => 'required|min:6|confirmed',
        ]);

        $usuario = new usuarios();
        $usuario->nombre = $request->nombre;
        $usuario->email = $request->email;
        $usuario->clave = bcrypt($request->password);
        $usuario->save();

        return redirect()->route('login')->with('success', 'Registro exitoso. Ahora puedes iniciar sesión.');
    }
}