<?php 

namespace App\Http\Controllers;

use illuminate\Http\Request;
use App\Models\modelPenilaianMahasiswa;

class PenilaianMahasiswaController extends Controller{
    

    public function index(){
         $data_mhs = \App\Models\modelPenilaianMahasiswa::all();
         return view('NilaiMahasiswa',['data_mhs' => $data_mhs]);
    }


    public function PenilaianMahasiswa (){
        return view('penilaian');
    }

    public function simpannilai(Request $request){

        return $request->all();
        // $penilaianmahasiswa = modelPenilaianMahasiswa::findOrFail($request);
        // $penilaianmahasiswa->namamhs = $request->namamhs;
        // $penilaianmahasiswa->nrp = $request->nrp;
        // $penilaianmahasiswa->save();

        // $penilaianmahasiswa = modelPenilaianMahasiswa::create([
        //     'namamhs' => $request->input('namamhs'),
        //     'nrp' => $request->input('nrp'),
        //     // 'lab' => $request['lab'],
        //     // 'judulta' => $request->judulta,
        //     // 'nilaita' => $request->nilaita,
        //     // 'tglsidang' => $request-> tglsidang,
        // ]);
        // return redirect()->route('NilaiMahasiswa');
    }
}


