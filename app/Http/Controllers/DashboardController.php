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
public function add(Request $request){
    $validateData = $request->validate(
        [
            'nama'=>'required|varchar|max:250',
            'merk'=>'required|varchar|max:250|',
            'jenis'=>'required|varchar|max:250|',
            'biaya'=>'required|integer|max:250|',
        ],
        );
        mobil::create([
            'nama'=>$request->nama,
            'merk'=>$request->merk,
            'jenis'=>$request->jenis,
            'biaya'=>$request->biaya
        ]);
}
public function Save(Request $request, Mobil $mobil){
    $data = $request->validate([
        'nama' => ['required'],
        'merk' => ['required'],
        'jenis' => ['required'],
        'biaya' => ['required']

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
