<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user')->insert([
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('123')
        ]);

        DB::table('user')->insert([
            'username' => 'guest',
            'role'=>'1',
        ]);
    }
}
