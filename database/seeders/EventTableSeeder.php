<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \Illuminate\Support\Facades\DB::table(table:'events')->insert([
         [
            'title' => 'Reunião',
            'start' => '2023-12-26 16:12:00',
            'end' => '2023-12-26 17:12:00',
            'color' => '#c40233',
            'description'=> 'Reunião com clientes'
         ],
         [
            'title' => 'Ligar p7cliente',
            'start' => '2022-08-08 16:12:00',
            'end' => '2022-08-08 18:12:00',
            'color' => '#29fdf2',
            'description'=> 'Falar c/clientes'
         ],
        ]);
    }
}
