<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelAdminController extends Controller
{
    function index(){
        $data['title'] ='Mata Pelajaran';
        $data['list_mapel'] =Mapel::orderBy('updated_at', 'desc')->get();
        return view('admin.master-data.mapel.index', $data);
    }

    function store(Request $request){
        $mapel= new Mapel;
        $mapel->mapel_nama=$request->mapel_nama;
        $mapel->mapel_kode=$request->mapel_kode;
        $mapel->save();
        return back()->with('create','data berhasil di simpan');
    }

    function destroy($mapel){
        $mapel= mapel::find($mapel);
        $mapel->delete();
        return back()->with('delete',' data berhasil di hapus');
    }
}
