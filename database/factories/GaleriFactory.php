<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GaleriFactory extends Factory
{
    public function definition(): array
    {
        return [
            'judul' => $this->faker->sentence(3),
            // hanya judul + gambar
            'gambar' => $this->faker->imageUrl(640, 480, 'campus', true, 'Galeri'),
        ];
    }
}
