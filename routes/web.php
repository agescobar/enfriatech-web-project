<?php
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegistroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/cotizador', function () {
    return view('cotizador');
});


// Mostrar formulario de login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Procesar login
Route::post('/login', [LoginController::class, 'login']);

// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Panel para administradores (protegido por middleware auth)
Route::get('/paneladmin', function () {
    return view('paneladmin');
});

// Panel para clientes (protegido por middleware auth)
Route::get('/panelcliente', function () {
    return view('panelcliente');
});

Route::get('/registro', [RegistroController::class, 'showRegistrationForm'])->name('registro');

Route::post('/registro', [RegistroController::class, 'registro'])->name('registro');

Route::get('/servicios', function () {
    return view('servicios');
});