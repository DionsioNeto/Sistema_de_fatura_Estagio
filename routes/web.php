<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('project.index');
});


Route::get('/stock', [ProdutoController::class, 'stock']);

Route::get('/add-stock', function () {
    return view('project.add-stock');
});

Route::get('/faturas', function () {
    return view('project.fatura');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('project.dashboard');
    })->name('dashboard');
});
