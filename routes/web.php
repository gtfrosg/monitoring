<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\SalaController;

Route::get('status/index', [StatusController::class,'index']);

//Rotas para salas
Route::get('salas/index', [SalaController::class,'index']);
Route::get('salas/create', [SalaController::class,'create']);
Route::post('store');
Route::get('show');
Route::get('edit');
Route::put('update');
Route::delete('delete');

//Rotas para mesas

Route::get('index');
Route::get('create');
Route::post('store');
Route::get('show');
Route::get('edit');
Route::put('update');
Route::delete('delete');
