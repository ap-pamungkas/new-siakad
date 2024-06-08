<?php

namespace App\Http\Controllers\Kepsek;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\guru;
use App\Models\KelasSiswa;


class KelasSiswaController extends Controller
{
    function index(){
        $data['title'] = "Kelas Siswa";
       $data['kelas']= Kelas::all();
       $data['guru']=Guru::all();
       $data['list'] = KelasSiswa::with(['kelas', 'guru', 'kelasSiswaDetail.siswa', 'mapel'])
    ->get()
    ->groupBy(['kelas_id'])
    
    ->map(function ($group) {
        $first = $group->first(); 
        return [
            'kode' => $first->kode,
            'kelas_siswa_id'=>$first->kelas_id,
            'nama_kelas' => $first->kelas->kelas_nama, 
            'nama_guru' => $first->guru->nama, 
            'jumlah_siswa' => $group->flatMap(function ($item) {
                return $item->kelasSiswaDetail->pluck('siswa_id');
            })->unique()->count(),
            'jumlah_mapel' => $group->pluck('mapel_id')->unique()->count() 
        ];
    });


        return view("kepsek.kelas-siswa.index", $data);
    }

    function show($kelas_siswa_id){

        $kode = decrypt($kelas_siswa_id);
        $data['list'] = KelasSiswa::with(['kelas', 'guru', 'mapel', 'kelasSiswaDetail.siswa'])->where("kode", $kode)->get();
     

       
       
      
     
        return view("kepsek.kelas-siswa.show", $data);
    }

}
