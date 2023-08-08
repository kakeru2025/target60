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
            'password' => Hash::make('123456'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'target_school' => '所沢',
            'self_introduction' => '頑張ります！🔥',
        ]);
    }
}
