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
    // memanggil view tambah
    
    return view('dashboard.addboard');
}
public function save(Request $request, Mobil $mobil){
    $data = $request->validate([
        'nama' => ['required'],
        'merk' => ['required'],
        'jenis' => ['required'],
        'kondisi'=>['required'],
        'biaya' => ['required']

    ]);
    if($request->input('id_mobil') !== null){
        $dataUpdate = mobil::where('id_mobil', $request->input('id_mobil'))
        ->update();
        if($dataUpdate){
            return redirect('dashboard')->with('Success');  
        }
        else{
            return back()->with('Error');
        }
    }
    else{
        if($data):
            $data['id_servis'] = 1;
        //Save if all data filled
        mobil::create([
            'nama'=>$request->nama,
            'merk'=>$request->merk,
            'jenis'=>$request->jenis,
            'kondisi'=>$request->kondisi,
            'biaya'=>$request->biaya,
            
        ]);
        
    endif;
    }
    return redirect()->route('dashboard.dashboard');
    
}
public function delete(){

}
}
