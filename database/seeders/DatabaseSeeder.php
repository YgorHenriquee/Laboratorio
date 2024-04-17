<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// Database\Seeders\DatabaseSeeder.php

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
      $this->call([
        EventTableSeeder::class,
      ]);
    }
}
