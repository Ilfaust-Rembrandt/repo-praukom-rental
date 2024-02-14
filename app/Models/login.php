<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class login extends Authenticatable
{
    use HasFactory;
    protected $table = 'user';
    protected $fillable = ['username', 'password', 'role'];
    protected $primaryKey = 'id_user';
    public $timestamps = false;
}