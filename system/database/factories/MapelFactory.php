<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mapel>
 */
class MapelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'mapel_kode' => fake()->numerify('MP-###'),
            'mapel_nama' => fake()->randomElement(['IPA', 'IPS', 'BAHASA INDONESIA', 'AGAMA', 'BAHASA INGGRIS', 'PJOK', 'MATEMATIKA', 'SBK']),
          
           
            
           
        ];
    }
}
