<?php

namespace App\Models;
use App\Models\Mesa;
use App\Models\Status;

use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    public function Mesa()
    {
	return $this->belongsTo(Mesa::class);
    }

    public function Status()
    {
	return $this->hasMany(Status::class);
    }
}
