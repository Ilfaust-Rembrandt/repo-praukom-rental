<?php

namespace App\Http\Controllers;

use App\Models\servis;
use Illuminate\Http\Request;

class ServisController extends Controller
{
    public function register(request $request)
    {
        $validateData = $request->validate(
            [
                'no_parts'=>$request->parts,
                'tgl_servis'=>$request->tgl,
                'id_parts'=>$request->id,
                'no_parts_ganti'=>$request->ganti
            ],
            );
            servis::create([
                'no_parts'=>$request->parts,
                'tgl_servis'=>$request->tgl,
                'id_parts'=>$request->id,
                'no_parts_ganti'=>$request->ganti
            ]);

            return redirect()->route('dashboard');
        
    }
}
