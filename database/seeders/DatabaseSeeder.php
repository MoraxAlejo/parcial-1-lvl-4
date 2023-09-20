<?php

use Illuminate\Database\Seeder;
use App\Models\Usuario;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
      
        Usuario::factory()->count(100)->create();
    }
}

