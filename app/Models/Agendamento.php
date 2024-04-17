<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model {
    

    public function equipamento() {
        return $this->belongsTo(Equipamento::class);
    }

    public function responsavel() {
        return $this->belongsTo(Responsavel::class);
    }

    public function projeto() {
        return $this->belongsTo(Projeto::class);
    }
}