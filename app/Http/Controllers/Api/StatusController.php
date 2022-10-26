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
        $validated = $request->validated();

        $equipamento = $this->loadEquipamento($validated['hostname']);

        //registrando computador
        unset($validated['hostname']);
        $status = Status::create($request->validated() + [ 'equipamento_id' => $equipamento->id ]);

        }

    private function loadEquipamento($hostname)
    {
        $equipamento = Equipamento::firstOrCreate([
            'hostname' => $hostname
        ]);

        return $equipamento;
    }
}
    
