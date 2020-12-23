<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faktor;

class FaktorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Faktor::create(
             ['name' => 'Keluarga'],
             ['name' => 'Pekerjaan'],
             ['name' => 'Teman'],
             ['name' => 'Percintaan'],
             ['name' => 'Pendidikan'],
             ['name' => 'Keluarga'],
            );
    }
}
