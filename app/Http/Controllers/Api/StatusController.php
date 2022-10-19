<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Equipamento;
use App\Models\Status;
use App\Http\Requests\EquipamentoRequest;
use App\Http\Requests\StatusRequest;

class StatusController extends Controller
{
    
    public function store(StatusRequest $request){

        if ($request->header('Authorization') != env('API_KEY')) {
            return response('Acesso nao autorizado', 403);
        }

        //carregando equipamento
        $equipamento = $this->loadEquipamento($request->safe()->only(['equipamento']));

        //registrando computador
        $validated = $request->validated();
        unset($validated['equipamento']);
        $validated['equipamento_id'] = $equipamento->id;
        $status = Status::create($validated);

        }

    private function loadEquipamento($request_equipamento)
    {
        $equipamento = Equipamento::where('hostname', $request_equipamento)->first();
        if (!$equipamento) {
            $equipamento = new Equipamento;
            $equipamento->hostname = $request_equipamento;
            $equipamento->save();
        }

        return $equipamento;
    }
}
    
