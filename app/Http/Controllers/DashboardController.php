<?php

namespace App\Http\Controllers;

use App\Models\mobil;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function AdminBoard(Mobil $mobil){
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
