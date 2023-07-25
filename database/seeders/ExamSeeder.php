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
        //2022年の問題
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
        
        //2021年の問題
        DB::table('exams')->insert([
            'year_id' => '2',
            'number' => '1',
            'question_string' => '7x-9x を計算しなさい。',
            'answer' => '-5x',
            'explanation_string' => '仮置き',
        ]);
        
        DB::table('exams')->insert([
            'year_id' => '1',
            'number' => '2',
            'question_string' => '-3+(-4)×5計算しなさい。',
            'answer' => '-23',
            'explanation_string' => '仮置き',
        ]);
    }
}
