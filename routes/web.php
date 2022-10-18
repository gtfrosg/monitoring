<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HistgeoController;

Route::get('/', [IndexController::class,'index']);
Route::resource('histgeo', HistgeoController::class);