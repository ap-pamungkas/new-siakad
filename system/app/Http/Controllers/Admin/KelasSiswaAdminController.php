<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KelasSiswa;
use App\Models\KelasSiswaDetail;
use App\Models\Kelas;
use App\Models\Guru;
use App\Models\Siswa;
use App\Models\Mapel;
use \Illuminate\Support\Facades\Log;

class KelasSiswaAdminController extends Controller
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


        return view("admin.master-data.kelas-siswa.index", $data);
    }


    function create(){
        $data['kode'] = KelasSiswa::generateCode();
     
        $data['list_siswa'] = Siswa::whereDoesntHave('kelasSiswaDetail')->get();
        $data['list_kelas'] = Kelas::whereDoesntHave('kelasSiswa')->get();
        $data['list_guru'] = Guru::whereDoesntHave('kelasSiswa')->get();
        $data['list_mapel'] = Mapel::all();

        // return $data['kode'];
        return view("admin.master-data.kelas-siswa.create", $data);
    }

 
   
  



    public function store(Request $request){
        $siswaIds = $request->siswa_id;
        $guruId = $request->guru_id;
        $mapelIds = $request->mapel_id;
        $kelasId = $request->kelas_id;
        $kode = $request->kode;
    
 
    

       
    
        // Simpan sisanya mapelIds dengan kode yang sama
        for ($i = 1; $i < count($mapelIds); $i++) {
            $kelasSiswa = new KelasSiswa();
            $kelasSiswa->guru_id = $guruId;
            $kelasSiswa->kelas_id = $kelasId;
            $kelasSiswa->mapel_id = $mapelIds[$i];
            $kelasSiswa->kode = $kode; 
            
            $kelasSiswa->save();
        }
    
        // Simpan detail siswa dengan kode yang sama
        foreach ($siswaIds as $siswaId) {
            $kelasSiswaDetail = new KelasSiswaDetail();
            $kelasSiswaDetail->siswa_id = $siswaId;
            $kelasSiswaDetail->kode = $kode; // Gunakan kode yang sama
            $kelasSiswaDetail->save();
        }
    
        return redirect('admin/master-data/kelas-siswa')->with('create', 'Data berhasil disimpan');
    }

    function destroy( $kelas_siswa){
         KelasSiswa::where("kelas_id", $kelas_siswa)->delete();
      

        return back()->with("delete","data berhasil di hapus");
    }

    function show($kelas_siswa_id){

        $kode = decrypt($kelas_siswa_id);
        $data['list'] = KelasSiswa::with(['kelas', 'guru', 'mapel', 'kelasSiswaDetail.siswa'])->where("kode", $kode)->get();
     

       
       
      
     
        return view("admin.master-data.kelas-siswa.show", $data);
    }

  
}
