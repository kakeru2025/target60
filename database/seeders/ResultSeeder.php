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
        // 以下テストデータ
        DB::table('results')->insert([
            'exam_id' => 1,
            'user_id' => 1,
            'is_correct' => 0,
        ]);
        
        DB::table('results')->insert([
            'exam_id' => 2,
            'user_id' => 1,
            'is_correct' => 1,
        ]);
        
        DB::table('results')->insert([
            'exam_id' => 3,
            'user_id' => 1,
            'is_correct' => 1,
        ]);
        
        DB::table('results')->insert([
            'exam_id' => 4,
            'user_id' => 1,
            'is_correct' => 1,
        ]);
        
        DB::table('results')->insert([
            'exam_id' => 5,
            'user_id' => 1,
            'is_correct' => 1,
        ]);
        
        DB::table('results')->insert([
            'exam_id' => 6,
            'user_id' => 1,
            'is_correct' => 1,
        ]);
        
        DB::table('results')->insert([
            'exam_id' => 7,
            'user_id' => 1,
            'is_correct' => 1,
        ]);
        
        DB::table('results')->insert([
            'exam_id' => 8,
            'user_id' => 1,
            'is_correct' => 1,
        ]);
        
        DB::table('results')->insert([
            'exam_id' => 9,
            'user_id' => 1,
            'is_correct' => 0,
        ]);
        
        DB::table('results')->insert([
            'exam_id' => 10,
            'user_id' => 1,
            'is_correct' => 1,
        ]);
        
        DB::table('results')->insert([
            'exam_id' => 11,
            'user_id' => 1,
            'is_correct' => 1,
        ]);
        
        DB::table('results')->insert([
            'exam_id' => 12,
            'user_id' => 1,
            'is_correct' => 0,
        ]);
        
        DB::table('results')->insert([
            'exam_id' => 13,
            'user_id' => 1,
            'is_correct' => 0,
        ]);
        
        DB::table('results')->insert([
            'exam_id' => 14,
            'user_id' => 1,
            'is_correct' => 1,
        ]);
        
        DB::table('results')->insert([
            'exam_id' => 15,
            'user_id' => 1,
            'is_correct' => 1,
        ]);
        
        DB::table('results')->insert([
            'exam_id' => 18,
            'user_id' => 1,
            'is_correct' => 1,
        ]);
    }
}
