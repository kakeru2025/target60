<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => '正負の数',
        ]);
        
        DB::table('categories')->insert([
            'name' => '文字と式',
        ]);
        
        DB::table('categories')->insert([
            'name' => '方程式',
        ]);
        
        
        DB::table('categories')->insert([
            'name' => '因数分解',
        ]);
        
        
        DB::table('categories')->insert([
            'name' => '平方根',
        ]);
    }
}
