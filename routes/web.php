<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\MesaController;
use App\Http\Controllers\EquipamentoController;

Route::get('status/index', [StatusController::class,'index']);

//Rotas para salas
Route::get('salas/index', [SalaController::class,'index']);
Route::get('salas/create', [SalaController::class,'create']);
Route::post('salas/store', [SalaController::class,'store']);
Route::get('salas/show/{sala}', [SalaController::class,'show']);
Route::get('salas/edit/{sala}', [SalaController::class,'edit']);
Route::patch('salas/update/{sala}', [SalaController::class,'update']);
Route::delete('salas/delete/{sala}', [SalaController::class,'destroy']);

//Rotas para mesas

Route::get('mesas/index', [MesaController::class,'index']);
Route::get('mesas/create', [MesaController::class,'create']);
Route::post('mesas/store', [MesaController::class,'store']);
//Route::get('show');
Route::get('mesas/edit/{mesa}',[MesaController::class,'edit']);
Route::patch('mesas/update/{mesa}', [MesaController::class,'update']);
Route::delete('mesas/delete/{mesa}', [MesaController::class,'destroy']);

//Rotas para equipamentos

Route::get('equipamentos/index', [EquipamentoController::class,'index']);
Route::get('equipamentos/create', [EquipamentoController::class,'create']);
Route::post('equipamentos/store', [EquipamentoController::class,'store']);
//Route::get('show');
Route::get('equipamentos/edit/{equipamento}', [EquipamentoController::class,'edit']);
Route::patch('equipamentos/update/{equipamento}', [EquipamentoController::class,'update']);
Route::delete('equipamentos/delete/{equipamento}', [EquipamentoController::class,'destroy']);
