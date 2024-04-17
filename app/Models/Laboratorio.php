<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratorio extends Model
{
    protected $fillable = ['nomeLaboratorio'];
    
    public function equipamentos()
    {
        return $this->hasMany(Equipamento::class, 'lab_id');
    }
}

