<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Linreserva extends Model
{
    protected $fillable = ['numReserva', 'dataReserva', 'tempo', 'idEquipamento'];
}
