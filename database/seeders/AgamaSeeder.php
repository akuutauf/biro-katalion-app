<?php

namespace Database\Seeders;

use App\Models\Agama;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create agamas
        Agama::create([
            'nama' => 'Islam'
        ]);
        Agama::create([
            'nama' => 'Hindu'
        ]);
        Agama::create([
            'nama' => 'Budha'
        ]);
        Agama::create([
            'nama' => 'Kristen'
        ]);
        Agama::create([
            'nama' => 'Katolik'
        ]);
        Agama::create([
            'nama' => 'Konghucu'
        ]);
        Agama::create([
            'nama' => 'Lainnya'
        ]);
    }
}
