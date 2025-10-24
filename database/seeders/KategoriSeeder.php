<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kategori::insert([
        //     [
        //         'nama' => 'Laptop',
        //         'keterangan' => 'Produk laptop berbagai merk'
        //     ],
        //     [
        //         'nama' => 'Aksesoris',
        //         'keterangan' => 'Peripherals dan aksesoris komputer'
        //     ],
        //     [
        //         'nama' => 'Komponen',
        //         'keterangan' => 'Hardware komponen PC'
        //     ],
        //     [
        //         'nama' => 'Monitor',
        //         'keterangan' => 'Hardware komponen PC'
        //     ],
        // ]);

        $faker = Faker::create('id_ID');
        // 
        for ($i = 0; $i < 10; $i++) {
            Kategori::create([
                'nama' => ucfirst($faker->unique()->word()),
                'keterangan' => $faker->sentence(6),
            ]);
        }
    }
}
