<?php

namespace App\Http\Controllers;

use App\Models\Equipamento;
use App\Models\Mesa;
use App\Models\Status;
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
	$mesas = Mesa::all();
	$status = Status::all();
        return view('equipamentos.create', [
	    'equipamento' => new Equipamento,
	    'mesas' => $mesas,
	    'status' => $status
	]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $equipamento = new Equipamento;
	$equipamento->mesa_id = $request->mesa_id;
	$equipamento->save();

	//aqui eu tive uma ideia pq quando o usuario criar um novo equipamento ele deve associar esse equipamento a um status especific. Para isso funcionar eu deveria enviar o resultado do formulário para o método update dentro do statusController e atualizar o campo equipamento_id, dessa meneira ao submeter o formulário ele atualizaria o campo id na tabela status. Entretanto eu não consegui fazer com que o formulario seja enviado para a rota do método store e a rota do método update (no StatusController) simultaneamente. Então eu vou colocar um redirecionamento para a rota do método update do StatusController aqui no corpo da função store
	//basicamente estou armazenando o id do equipamento numa variável e levando ele até o método update lá no StatusController onde ele vai atualizar o campo equipamento_id isso garante que pelo menos (por enquanto) cada equipamento seja associado a apenas um status
	//aparentemente tem um problema aqui. Seu eu redirecionar direto para o método update no StatusController dá um porblema com a rota pq o redirect sempre é interpretado no sistema como uma requisição post (e na rota do meu update tenho uma requisição patch). Dito isso existem duas possibidades: A primeira, retornar uma view edit com um formulário que direciona para o método update (o que seria chato de fazer, pois eu não sei como eu faço para garantir que o formulário já esteja pré-preenchido com os valores de $equipamento_id que irão atualizar o campo equipamento_id na tabela statuses. Nesse caso terei de pesquisar formas de o usuário não alterar o formulário); segundo, tem uma solução usando um negócio chamado ajax na internet que consegui fazer um redirect "certinho" e passa a váriável para a rota no método patch sem problema (o problema com essa solução é que não sei exatamente como implementar ela e se der algum problema com esse código meio que fudeu)
//	$equipamento_id = $equipamento->id;
//	return redirect()->route('status.update', [
//	    'equipamento_id' => $equipamento_id
//	]);
	//ATENÇÃO AINDA NÃO ESTÁ FUNCIONANDO
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
