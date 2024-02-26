<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Person;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->firstName,
            'apellido' => $this->faker->lastName,
            'direccion' => $this->faker->address,
            'telefono' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'zona' => $this->faker->randomElement(['Cuba', 'Cartago', 'Provincia', 'Centro']),
            'centro_v' => $this->faker->randomElement(['SorMaria', 'Juan XXIII', 'SENA']),
            'puesto_v' => $this->faker->randomElement(['A1', 'A2', 'A3', 'A4']),
            'estrato_social' => $this->faker->randomElement(['Bajo', 'Medio', 'Alto']),
        ];
    }
}
