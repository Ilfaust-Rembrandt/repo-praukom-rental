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
    return view('dashboard.addboard');
}
public function save(Request $request, Mobil $mobil){
    $data = $request->validate([
        'nama' => ['required'],
        'merk' => ['required'],
        'jenis' => ['required'],
        'biaya' => ['required']

    ]);

    if($data):
        $data['id_mobil'] = 1;
        $mobil->create($data);
        return redirect('/dashboard/dashboard');
    else:
        return view('dashboard/addboard/save');
    endif;
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
