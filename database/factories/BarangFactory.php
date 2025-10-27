<?php

namespace Database\Factories;

use App\Models\Kategori;
use App\Models\Pemasok;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => ucfirst($this->faker->words(mt_rand(2, 4), true)),
            'harga' => $this->faker->numberBetween(100000, 20000000),
            'stok' => $this->faker->numberBetween(1, 100),
            'id_kategori' => Kategori::inRandomOrder()->value('id_kategori'),
            'id_pemasok' => Pemasok::inRandomOrder()->value('id_pemasok'),
        ];
    }
}
