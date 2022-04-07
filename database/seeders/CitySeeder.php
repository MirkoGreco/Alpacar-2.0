<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            'regione' => 'Abruzzo',
            'provincia' => 'Chieti',
            'comune' => 'Chieti',
            'created_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('cities')->insert([
            'regione' => 'Abruzzo',
            'provincia' => 'Pescara',
            'comune' => 'Pescara',
            'created_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('cities')->insert([
            'regione' => 'Abruzzo',
            'provincia' => 'Teramo',
            'comune' => 'Teramo',
            'created_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('cities')->insert([
            'regione' => 'Abruzzo',
            'provincia' => 'Aquila',
            'comune' => 'Aquila',
            'created_at' => \Carbon\Carbon::now(),
        ]);
    }
}
