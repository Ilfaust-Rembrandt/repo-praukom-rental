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
        Schema::create('mobils', function (Blueprint $table) {
            $table->id('id_mobil');
            $table->integer('id_servis');
            $table->string('nama');
            $table->string('merk');
            $table->string('jenis');
            $table->integer('biaya');
            $table->index('id_servis')->default(1);
        });
        Schema::table('mobils', function($table){
            $table->foreign('id_servis')->on('servis')
            ->references('id_servis')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobils');
    }
};
