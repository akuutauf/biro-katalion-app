<?php

namespace Database\Seeders;

use App\Models\JenisLayananTes;
use Illuminate\Database\Seeder;

class JenisLayananTesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create jenis layanan tes
        JenisLayananTes::create([
            'nama' => 'PAUD/TK',
            'harga' => 100000,
        ]);
        JenisLayananTes::create([
            'nama' => 'SD',
            'harga' => 150000,
        ]);
        JenisLayananTes::create([
            'nama' => 'SMP',
            'harga' => 200000,
        ]);
        JenisLayananTes::create([
            'nama' => 'SMA',
            'harga' => 250000,
        ]);
        JenisLayananTes::create([
            'nama' => 'Tes Bakat Minat',
            'harga' => 250000,
        ]);
        JenisLayananTes::create([
            'nama' => 'Tes Kepribadian',
            'harga' => 250000,
        ]);
    }
}
