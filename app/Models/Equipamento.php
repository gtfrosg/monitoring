<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sala;

class Equipamento extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'hostname',
        'mesa',
        'posicao',
        'sala_id'
    ];

    public function sala(){
        return $this->belongsTo(Sala::class);
    }
}
