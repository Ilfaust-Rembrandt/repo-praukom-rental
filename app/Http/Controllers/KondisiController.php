<?php

namespace App\Http\Controllers;

use App\Models\kondisi;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KondisiController extends Controller
{
    public function jenis(Request $request){
        $jenis = kondisi::all();
    }
}
