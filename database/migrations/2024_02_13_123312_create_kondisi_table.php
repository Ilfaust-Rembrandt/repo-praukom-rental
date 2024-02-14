<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kondisi', function (Blueprint $table) {
            $table->integer('id_kondisi', true)->autoIncrement();
            $table->integer('id_servis')->default('1');
            $table->string('jenis_kondisi');

        });
        Schema::table('kondisi', function($table){
            $table->foreign('id_servis')->on('servis')
            ->references('id_servis')->onDelete('cascade')->onUpdate('cascade');
        });
        DB::table('jenis_kondisi')->insert([
            ['jenis_kondisi'=>'Rusak'],
            ['jenis_kondisi'=>'Aman'],
            ['jenis_kondisi'=>'Bengkel']
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kondisi');
    }
};
