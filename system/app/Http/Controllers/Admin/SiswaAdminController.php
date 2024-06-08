<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\KelasSiswaDetail;
use App\Models\Nilai;



class SiswaAdminController extends Controller
{
    function index(){
        $data['title'] = 'Siswa';
        $data['list_siswa'] = Siswa::orderBy('updated_at','desc')->get();
        return view('admin.master-data.siswa.index', $data);
    }
    function store(Request $request){
        $siswa = new Siswa;
        if ($request->hasFile('foto')) {
            $imageName = time().'.'.$request->foto->extension();
            $request->foto->move(public_path('images/siswa'), $imageName);
            $siswa->foto = 'images/siswa/'.$imageName;
        } else {
            $siswa->foto = null; // Atau path default jika Anda memiliki gambar default
        }
       
        $siswa->nama = $request->nama;
        $siswa->nisn = $request->nisn;
        $siswa->email = $request->email;
        $siswa->jk = $request->jk;
        $siswa->alamat = $request->alamat;
    
        
      
    
        $siswa->password = Hash::make($request->password);
        $siswa->save();
    
        return back()->with('create', 'Data berhasil disimpan');
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
        return view('admin.master-data.siswa.show', $data);

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
