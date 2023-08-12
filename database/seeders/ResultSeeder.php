<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('results')->insert([
            'exam_id' => 1,
            'user_id' => 1,
            'is_correct' => 1,
        ]);
        
        DB::table('results')->insert([
            'exam_id' => 2,
            'user_id' => 1,
            'is_correct' => 1,
        ]);
        
        DB::table('results')->insert([
            'exam_id' => 3,
            'user_id' => 1,
            'is_correct' => 0,
        ]);
        
        DB::table('results')->insert([
            'exam_id' => 4,
            'user_id' => 1,
            'is_correct' => 1,
        ]);
    }
}
