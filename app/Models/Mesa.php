<?php

namespace App\Models;
use App\Models\Sala;
use App\Models\Equipamento;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    public function Sala()
    {
	return $this->belongsTo(Sala::class);
    }

    public function Equipamentos()
    {
	return $this->hasMany(Equipamento::class);
    }

    protected $fillable =
    [
        'largura','profundidade'
    ];

}
