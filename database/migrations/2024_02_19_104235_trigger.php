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
        DB::unprepared('
            CREATE TRIGGER add_mobil
            BEFORE INSERT ON mobils
            FOR EACH ROW
            BEGIN
                INSERT logs(tabel, aktor, tanggal, jam, aksi, record)
                VALUES ("mobil", "admin", CURDATE(), CURTIME(), "Tambah", "Sukses");
            END
        ');

        DB::unprepared('
            CREATE TRIGGER del_mobil
            AFTER DELETE ON mobils
            FOR EACH ROW
            BEGIN
                INSERT logs(tabel, aktor, tanggal, jam, aksi, record)
                VALUES ("mobil", "admin", CURDATE(), CURTIME(), "Hapus", "Sukses");
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
