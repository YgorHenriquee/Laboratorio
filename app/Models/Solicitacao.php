<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitacao extends Model
{
    protected $table = 'solicitacoes';
    protected $fillable = ['user_id', 'lab_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
