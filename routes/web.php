<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/cotizador', function () {
    return view('cotizador');
});


// Para autenticación básica
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');

Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);

// Rutas para registro de usuarios
Route::get('/registro', [App\Http\Controllers\Auth\RegistroController::class, 'showRegistrationForm'])->name('registro');
Route::post('/registro', [App\Http\Controllers\Auth\RegistroController::class, 'registro']);


Route::get('/servicios', function () {
    return view('servicios');
});