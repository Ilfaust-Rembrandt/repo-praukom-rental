<?php

namespace App\Http\Controllers;

use App\Models\kondisi;
use App\Models\Logs;
use App\Models\mobil;
use App\Models\servis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class DashboardController extends Controller
{
    //Start of Logs
        public function Logs(Logs $logs){
            $data = [
                'logs'=> $logs->orderBy('id_log', 'desc')->get(),
            ];

            return view('dashboard.log', $data);
        }
    //End of Logs
    
    //Start of Servis
    public function ServisBoard(servis $servis, kondisi $kondisi){
        $data = [ 
            'servis' => $servis->all(),
            'kondisi'=>  $kondisi->all()
        ];
        return view('dashboard.servis.servis', $data);
    }
    public function Savis(Request $request, Servis $servis){
        $data= $request->validate(
            [
                'id_kondisi'=>'required',
                'nama_parts'=>'required',
                'tgl_servis'=>'required',
                'id_parts'=>'required',
                'no_parts_ganti'=>'required'
            ]);
        if($data):
            $servis->create($data);
            return redirect('/dashboard/servis');
        else:
            return redirect ('/servis/add');
        endif;
    }

    public function Addvis(kondisi $kondisi){
        $data = [
            'kondisi' => $kondisi->all()
            
        ];
        return view('dashboard.servis.addvis', $data);
    }

    //End of Servis

    //Start of Mobil
        
    public function AdminBoard(Mobil $mobil, Kondisi $kondisi){
        $data = [
            'mobil' => $mobil->all(),
            'kondisi' => $kondisi->all(),
            'totalMobil' => DB::select('SELECT CountMobil() AS totalMobil')[0]->totalMobil
        ];
        return view('dashboard.dashboard', $data);
    }
    public function Save(Request $request){
        $data = $request->validate([
            'foto'=>'required',
            'nama' => 'required',
            'merk' => 'required',
            'jenis' => 'required',
            'id_kondisi'=>'required',
            'biaya' => 'required'
        ]);
        if($data && $request->hasFile('foto') && $request->file('foto')->isValid()){
            $foto_file = $request->file('foto');
            $foto_nama = md5($foto_file->getClientOriginalName() . time()) . '.' . $foto_file->getClientOriginalExtension();
            $foto_file->move(public_path('img'), $foto_nama);
            $data['foto'] = $foto_nama;
            $sukses = DB::statement("CALL CreateMobil(?,?,?,?,?,?)", [$data['id_kondisi'], $data['nama'], $foto_nama, $data['merk'], $data['jenis'], $data['biaya']] );
            if ($sukses) {
            return redirect('/dashboard');
        }else{
            return redirect('/dashboard/addboard');
        }
    }
}
    public function Add(kondisi $kondisi){
        $data = [
            'kondisi' => $kondisi->all()
        ];
        return view('dashboard.addboard', $data);
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
