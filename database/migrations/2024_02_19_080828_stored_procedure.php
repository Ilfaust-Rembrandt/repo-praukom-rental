<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared("
        CREATE PROCEDURE CreateMobil(
            IN new_id_kondisi INT(11),
            IN new_nama VARCHAR(255),
            IN new_foto TEXT,
            IN new_merk VARCHAR(255),
            IN new_jenis VARCHAR(255),
            IN new_biaya INT(11))
            BEGIN
            DECLARE pesan_error CHAR(5) DEFAULT '000';
            
            DECLARE CONTINUE HANDLER FOR SQLEXCEPTION
            BEGIN
            SET pesan_error = '001';
            END;
        
            START TRANSACTION; -- Memulai transaction
        
            INSERT INTO mobils (id_kondisi, nama, foto, merk, jenis, biaya)
            VALUES (new_id_kondisi, new_nama, new_foto, new_merk, new_jenis, new_biaya);
            
            IF pesan_error = '000' THEN
                COMMIT; -- Commit jika tidak ada error
            ELSE
            ROLLBACK; -- Rollback jika terdapat error
            END IF;
            END
            ");
        }

        /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP Procedure IF EXISTS CreateMobil');
    }
};
