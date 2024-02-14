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
    // memanggil view tambah
    return view('dashboard.addboard');
}
public function Save(Request $request, Mobil $mobil){
    $data = $request->validate([
        'nama' => ['required'],
        'merk' => ['required'],
        'jenis' => ['required'],
        'kondisi'=>['required'],
        'biaya' => ['required']

    ]);
    mobil::create([
        'nama'=>$request->nama,
        'merk'=>$request->merk,
        'jenis'=>$request->jenis,
        'kondisi'=>$request->kondisi,
        'biaya'=>$request->biaya
    ]);

    if($data):
        $mobil->create($data);
        return redirect('/dashboard/addboard');
    else:
        return redirect('/dashboard/addboard/save');
    endif;
}
public function delete(){

}
}
