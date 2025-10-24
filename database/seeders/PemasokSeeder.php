<?php

namespace Database\Seeders;

use App\Models\Pemasok;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemasokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pemasok::insert([
            [
                'nama' => 'PT Sumber Elektronik',
                'alamat' => 'Jl. Sudirman No. 45, Jakarta',
                'no_tlp' => '021-77889900'
            ],
            [
                'nama' => 'CV Tech Komputer',
                'alamat' => 'Jl. Diponegoro No. 22, Bandung',
                'no_tlp' => '022-33445566'
            ],
            [
                'nama' => 'UD Elektrindo',
                'alamat' => 'Jl. Rajawali No. 11, Surabaya',
                'no_tlp' => '031-99887766'
            ],
        ]);
    }
}
