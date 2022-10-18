<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LetrasController;


Route::get('/', [IndexController::class,'index']);

//Pró-Aluno Letras
Route::resource('letras', LetrasController::class);