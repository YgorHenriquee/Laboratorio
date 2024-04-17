<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model {
    // ...

    public function responsaveis() {
        return $this->belongsToMany(Responsavel::class, 'responsavel_projeto', 'projeto_id', 'responsavel_id');
    }

    public function agendamentos() {
        return $this->hasMany(Agendamento::class);
    }
}