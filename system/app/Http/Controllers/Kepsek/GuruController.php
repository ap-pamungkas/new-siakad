<?php

namespace App\Http\Controllers\Kepsek;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    function index(){
        $data['list_guru'] = Guru::all();
        $data['title'] = 'Guru';
        return view('kepsek.guru.index', $data);
    }


    function show($id){
        $data['guru'] = Guru::findOrFail($id);
        return view('kepsek.guru.show', $data);

    }
}
