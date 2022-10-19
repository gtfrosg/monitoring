<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SociaisController;
use App\Http\Controllers\LetrasController;
use App\Http\Controllers\HistgeoController;
use App\Http\Controllers\EquipamentoController;
use App\Http\Controllers\SalaController;

Route::get('/', [IndexController::class,'index']);
Route::get('equipamentos/create', [EquipamentoController::class, 'create']);
Route::post('equipamentos/', [EquipamentoController::class, 'store']);
Route::get('equipamentos/{equipamento}', [EquipamentoController::class, 'show']);
Route::get('equipamentos/{equipamento}/edit', [EquipamentoController::class, 'edit']);
Route::patch('equipamentos/{equipamento}/', [EquipamentoController::class, 'update']);
Route::get('equipamentos', [EquipamentoController::class, 'index']);
Route::delete('equipamentos/{equipamento}', [EquipamentoController::class, 'destroy']);

Route::get('salas/create', [SalaController::class, 'create']);
Route::post('salas/', [SalaController::class, 'store']);
Route::get('salas/{sala}', [SalaController::class, 'show']);
Route::get('salas/{sala}/edit', [SalaController::class, 'edit']);
Route::patch('salas/{sala}/', [SalaController::class, 'update']);
Route::get('salas', [SalaController::class, 'index']);
Route::delete('salas/{sala}', [SalaController::class, 'destroy']);

Route::get('/', [IndexController::class,'index']);

Route::resource('letras', LetrasController::class);

Route::resource('histgeo', HistgeoController::class);

Route::resource('/sociais', SociaisController::class);