<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    protected $fillable=["id", "descricao", "tempoIni", "tempoFim", "vecMerge"];
}
