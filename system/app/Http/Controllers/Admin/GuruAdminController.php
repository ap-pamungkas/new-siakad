<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\KelasSiswa;
use Illuminate\Support\Facades\Hash;

class GuruAdminController extends Controller
{
    function index(){
        $data['list_guru'] = Guru::all();
        $data['title'] = 'Guru';
        return view('admin.master-data.guru.index', $data);
    }

   

    function store(Request $request){
        $guru = new Guru;
        if ($request->hasFile('foto')) {
            $imageName = time().'.'.$request->foto->extension();
            $request->foto->move(public_path('images/guru'), $imageName);
            $guru->foto = 'images/guru/'.$imageName;
        } else {
            $guru->foto = null; // Atau path default jika Anda memiliki gambar default
        }
       
        $guru->nama = $request->nama;
        $guru->nip = $request->nip;
        $guru->email = $request->email;
    
        $guru->jk = $request->jk;
        $guru->alamat = $request->alamat;
      
    
        $guru->password = Hash::make($request->password);
        $guru->save();
    
        return back()->with('create', 'Data berhasil disimpan');
    }
   
    
    function update(Request $request, $id){
        $guru = Guru::findOrFail($id); // Cari guru berdasarkan ID dan pastikan guru tersebut ada
    
        // Perbarui data guru
        $guru->nama = $request->nama;
        $guru->nip = $request->nip;
        $guru->email = $request->email;
        $guru->jk = $request->jk;
        $guru->alamat = $request->alamat;
      
        // Handle upload foto baru
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($guru->foto && file_exists(public_path($guru->foto))) {
                unlink(public_path($guru->foto));
            }
    
            // Simpan foto baru
            $imageName = time().'.'.$request->foto->extension();
            $request->foto->move(public_path('images/guru'), $imageName);
            $guru->foto = 'images/guru/'.$imageName; // Pastikan path disimpan dengan benar
        }
    
        // Perbarui password jika ada perubahan
        if ($request->filled('password')) {
            $guru->password = Hash::make($request->password);
        }
    
        $guru->save(); // Simpan perubahan ke database
    
        return back()->with('update', 'Data guru berhasil diperbarui');
    }
    
    function show($id){
        $data['guru'] = Guru::findOrFail($id);
        return view('admin.master-data.guru.show', $data);

    }
    



    function destroy($guru){

        
        $guru = Guru::findOrFail($guru);

        $kelasSiswa = KelasSiswa::where('guru_id', $guru->guru_id)->get();
        $kelasSiswaDetail = KelasSiswa::where('kode', $kelasSiswa->kode)->get();
        
        // return $kelasSiswa;
        if ($guru->foto && file_exists(public_path($guru->foto))) {
            unlink(public_path($guru->foto)); // Hapus file foto
        }
        $kelasSiswaDetail->delete();
        $kelasSiswa->delete();
        $guru->delete();

        return back()->with('delete','data berhasil di hapus');
    }

}
