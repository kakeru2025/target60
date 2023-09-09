<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use DateTime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => '管理人',
            'email' => 'a@a',
            'password' => Hash::make('123457'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'image_url' => 'https://res.cloudinary.com/dghx8vbna/image/upload/v1691562396/target60_%E4%B8%B8%E3%83%AD%E3%82%B4_jzlczt.png',
            'target_school' => '所沢高校',
            'self_introduction' => '夏休みからガチります。よろしく！🔥',
        ]);
    }
}
