<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('people')->insert([
            'dni'=>'20097258',
            'name' => 'Pedro',
            'birthday'=> Carbon::create('1990', '01', '01')
        ]);
        DB::table('people')->insert([
            'dni'=>'10077258',
            'name' => 'Maria',
            'birthday'=> Carbon::create('1980', '01', '01')
        ]);
        DB::table('people')->insert([
            'dni'=>'3095258',
            'name' => 'Jessica',
            'birthday'=> Carbon::create('1980', '01', '01')
        ]);

    }
}
