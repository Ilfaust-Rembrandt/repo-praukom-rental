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
        Schema::create('kondisi', function (Blueprint $table) {
            $table->integer('id_kondisi', true)->autoIncrement();
            $table->integer('id_servis');
            $table->string('jenis_kondisi');

        });
        Schema::table('kondisi', function($table){
            $table->foreign('id_servis')->on('servis')
            ->references('id_servis')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kondisi');
    }
};
