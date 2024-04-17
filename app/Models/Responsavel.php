<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsavel extends Model {
    protected $table = 'responsaveis';

    public function projetos() {
        
        return $this->belongsToMany(Projeto::class, 'responsavel_projeto', 'responsavel_id', 'projeto_id');
    }

    public function agendamentos() {
        return $this->hasMany(Agendamento::class);
    }
}