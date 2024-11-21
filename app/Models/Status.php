<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Equipamento;

class Status extends Model
{
    use Hasfactory;

    protected $fillable = [
        'hostname',
        'ip',
        'username',
        'login_at',
	'keyboard',
	'mouse',
	'monitor'
    ];

    public function Equipamento()
    {
	return $this->hasMany(Equipamento::class);
    }
}
