<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasAdminController extends Controller
{
    function index(){
        $data['title'] = "Kelas";
        $data["list_kelas"] = Kelas::orderBy('updated_at', 'desc')->paginate(3);
        return view("admin.master-data.kelas.index", $data);
    }

    function store(Request $request){
        $kelas = new Kelas;
        $kelas->kelas_nama = $request->kelas_nama;
        $kelas->kelas_tingkat = $request->kelas_tingkat;
        $kelas->save();
        return back()->with("create","data berhasil di simpan");
    }

    function destroy($kelas){
        $kelas= Kelas::find($kelas);
        
        $kelas->delete();
        return back()->with("delete","data berhasil di hapus");
    }
}
