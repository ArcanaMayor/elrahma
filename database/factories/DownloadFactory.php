<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DownloadFactory extends Factory
{
    public function definition(): array
    {
        $judul = $this->faker->sentence(3);

        return [
            'title' => $judul,
            'slug' => Str::slug($judul),
            'file' => 'downloads/' . $this->faker->word() . '.pdf',
            'description' => $this->faker->paragraph(),
        ];
    }
}
