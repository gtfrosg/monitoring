<?php

namespace App\Models;
use App\Models\Mesa;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    protected $fillable =
    [
        'nome','largura','profundidade'
    ];

    public function mesas()
    {
	return $this->hasMany(Mesa::class);
    }
}
