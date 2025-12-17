<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('index');
})->name('home');

    // Cadastro
    Route::get('/cadastro', [AuthController::class, 'create'])->name('cadastro');
    Route::post('/cadastro', [AuthController::class, 'store'])->name('cadastro.store');

    // Login
    Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.store');


//Logout de Usuário
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware('auth')->group(function () {
    Route::get('/catalogo', function () {
        return view('catalogo');
    })->name('catalogo');

    Route::get('/perfil', function () {
        return 'Perfil protegido';
    });
});
