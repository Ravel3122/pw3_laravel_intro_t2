<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventoController;

Route::get('/eventos', [EventoController::class, 'index']);
Route::get('/eventos/novo', [EventoController::class, 'create']);
Route::post('/eventos', [EventoController::class, 'store']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos', [ProdutoController::class , 'index']);
Route::post('/produtos', [ProdutoController::class , 'store']);

