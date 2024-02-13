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
    $validate = $request->validate([
        'id_mobil'=>['required'],
        'nama' => ['required'],
        'merk' => ['required'],
        'jenis' => ['required'],
        'biaya' => ['required']

    ]);

    if($validate):
        Mobil::where('id_mobil', $request->get('id_mobil'))
        ->update($validate);
        return redirect('/dashboard/addboard')->with('Success');
    else:
        return redirect('dashboard/addboard/save')->with('Fail');
    endif;
}
public function update(Request $request){
    //
}
public function delete(){

}
}
