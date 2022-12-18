<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelPenilaianMahasiswa;

class controllerMhs extends Controller
{
    public function simpannilai(Request $request){
        $penilaianmahasiswa = modelPenilaianMahasiswa::create([
            'namamhs' => $request->namamhs,
            'nrp' => $request->nrp,
            'lab' => $request->lab,
            'judulta' => $request->judulta,
            'nilaita' => $request->nilaita,
            'tglsidang' => $request-> tglsidang,
        ]);
        return redirect()->route('NilaiMahasiswa');
    }
}
