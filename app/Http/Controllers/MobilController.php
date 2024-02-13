<?php

namespace App\Http\Controllers;

use App\Models\mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function index(Mobil $namaMobil){
        $data = $namaMobil->all();
        return view('selection.selection', $data);
    }
public function add(){

}
public function save(){
    
}
public function update(Request $request){
    
}
public function delete(){

}
}
