<?php

namespace Database\Seeders;

use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Pemasok;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Barang::insert([
        //     [
        //         'nama' => 'Laptop ASUS VivoBook 14',
        //         'harga' => 8500000,
        //         'stok' => 8,
        //         'id_kategori' => 1,
        //         'id_pemasok' => 2,
        //     ],
        //     [
        //         'nama' => 'Laptop Lenovo ThinkPad E14',
        //         'harga' => 10500000,
        //         'stok' => 5,
        //         'id_kategori' => 1,
        //         'id_pemasok' => 2,
        //     ],
        //     [
        //         'nama' => 'Mouse Logitech Wireless M185',
        //         'harga' => 150000,
        //         'stok' => 30,
        //         'id_kategori' => 2,
        //         'id_pemasok' => 3,
        //     ],
        //     [
        //         'nama' => 'Keyboard Mechanical Rexus',
        //         'harga' => 450000,
        //         'stok' => 20,
        //         'id_kategori' => 2,
        //         'id_pemasok' => 3,
        //     ],
        //     [
        //         'nama' => 'Processor Intel Core i5-12400F',
        //         'harga' => 3200000,
        //         'stok' => 15,
        //         'id_kategori' => 3,
        //         'id_pemasok' => 2,
        //     ],
        //     [
        //         'nama' => 'RAM DDR4 16GB 3200MHz',
        //         'harga' => 750000,
        //         'stok' => 25,
        //         'id_kategori' => 3,
        //         'id_pemasok' => 2,
        //     ],
        //     [
        //         'nama' => 'SSD NVMe 512GB Samsung',
        //         'harga' => 980000,
        //         'stok' => 10,
        //         'id_kategori' => 3,
        //         'id_pemasok' => 1, // PT Sumber Elektronik
        //     ],
        //     [
        //         'nama' => 'Monitor LG Ultrawide 29 Inch',
        //         'harga' => 3300000,
        //         'stok' => 7,
        //         'id_kategori' => 4,
        //         'id_pemasok' => 1,
        //     ],
        //     [
        //         'nama' => 'Monitor ASUS 24 Inch 144Hz',
        //         'harga' => 2800000,
        //         'stok' => 9,
        //         'id_kategori' => 4,
        //         'id_pemasok' => 1,
        //     ],
        //     [
        //         'nama' => 'Headset Gaming HyperX Cloud II',
        //         'harga' => 1250000,
        //         'stok' => 12,
        //         'id_kategori' => 2,
        //         'id_pemasok' => 3,
        //     ],
        // ]);

        $faker = Faker::create('id_ID');

        $kategoriIds = Kategori::pluck('id_kategori')->toArray();
        $pemasokIds = Pemasok::pluck('id_pemasok')->toArray();

        for ($i = 0; $i < 30; $i++) {
            Barang::create([
                'nama' => ucfirst($faker->words(mt_rand(2, 4), true)),
                'harga' => $faker->numberBetween(100000, 20000000),
                'stok' => $faker->numberBetween(1, 100),
                'id_kategori' => $faker->randomElement($kategoriIds),
                'id_pemasok' => $faker->randomElement($pemasokIds),
            ]);
        }
    }
}
