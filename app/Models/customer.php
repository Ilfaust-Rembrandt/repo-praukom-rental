<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticable;

class customer extends Authenticable
{
    use HasFactory;
    protected $table = 'customer';
    protected $fillable = ['id_user', 'alamat_rumah', 'foto_ktp', 'nama_lengkap', 'kode_pos', 'no_telp'];
    protected $primaryKey = 'id_customer';
}
