<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turn extends Model
{
    use HasFactory;

    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }

    public function service()
    {
        return $this->belongsTo('App\Models\Service');
    }
}