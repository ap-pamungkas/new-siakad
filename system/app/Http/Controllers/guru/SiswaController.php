<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\KelasSiswa;
use App\Models\KelasSiswaDetail;
use App\Models\Nilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;
class SiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); 
    }
    function index(){
        $guruId = Auth::user();
        $data['title'] = 'Siswa';
        $data['list_siswa'] = KelasSiswa::with('KelasSiswaDetail.siswa')
        ->where('guru_id', $guruId->guru_id)
        ->get()
        ->unique('siswa_id');
    

        return view('guru.siswa.index', $data);
    }


    function create(){
        $guruId = Auth::user();
     
        $data['list_siswa'] = Siswa::whereDoesntHave('kelasSiswaDetail')->get();
       
        $data['idGuru'] = $guruId->guru_id;
        // return $data['idGuru'];
        // return $data['kode'];
        return view("guru.siswa.create", $data);
    }
    public function store(Request $request){
 
        $siswaIds = $request->siswa_id;
         $kodeKelas = KelasSiswa::where('guru_id', $request->guru_id)->first();

            $kode = $kodeKelas->kode;


  

        foreach ($siswaIds as $siswaId) {
            $kelasSiswaDetail = new KelasSiswaDetail();
            $kelasSiswaDetail->siswa_id = $siswaId;
            $kelasSiswaDetail->kode = $kode;
            $kelasSiswaDetail->save();
        }
    
        return redirect('guru/siswa')->with('create', 'Data berhasil disimpan');
    }
    
  
      
    function update(Request $request, $id){
        $siswa = siswa::findOrFail($id); // Cari siswa berdasarkan ID dan pastikan siswa tersebut ada
    
        // Perbarui data siswa
        $siswa->nama = $request->nama;
        $siswa->nisn = $request->nisn;
        $siswa->email = $request->email;
        $siswa->jk = $request->jk;
        $siswa->alamat = $request->alamat;
    
        // Handle upload foto baru
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($siswa->foto && file_exists(public_path($siswa->foto))) {
                unlink(public_path($siswa->foto));
            }
    
            // Simpan foto baru
            $imageName = time().'.'.$request->foto->extension();
            $request->foto->move(public_path('images/siswa'), $imageName);
            $siswa->foto = 'images/siswa/'.$imageName; // Pastikan path disimpan dengan benar
        }
    
        // Perbarui password jika ada perubahan
        if ($request->filled('password')) {
            $siswa->password = Hash::make($request->password);
        }
    
        $siswa->save(); // Simpan perubahan ke database
    
        return back()->with('update', 'Data siswa berhasil diperbarui');
    }
    
    function show($id){
        $data['siswa'] = siswa::findOrFail($id);
        return view('guru.siswa.show', $data);

    }
    

    function destroy($siswa){
    
        
      
        $kelasSiswaDetail = KelasSiswaDetail::where('siswa_id', $siswa)->first();
        $siswas = Siswa::findOrFail($siswa);
        if ($siswas->foto && file_exists(public_path($siswas->foto))) {
            unlink(public_path($siswas->foto)); 
        }

        $nilai = Nilai::where('siswa_id', $siswa)->delete();
       
        $kelasSiswaDetail->delete();
      

        return back()->with('delete','data berhasil di hapus');
    }
}

