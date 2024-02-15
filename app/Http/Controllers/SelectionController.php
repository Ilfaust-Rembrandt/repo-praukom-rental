<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SelectionController extends Controller
{
    public function SelectionPage(){
        return view('selection.selection');
    }
    public function Lambo(){
        return view('selection.lambo');
    }
}
