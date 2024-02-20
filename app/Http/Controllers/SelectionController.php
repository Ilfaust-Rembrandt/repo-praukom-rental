<?php

namespace App\Http\Controllers;

use App\Models\kondisi;
use App\Models\mobil;
use Illuminate\Http\Request;

class SelectionController extends Controller
{
    public function SelectionPage(mobil $mobil){
        $data = [
            'mobil' => $mobil->all()
        ];
        return view('selection.selection', $data);
    }
    public function SelectionInfo(mobil $mobil, kondisi $kondisi){
        $data = [
            'mobil' => $mobil->all(),
            'kondisi' => $kondisi->all()
        ];

        return view('selection.selview', $data);
    }
}
