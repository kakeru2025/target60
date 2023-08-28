<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class YearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('years')->insert([
            'year' => '2023年',
        ]);
        
         DB::table('years')->insert([
            'year' => '2022年',
        ]);
        
         DB::table('years')->insert([
            'year' => '2021年',
        ]);
    }
}
