<?php

namespace App\Http\Controllers;

use App\Models\kondisi;
use App\Models\mobil;
use App\Models\servis;
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
    public function ServisBoard(Request $request){
        return view('dashboard.servis.servis');
    }
    public function Addvis(servis $servis){
        $data = [ 
            'servis' => $servis->all()
        ];
        return view ('dashboard.servis.add', $data);
    }
    public function Add(kondisi $kondisi){
        $data = [
            'kondisi' => $kondisi->all()
        ];
        return view('dashboard.addboard', $data);
    }
    public function Save(Request $request, Mobil $mobil){
        $data = $request->validate([
            'foto'=>'required',
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
        if ($request->hasFile('foto_mobil') && $request->file('foto_mobil')->isValid()) {
            $foto_file = $request->file('foto_mobil');
            $foto_nama = md5($foto_file->getClientOriginalName() . time()) . '.' . $foto_file->getClientOriginalExtension();
            $foto_file->move(public_path('mobil'), $foto_nama);
            $data['foto_siswa'] = $foto_nama;
        } else {
            return back()->with('error', 'Data pengurus kelas gagal ditambahkan');
        }
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
            'foto'=>'sometimes',
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
