<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    use HasFactory;

    public function equipamentos()
    {
        return $this->hasMany(Equipamento::class, 'lab_id', 'id');
    }
    protected $fillable = [
        'sala', 
        'username', 
        'entry_time', 
        'equipment', 
        'purpose'];


   
}
