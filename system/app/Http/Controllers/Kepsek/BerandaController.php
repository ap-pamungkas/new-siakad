<?php

namespace App\Http\Controllers\Kepsek;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    function index(){

         $jumlahSiswa = \App\Models\Siswa::count();
    $jumlahKelas = \App\Models\Kelas::count();
    $jumlahGuru = \App\Models\Guru::count();

    $jumlahSemester = \App\Models\Semester::count();

    return view('kepsek.beranda', compact('jumlahSiswa', 'jumlahKelas', 'jumlahGuru',  'jumlahSemester'));
    }

    function profile(){

        return view("kepsek.profile");
    }
}
