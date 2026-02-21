<?php

namespace Database\Seeders;

use App\Models\ListTugas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ListTugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ListTugas::create([
        'name' => 'Menyapu',
        'areas_id' => '1',
    ]);
    }
}
