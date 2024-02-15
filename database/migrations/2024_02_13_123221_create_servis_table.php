<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('servis', function (Blueprint $table) {
            $table->integer('id_servis', true)->autoIncrement();
            $table->integer('id_kondisi');
            $table->integer('no_parts');
            $table->date('tgl_servis');
            $table->integer('id_parts');
            $table->integer('no_parts_ganti');
        });
        Schema::table('servis', function($table){
            $table->foreign('id_kondisi')->references('id_kondisi')->on('kondisi')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servis');
    }
};