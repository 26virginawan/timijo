<?php

namespace Database\Seeders;

use App\Models\zona_ob;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Zona_OBSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        zona_ob::create([
        'name' => 'FASILITAS MEETING ROOM',
        'shift' => 'A',
    ]);
        zona_ob::create([
        'name' => 'RUANG OFFICE',
        'shift' => 'A',
    ]);
        zona_ob::create([
        'name' => 'TOILET',
        'shift' => 'A',
    ]);
        zona_ob::create([
        'name' => 'FASILITAS MEETING ROOM',
        'shift' => 'B',
    ]);
        zona_ob::create([
        'name' => 'RUANG OFFICE',
        'shift' => 'B',
    ]);
        zona_ob::create([
        'name' => 'TOILET',
        'shift' => 'B',
    ]);
        zona_ob::create([
        'name' => 'MINGGUAN',
        'shift' => 'A',
    ]);

    }
}
