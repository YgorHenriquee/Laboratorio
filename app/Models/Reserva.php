<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $fillable = ['equipamento_id', 'responsavel_id', 'projeto_id', 'nome',  'obs', 'create_at'];
}
