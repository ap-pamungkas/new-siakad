<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BerandaAdminController extends Controller
{
   
public function beranda()
{
    $jumlahSiswa = \App\Models\Siswa::count();
    $jumlahKelas = \App\Models\Kelas::count();
    $jumlahGuru = \App\Models\Guru::count();
    $jumlahKepsek = \App\Models\Kepsek::count();
    $jumlahSemester = \App\Models\Semester::count();

    return view('admin.beranda', compact('jumlahSiswa', 'jumlahKelas', 'jumlahGuru', 'jumlahKepsek', 'jumlahSemester'));
}

function profile(){
    return view('admin/profile');
}
}
