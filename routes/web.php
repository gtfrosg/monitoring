<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SociaisController;
use App\Http\Controllers\LetrasController;
use App\Http\Controllers\HistgeoController;

Route::get('/', [IndexController::class,'index']);
Route::resource('letras', LetrasController::class);
Route::resource('histgeo', HistgeoController::class);
Route::resource('/sociais', SociaisController::class);
