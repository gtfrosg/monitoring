<?php

namespace App\Http\Controllers;

use App\Models\Mesa;
use App\Models\Sala;
use Illuminate\Http\Request;

class MesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
	return view('mesas.index', [
	    'mesas' => Mesa::all()
	]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
	$salas = Sala::all();
        return view('mesas.create', [
	    'mesa' => new Mesa,
	    'salas' => $salas
	]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mesa = new Mesa;
	$mesa->sala_id = $request->sala_id;
	$mesa->largura = $request->largura;
	$mesa->profundidade = $request->profundidade;
	$mesa->save();
	return redirect('/mesas/index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mesa $mesa)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mesa $mesa)
    {
	$salas = Sala::all();
	return view('mesas.edit', [
	    'mesa' => $mesa,
	    'salas' => $salas
	]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mesa $mesa)
    {
	$mesa->largura = $request->largura;
	$mesa->profundidade = $request->profundidade;
	$mesa->save();
	return redirect('/mesas/index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mesa $mesa)
    {
        $mesa->delete();
	return redirect('/mesas/index');
    }
}
