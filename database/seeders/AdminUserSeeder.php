<?php

namespace Database\Seeders;

// AdminUserSeeder.php

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Nome do Administrador',
            'email' => 'admin@example.com',
            'password' => bcrypt('senha'),
            'is_admin' => true, // Defina este usuário como administrador
        ]);
    }
}
