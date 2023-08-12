<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('commentaries')->insert([
            'category_id' => '1',
            'name' => '正負の数',
            'onepoint_advice' => 'https://res.cloudinary.com/dghx8vbna/image/upload/v1691801273/target60/commentaries/seihunokazu.jpg',
            'content' => '仮置き',
        ]);
    }
}
