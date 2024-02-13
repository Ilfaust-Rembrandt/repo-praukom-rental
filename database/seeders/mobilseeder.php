<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mobilseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mobils')->insert([
            'nama'=>'Agya',
            'merk'=>'Toyota',
            'jenis'=>'Family Car',
            'biaya'=>'2000'
        ]);
    }
}
