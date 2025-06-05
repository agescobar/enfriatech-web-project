<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function showRegistrationForm()
    {
        return view('registro');
    }
    
    public function registro(Request $request)
    {
        // Lógica de login
    }
}