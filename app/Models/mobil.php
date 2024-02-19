<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mobil extends Model
{
    use HasFactory;
    protected $table = 'mobils';
    protected $fillable =['nama','merk', 'jenis', 'biaya', 'id_kondisi', 'foto'];
    protected $primaryKey = 'id_mobil';
    public $timestamps = false;
}
