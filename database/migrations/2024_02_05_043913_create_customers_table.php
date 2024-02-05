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
        Schema::create('customer', function (Blueprint $table) {
            $table->increments('id_customer');
            $table->integer('id_user');
            $table->text('alamat_rumah');
            $table->text('foto_ktp');
            $table->string('nama_lengkap');
            $table->string('kode_pos', 5);
            $table->string('no_telp');

            $table->index('id_customer');
            $table->index('id_user');
        });
        Schema::table('customer', function($table){
            $table->foreign('id_user')->on('user')
            ->references('id_user')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer');
    }
};
