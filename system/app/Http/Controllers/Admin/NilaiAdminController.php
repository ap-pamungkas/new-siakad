<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Nilai;
use App\Models\Mapel;
use App\Models\Semester;
use App\Models\Siswa;

class NilaiAdminController extends Controller
{
public function index(){
    $title = "Nilai";
    $data['list_siswa'] = Siswa::all();
    $data['list_mapel'] = Mapel::all();
    $data['list_semester'] = semester::all();
    $data['list_nilai'] = Nilai::with('siswa', 'mapel', 'semester')->get();

return view("admin.master-data.nilai.index", $data);
}


function create(){

    return view('admin.master-data.nilai.create');
}
public function store(Request $request)
{
    $request->validate([
        'siswa_id' => 'required',
        'mapel_id' => 'required',
        'semester_id' => 'required',
        'nilai_tugas' => 'required|numeric',
        'nilai_ulangan' => 'required|numeric',
        'nilai_uts' => 'required|numeric',
        'nilai_uas' => 'required|numeric',
    ]);

    // Cek duplikasi berdasarkan siswa_id dan mapel_id
    $duplikat = Nilai::where('siswa_id', $request->siswa_id)
                     ->where('mapel_id', $request->mapel_id)
                     ->first();

    if ($duplikat) {
        return redirect()->back()->with('error', 'Nilai untuk siswa ini pada mata pelajaran ini sudah ada.');
    }

    $nilai = new Nilai;
    $nilai->siswa_id = $request->siswa_id;
    $nilai->mapel_id = $request->mapel_id;
    $nilai->semester_id = $request->semester_id;
    $nilai->nilai_tugas = $request->nilai_tugas;
    $nilai->nilai_ulangan = $request->nilai_ulangan;
    $nilai->nilai_uts = $request->nilai_uts;
    $nilai->nilai_uas = $request->nilai_uas;
    $nilai->total = ($nilai->nilai_tugas + $nilai->nilai_ulangan + $nilai->nilai_uts + $nilai->nilai_uas) / 4;

    if ($nilai->save()) {
        return redirect()->back()->with('create', 'Data nilai berhasil disimpan.');
    } else {
        return redirect()->back()->with('error', 'Data nilai gagal disimpan.');
    }
}


function destroy($nilai){
    
    $nilai = Nilai::find($nilai);
    $nilai->delete();
    return back()->with('delete','succes');
}
}

