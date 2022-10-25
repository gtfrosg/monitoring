<?php

namespace App\Http\Controllers;

use App\Http\Requests\EquipamentoRequest;
use App\Models\Equipamento;
use App\Models\Sala;

class EquipamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{

    $equipamentos = Equipamento::paginate(5);
    
    return view('equipamentos.index',[
        'equipamentos' => $equipamentos,
    ]);
}

public function create()
{
    return view('equipamentos.create',[
        'equipamento' => new Equipamento,
        'salas' => Sala::all()
    ]);
}

public function store(EquipamentoRequest $request)
{
    $validated = $request->validated();

    $equipamento = new Equipamento;
    $equipamento = Equipamento::create($validated);
    request()->session()->flash('alert-info','Equipamento cadastrado com sucesso');
    return redirect("/equipamentos/{$equipamento->id}");
}

public function show(Equipamento $equipamento)
{
    return view('equipamentos.show',[
        'equipamento' => $equipamento->load('sala')
    ]);
}

public function edit(Equipamento $equipamento)
{
    return view('equipamentos.edit',[
        'equipamento' => $equipamento,
        'salas' => Sala::all()
    ]);
}

public function update(EquipamentoRequest $request, Equipamento $equipamento)
{
    $validated = $request->validated();
    $equipamento->update($validated);
    request()->session()->flash('alert-info','Equipamento atualizado com sucesso');
    return redirect("/equipamentos/{$equipamento->id}");
}

public function destroy(Equipamento $equipamento)
{
    $equipamento->delete();
    return redirect('/equipamentos');
}
}
