<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatusController;


Route::get('teste', [StatusController::class,'Load_status']);

Route::post('status',[StatusController::class],'Store_status');
