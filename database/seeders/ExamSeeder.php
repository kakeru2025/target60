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
        //2023年の問題
        DB::table('exams')->insert([
            'year_id' => '1',
            'number' => '1',
            'question_string' => '\(7x-3x\)　を計算しなさい。',
            'answer' => '4x',
            'explanation_string' => '仮置き',
            'category_id' => 2,
        ]);
        
        DB::table('exams')->insert([
            'year_id' => '1',
            'number' => '2',
            'question_string' => '\(4\times(-7)+20\)　を計算しなさい。',
            'answer' => '-8',
            'explanation_string' => '仮置き',
            'category_id' => '1',
        ]);
        
        DB::table('exams')->insert([
            'year_id' => '1',
            'number' => '3',
            'question_string' => '\(30xy^2\div5x\div3y\)　を計算しなさい。',
            'answer' => '\(8xy^2\)',
            'explanation_string' => '仮置き',
            'category_id' => '2',
        ]);
        
        DB::table('exams')->insert([
            'year_id' => '1',
            'number' => '4',
            'question_string' => '方程式　\(1.3x+0.6=0.5x+3\)　を解きなさい。',
            'answer' => '\(0.3\)',
            'explanation_string' => '仮置き',
            'category_id' => '3',
        ]);
        
        DB::table('exams')->insert([
            'year_id' => '1',
            'number' => '5',
            'question_string' => '\(\dfrac{8}{\sqrt{2}}-3\sqrt{2}\)　をを計算しなさい。',
            'answer' => '\(\)',
            'explanation_string' => '仮置き',
            'category_id' => '5',
        ]);
        
        DB::table('exams')->insert([
            'year_id' => '1',
            'number' => '6',
            'question_string' => '\(x^2-11x+30\)　を因数分解しなさい。',
            'answer' => '\(\)',
            'explanation_string' => '仮置き',
            'category_id' => '4',
        ]);
        
        DB::table('exams')->insert([
            'year_id' => '1',
            'number' => '7',
            'question_string' => '連立方程式　\(\begin{eqnarray}
                                                  \left\{
                                                    \begin{array}{l}
                                                        x + y = 10 \\\\ 
                                                        2x + 4y = 32
                                                    \end{array}
                                                  \right.
                                              \end{eqnarray}\)　を解きなさい。',
            'answer' => '\(\)',
            'explanation_string' => '仮置き',
            'category_id' => '3',
        ]);
        
        DB::table('exams')->insert([
            'year_id' => '1',
            'number' => '8',
            'question_string' => '2次方程式　\(3x^2-5x-1=0\)　を解きなさい。',
            'answer' => '\(\)',
            'explanation_string' => '仮置き',
            'category_id' => '3',
        ]);
        
        DB::table('exams')->insert([
            'year_id' => '1',
            'number' => '9',
            'question_string' => "サンプルテキスト\nサンプルテキスト",
            'answer' => '\(\)',
            'explanation_string' => '仮置き',
            'category_id' => '1',
        ]);
        

        
        //2022年の問題
        DB::table('exams')->insert([
            'year_id' => '2',
            'number' => '1',
            'question_string' => '7x-9x を計算しなさい。',
            'answer' => '-2x',
            'explanation_string' => '仮置き',
            'category_id' => '2',
        ]);
        
        DB::table('exams')->insert([
            'year_id' => '2',
            'number' => '2',
            'question_string' => '5×(-3)-(-2) を計算しなさい。',
            'answer' => '-13',
            'explanation_string' => '仮置き',
            'category_id' => '1',
        ]);
        
         //2021年の問題
        DB::table('exams')->insert([
            'year_id' => '3',
            'number' => '1',
            'question_string' => '4x-9x を計算しなさい。',
            'answer' => '-5x',
            'explanation_string' => '仮置き',
            'category_id' => '2',
        ]);
        
        DB::table('exams')->insert([
            'year_id' => '3',
            'number' => '2',
            'question_string' => '-3+(-4)×5 を計算しなさい。',
            'answer' => '-23',
            'explanation_string' => '仮置き',
            'category_id' => '1',
        ]);
    }
}
