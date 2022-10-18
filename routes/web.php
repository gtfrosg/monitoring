<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SociaisController;

Route::get('/', [IndexController::class,'index']);

Route::get('/sociais', [SociaisController::class,'index']);