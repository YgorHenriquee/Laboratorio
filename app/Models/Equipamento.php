<?php

// Arquivo: app/Models/Equipamento.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model {
    protected $fillable = ['nome', 'tipoCalendario', 'preco'];


    public function reserva() {
        return $this->hasMany(Agendamento::class);
    }
}