<?php

namespace Database\Seeders;

use App\Models\Classes;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Classes::create(['nama_kelas' => 'Kelas A']);
       Classes::create(['nama_kelas' => 'Kelas B']);
       Classes::create(['nama_kelas' => 'Kelas C']);
    }
}
