<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;



Route::get('/', function () {
    return view('home');
});

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/inicio_s', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/inicio_s', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/accesorios', function () {
    return view('clientes.accesorios');
});
Route::get('/adultos', function () {
    return view('clientes.adultos');
});
Route::get('/niños', function () {
    return view('clientes.niños');
});
Route::get('/zapatos', function () {
    return view('clientes.zapatos');
});

Route::get('/conjuntos', function () {
    return view('clientes.conjuntos');
});

Route::middleware('auth')->group(function () {
    Route::resource('/inventario', InventarioController::class);
});