<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Status;
use App\Models\Sala;
use App\Models\Mesa;
use App\Models\Equipamento;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
	//Eu preciso criar todos esses registros para poder criar os do status
        // Criar uma sala na tabela salas
        $sala = Sala::create([
	    'nome' => "saladobrunao",
            'largura' => 10,  // Ajuste conforme necessário
            'profundidade' => 20, // Ajuste conforme necessário
        ]);

        // Criar uma mesa associada à sala
        $mesa = Mesa::create([
            'sala_id' => $sala->id,
            'largura' => 5,  // Ajuste conforme necessário
            'profundidade' => 5, // Ajuste conforme necessário
        ]);

        // Criar um equipamento associado à mesa
        $equipamento = Equipamento::create([
            'mesa_id' => $mesa->id,  // Associa o equipamento à mesa
        ]);

        $status = [
	    'equipamento_id' => "1",
            'hostname' => "linux008123456",
            'ip'       => "10.172.1.130",
            'username' => "a12289004",
            'login_at' => "2024-10-27 15:30:00",
	    'keyboard' => "TecladoMultilazerFerradoDe100anos",
	    'mouse'    => "MouseMultilazerFerradoDe100anos",
	    'monitor'  => "MonitorDaSangungVagabundo"
        ];
        \App\Models\Status::create($status);
        \App\Models\Status::factory(15)->create();
    }
}
