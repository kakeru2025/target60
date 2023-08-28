<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class SayingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sayings')->insert([
            'saying' => '努力することより、しないことの方が難しい',
            'person' => 'ポール・マッカートニー (ミュージシャン、ビートルズ)',
            'explanation' => '伝説のロックバンドであるビートルズのメンバーの一人。',
        ]);
        
        DB::table('sayings')->insert([
            'saying' => 'いかなる時にも自分は思う。もう一歩。今が一番大事な時なんだ。もう一歩。',
            'person' => '武者小路実篤',
            'explanation' => '伝説のロックバンドであるビートルズのメンバーの一人。',
        ]);
    }
}
