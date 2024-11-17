<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    public function Sala()
    {
	return $this->belongsTo(Sala::class);
    }
    protected $fillable =
    [
        'largura','profundidade'
    ];

}
