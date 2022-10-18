<?php

namespace App\Http\Controllers;

use App\Http\Requests\SalaRequest;
use App\Models\Sala;

class SalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $salas =  Sala::all();
    return view('salas.index',[
        'salas' => $salas
    ]);
}

public function create()
{
    return view('salas.create',[
        'sala' => new Sala,
    ]);
}

public function store(SalaRequest $request)
{
    $validated = $request->validated();

    $sala = new Sala;
    $sala = Sala::create($validated);
    request()->session()->flash('alert-info','Sala cadastrada com sucesso');
    return redirect("/salas/{$sala->id}");
}

public function show(Sala $sala)
{
    return view('salas.show',[
        'sala' => $sala
    ]);
}

public function edit(Sala $sala)
{
    return view('salas.edit',[
        'sala' => $sala
    ]);
}

public function update(SalaRequest $request, Sala $sala)
{
    $validated = $request->validated();
    $sala->update($validated);
    request()->session()->flash('alert-info','Sala atualizada com sucesso');
    return redirect("/salas/{$sala->id}");
}

public function destroy(Sala $sala)
{
    $sala->delete();
    return redirect('/salas');
}
}
