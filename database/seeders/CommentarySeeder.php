<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

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
            'onepoint_advice_url' => 'https://res.cloudinary.com/dghx8vbna/image/upload/v1691801273/target60/commentaries/seihunokazu.jpg',
            'content' => '中学校に入学して最初に学ぶ単元。難しく考える必要はありません。冷静に取り組めば、問題ありません。｜大問1の(1)には必ずこの「正負の数」の簡単な計算問題が出てきます。｜確実に解けるように練習しましょう。',
        ]);
    }
}
