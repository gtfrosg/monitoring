<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    public function Mesa()
    {
	return $this->hasMany(Mesa::class);
    }
    protected $fillable =
    [
        'nome','largura','profundidade'
    ];

}
