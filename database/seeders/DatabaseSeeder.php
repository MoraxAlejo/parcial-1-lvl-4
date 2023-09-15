<?php

// database/seeders/DatabaseSeeder.php

use Illuminate\Database\Seeder;
use App\Models\Usuario;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            Usuario::create([
                'nombre' => $faker->firstName,
                'apellido' => $faker->lastName,
                'correo_electronico' => $faker->email,
                'fecha_de_registro' => now(),
            ]);
        }
    }
}
