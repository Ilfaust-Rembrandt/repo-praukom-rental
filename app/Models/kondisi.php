<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kondisi extends Model
{
    use HasFactory;
    protected $table = 'kondisi';
    protected $primaryKey = 'id_kondisi';
    protected $fillable = ['jenis_kondisi'];
}
