<?php

namespace App\Http\Controllers\Kepsek;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index(){
        $data['list_siswa'] = Siswa::all();
        return view("kepsek.siswa.index", $data);
    }

    function show($id){
        $data['siswa'] = siswa::findOrFail($id);
        return view('kepsek.siswa.show', $data);

    }
}
