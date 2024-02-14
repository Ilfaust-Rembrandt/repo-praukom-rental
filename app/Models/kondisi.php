<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kondisi extends Model
{
    use HasFactory;
    protected $table = 'kondisi';
    protected $fillable = ['id_servis','jenis_kondisi'];
    protected $primaryKey = 'id_kondisi';
}
