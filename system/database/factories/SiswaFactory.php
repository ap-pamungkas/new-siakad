<?php

namespace Database\Factories;

use App\Models\Siswa;
use Illuminate\Database\Eloquent\Factories\Factory;

class SiswaFactory extends Factory
{
    protected $model = Siswa::class;

    public function definition()
    {
        
        return [
            'nama' => fake()->name,
            'email' => fake()->email,
            'nisn' => fake()->randomNumber(5, false),
            'password' => fake()->randomNumber(5, false),
          
           

           
        ];
    }
}
