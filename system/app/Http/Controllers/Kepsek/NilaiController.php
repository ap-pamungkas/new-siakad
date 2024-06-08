<?php

namespace App\Http\Controllers\Kepsek;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;

use App\Models\Nilai;


class NilaiController extends Controller
{
    function index(){
      
        
        $data['list_nilai'] = Nilai::with('siswa', 'mapel', 'semester')->get();
        return view("kepsek.nilai.index", $data);
    }
}
