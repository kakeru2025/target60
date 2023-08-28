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
                                                        3x + 5y = 2 \\\\ 
                                                        -2x + 9y = 11
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
            'question_string' => "次のア～エの調査は，全数調査と標本調査のどちらでおこなわれますか。標本調査でおこなわれるものを二つ選び，その記号を書きなさい。<br>ア　ある河川の水質調査<br>イ　ある学校でおこなう健康診断<br>ウ　テレビ番組の視聴率調査<br>エ　日本の人口を調べる国勢調査",
            'answer' => '\(\)',
            'explanation_string' => '仮置き',
            'category_id' => '1',
        ]);
        
        DB::table('exams')->insert([
            'year_id' => '1',
            'number' => '10',
            'question_string' => '右の図において，曲線は関数　\(y=\dfrac{6}{x}\)　のグラフで，曲線上の2点A，Bのx座標はそれぞれ-6，2です。2点A，Bを通る直線の式を求めなさい。',
            'answer' => '\(\)',
            'explanation_string' => '仮置き',
            'category_id' => '3',
        ]);
        
        DB::table('exams')->insert([
            'year_id' => '1',
            'number' => '11',
            'question_string' => '関数　\(y=2x^2\)　について，xの変域が a ≦ x ≦ １ のとき，yの変域は 0 ≦ y ≦ 18 となりました。このとき、aの値を求めなさい。',
            'answer' => '\(\)',
            'explanation_string' => '仮置き',
            'category_id' => '3',
        ]);
        
        DB::table('exams')->insert([
            'year_id' => '1',
            'number' => '12',
            'question_string' => '右の図のような，AD ＝ 5 cm，BC ＝ 8 cm，AD // BCである台形ABCDがあります。辺ABの中点をEとし，Eから辺BCに平行な直線をひき，辺CDとの交点をFとするとき，線分EFの長さを求めなさい。',
            'answer' => '\(\)',
            'explanation_string' => '仮置き',
            'category_id' => '3',
        ]);
        
        DB::table('exams')->insert([
            'year_id' => '1',
            'number' => '13',
            'question_string' => '100円硬貨1枚と，50円硬貨2枚を同時に投げるとき，表が出た硬貨の合計金額が100円以上になる確率を求めなさい。ただし，硬貨の表と裏の出かたは，同様に確からしいものとします。',
            'answer' => '\(\)',
            'explanation_string' => '仮置き',
            'category_id' => '3',
        ]);
        
        DB::table('exams')->insert([
            'year_id' => '1',
            'number' => '14',
            'question_string' => '半径7 cmの球を，中心から4 cmの距離にある平面で切ったとき，切り口の円の面積を求めなさい。',
            'answer' => '\(\)',
            'explanation_string' => '仮置き',
            'category_id' => '3',
        ]);
        
        DB::table('exams')->insert([
            'year_id' => '1',
            'number' => '15',
            'question_string' => '次のア～エは，関数　\(y=ax^2\)　のグラフと，一次関数　\(y=bx+c\)　のグラフをコンピュータソフトを用いて表示したものです。ア～エのうち，a，b，c がすべて同符号であるものを一つ選び，その記号を書きなさい。',
            'answer' => '\(\)',
            'explanation_string' => '仮置き',
            'category_id' => '3',
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
