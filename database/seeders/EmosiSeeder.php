<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Emosi;

class EmosiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Emosi::create(
            ['name' => 'Antusias'],
            ['name' => 'Gembira'],
            ['name' => 'Takjub'],
            ['name' => 'Santai'],
            ['name' => 'Marah'],
            ['name' => 'Takut'],
            ['name' => 'Stress'],
            ['name' => 'Cemas'],
        );

    }
}
