<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Equipamento;

class EquipamentosTableSeeder extends Seeder
{
    public function run()
    {
        // Limpar registros existentes
        Equipamento::truncate();

        // Adicionar dados fictícios
        Equipamento::create([
            'nomeEquipamento' => 'Computador',
            'lab_id' => 1, // Substitua pelo ID do laboratório desejado
        ]);

        Equipamento::create([
            'nomeEquipamento' => 'Microscópio',
            'lab_id' => 2, // Substitua pelo ID do laboratório desejado
        ]);

        Equipamento::create([
            'nomeEquipamento' => 'Lupa',
            'lab_id' => 3, // Substitua pelo ID do laboratório desejado
        ]);

        // Adicionar mais 15 dados fictícios
        for ($i = 4; $i <= 18; $i++) {
            Equipamento::create([
                'nomeEquipamento' => "Equipamento $i",
                'lab_id' => $i, // Substitua pelo ID do laboratório desejado
            ]);
        }
    }
}


