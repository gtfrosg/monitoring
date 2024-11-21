<?php

namespace App\Http\Controllers;

use App\Models\Equipamento;
use Illuminate\Http\Request;

class EquipamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('equipamentos.index', [
	    'equipamentos' => Equipamento::all()
	]);
	//estou com dúvidas em relação a o que deveria ser enviado para essa view, pois num cenário real eu gostaria de listar todos os equipamentos (lembrando que cada equipamento pode conter varios estatus diferentes) sendo assim não consegui pensar numa solução inteligente para listar os equipamentos
	//as tabelas equipamentos e statuses estão relacionadas, teoricamente daria para fazer uma busca pelos equipamentos da tabela estatus e retornar apenas aqueles com hostname diferente (primeiro filtro) e (um segundo filtro) que desses hostnames ele selecionasse aquele cuja login_at fosse mais proximo da nossa data atual
	//escreva aqui o que achou da sugestão raphael:
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Equipamento $equipamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Equipamento $equipamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Equipamento $equipamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Equipamento $equipamento)
    {
        //
    }
}
