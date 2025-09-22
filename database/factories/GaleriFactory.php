<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GaleriFactory extends Factory
{
    public function definition(): array
    {
        return [
            'judul' => $this->faker->sentence(3),

            // 🔹 Pilihan 1: gunakan picsum.photos (gambar random)
            // 'gambar' => 'https://picsum.photos/640/480?random=' . $this->faker->unique()->numberBetween(1, 1000),

            // 🔹 Pilihan 2: gunakan placeholder.com (stabil, bisa kasih teks)
            'gambar' => 'https://via.placeholder.com/640x480.png?text=Galeri+' . $this->faker->word(),
        ];
    }
}
