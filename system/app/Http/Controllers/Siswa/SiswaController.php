<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nilai;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Pastikan ini diaktifkan
    }
    function index(){
        return view('siswa.index');
    }

    function profile(){
        return view('siswa.profile');
    }


    function showNilai(){
        $siswaId = Auth::user();
        
        $data['list_nilai'] = Nilai::with('siswa', 'mapel', 'semester')->where('siswa_id', $siswaId->siswa_id)->get();
   

       

        return view("siswa.nilai", $data);
    }
}
