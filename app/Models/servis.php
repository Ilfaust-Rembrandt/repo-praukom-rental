<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servis extends Model
{
    use HasFactory;
    protected $table = 'servis';
    protected $primaryKey = 'id_servis';
    protected $fillable = ['id_kondisi', 'nama_parts', 'id_parts','tgl_servis', 'no_parts_ganti'];
    public $timestamps = false;
}
