<?php

namespace App\Http\Controllers;

use App\Models\mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function MobilData(Mobil $mobil){
        $data = [
            'mobil' => $mobil->all()
        ];
        return view('dashboard.dashboard', $data);
    }
public function add(){

}
public function save(){
    
}
public function update(Request $request){
    //
    $validate = $request->validate(
        [
            ''=> [''],
        ]
        );
}
public function delete(){

}
}
