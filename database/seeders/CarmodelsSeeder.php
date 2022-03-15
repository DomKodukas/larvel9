<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Carmodels;

class CarmodelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carmodels::create([
            'masinos_spalva' => 'Juoda',
            'masinos_marke' => 'Audi',
            'masinos_numeriai' => 'LTE 221'
        ]);
        Carmodels::create([
            'masinos_spalva' => 'Geltona',
            'masinos_marke' => 'BMW',
            'masinos_numeriai' => 'YYT 432'
        ]);
        Carmodels::create([
            'masinos_spalva' => 'Raudona',
            'masinos_marke' => 'Mercedes',
            'masinos_numeriai' => 'WWQ 991'
        ]);
        Carmodels::create([
            'masinos_spalva' => 'Zalia',
            'masinos_marke' => 'Skoda',
            'masinos_numeriai' => 'PQW 002'
        ]);
        Carmodels::create([
            'masinos_spalva' => 'Melyna',
            'masinos_marke' => 'Volkswagen',
            'masinos_numeriai' => 'IIW 581'
        ]);
    }
}
