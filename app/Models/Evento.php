<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    // Nome da tabela no banco de dados associada ao modelo
    protected $table = 'eventos';

    // Atributos que podem ser atribuídos em massa
    protected $fillable = [
        'equipamento_id',
        
    ];

    // Relacionamento com o modelo Equipamento (exemplo)
    public function equipamento()
    {
        return $this->belongsTo(Equipamento::class, 'equipamento_id');
    }
}
