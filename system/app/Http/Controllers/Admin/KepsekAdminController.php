<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Kepsek;

class KepsekAdminController extends Controller
{
    function index(){
        $data['list_kepsek'] = Kepsek::all();
        $data['title'] = 'kepsek';
        return view('admin.master-data.kepsek.index', $data);
    }

   

    function store(Request $request){
        $kepsek = new Kepsek;
        if ($request->hasFile('foto')) {
            $imageName = time().'.'.$request->foto->extension();
            $request->foto->move(public_path('images/kepsek'), $imageName);
            $kepsek->foto = 'images/kepsek/'.$imageName;
        } else {
            $kepsek->foto = null; 
        }
       
        $kepsek->nama = $request->nama;
        $kepsek->nip = $request->nip;
        $kepsek->email = $request->email;
        $kepsek->jk = $request->jk;
        $kepsek->alamat = $request->alamat;
    
        
      
    
        $kepsek->password = Hash::make($request->password);
        $kepsek->save();
    
        return back()->with('create', 'Data berhasil disimpan');
    }
   
    
    function update(Request $request, $id){
        $kepsek = Kepsek::findOrFail($id); // Cari kepsek berdasarkan ID dan pastikan kepsek tersebut ada
    
        // Perbarui data kepsek
        $kepsek->nama = $request->nama;
        $kepsek->nip = $request->nip;
        $kepsek->email = $request->email;
        $kepsek->jk = $request->jk;
        $kepsek->alamat = $request->alamat;
    
        // Handle upload foto baru
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($kepsek->foto && file_exists(public_path($kepsek->foto))) {
                unlink(public_path($kepsek->foto));
            }
    
            // Simpan foto baru
            $imageName = time().'.'.$request->foto->extension();
            $request->foto->move(public_path('images/kepsek'), $imageName);
            $kepsek->foto = 'images/kepsek/'.$imageName; // Pastikan path disimpan dengan benar
        }
    
        // Perbarui password jika ada perubahan
        if ($request->filled('password')) {
            $kepsek->password = Hash::make($request->password);
        }
    
        $kepsek->save(); // Simpan perubahan ke database
    
        return back()->with('update', 'Data kepsek berhasil diperbarui');
    }
    
    function show($id){
        $data['kepsek'] = Kepsek::findOrFail($id);
        return view('admin.master-data.kepsek.show', $data);

    }
    

    function destroy($kepsek){
        $kepsek = Kepsek::findOrFail($kepsek);
        if ($kepsek->foto && file_exists(public_path($kepsek->foto))) {
            unlink(public_path($kepsek->foto)); // Hapus file foto
        }
        $kepsek->delete();
        return back()->with('delete','data berhasil di hapus');
    }

}
