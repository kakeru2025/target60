<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exams')->insert([
            'year_id' => '1',
            'number' => '1',
            'question_string' => '7x-3x を計算しなさい。',
            'answer' => '4x',
            'explanation_string' => '仮置き',
        ]);
        
        DB::table('exams')->insert([
            'year_id' => '1',
            'number' => '2',
            'question_string' => '4×(-7)+20 を計算しなさい。',
            'answer' => '-8',
            'explanation_string' => '仮置き',
        ]);
    }
}
