<?php

namespace App\Http\Controllers;

use App\Models\kondisi;
use App\Models\mobil;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function AdminBoard(Mobil $mobil, Kondisi $kondisi){
        $data = [
            'mobil' => $mobil->all(),
            'kondisi' => $kondisi->all()
        ];
        return view('dashboard.dashboard', $data);
    }
    public function Add(kondisi $kondisi){
        $data = [
            'kondisi' => $kondisi->all()
        ];
        return view('dashboard.addboard', $data);
    }
    public function Save(Request $request, Mobil $mobil){
        $data = $request->validate([
            'nama' => 'required',
            'merk' => 'required',
            'jenis' => 'required',
            'id_kondisi'=>'required',
            'biaya' => 'required'
        ]);
        if($data):
            $mobil->create($data);
            return redirect('/dashboard');
        else:
            return redirect('/dashboard/addboard');
        endif;
    }

    public function Edit(Request $request, mobil $mobil, kondisi $kondisi){
        $data = [
            'mobil' => $mobil->where('id_mobil', $request->id)->first(),
            'kondisi' => $kondisi->all()
        ];
        return view('dashboard.editboard', $data);
    }

    public function Update(Request $request, mobil $mobil){
        $data = $request->validate([
            'nama' => 'sometimes',
            'merk' => 'sometimes',
            'jenis' => 'sometimes',
            'id_kondisi'=>'sometimes',
            'biaya' => 'sometimes'
        ]);
        // dd();
        if($data){
            $mobil->where('id_mobil', $request->id_mobil)->update($data);
            return redirect('/dashboard');
        }else{
            return back()->with('error', 'Data mobil diupdate');
        }
    }
    public function Delete(Request $request, mobil $mobil){
        $id_mobil = $request->id_mobil;
        if($mobil->where('id_mobil', $id_mobil)->delete()){
            $pesan = [
                'success' => true,
                'pesan' => 'Data berhasil dihapus'
            ];
        }else
        {
            $pesan = [
                'success' => false,
                'pesan' => 'Data gagal dihapus'
            ];
        }
        return response()->json($pesan);
    }
    
}
