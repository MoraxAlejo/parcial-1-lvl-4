<?php

namespace Database\Factories;

use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Usuario;

class UsuarioFactory extends Factory
{
    protected $model = Usuario::class;

    public function definition()
    
    {
        $faker = Faker::create();
        return [
            'nombre' => $faker->firstName,
            'apellido' => $faker->lastName,
            'correo_electronico' => $faker->email,
            'fecha_de_registro' => now(),
        ];
    }
}
