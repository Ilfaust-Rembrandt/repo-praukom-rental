<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kondisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kondisi')->insert([
            'id_kondisi' => '1',
            'jenis_kondisi' => 'Rusak'
        ]);
        DB::table('kondisi')->insert([
            'id_kondisi' => '2',
            'jenis_kondisi' => 'Bengkel'
        ]);
        DB::table('kondisi')->insert([
            'id_kondisi' => '3',
            'jenis_kondisi' => 'Aman'
        ]);
        DB::table('kondisi')->insert([
            'id_kondisi' => '4',
            'jenis_kondisi' => 'Hilang'
        ]);

    }
}
