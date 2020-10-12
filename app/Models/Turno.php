<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    use HasFactory;

    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente');
    }

    public function servicio()
    {
        return $this->belongsTo('App\Models\Servicio');
    }
}
