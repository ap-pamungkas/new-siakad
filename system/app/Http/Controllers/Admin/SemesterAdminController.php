<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Semester;
use App\Models\Nilai;
use Illuminate\Http\Request;

class SemesterAdminController extends Controller
{
    function index(){
        $data['title'] ='Semester';
        $data['list_semester'] =Semester::orderBy('updated_at', 'desc')->get();
        return view('admin.master-data.semester.index', $data);
    }

    function store(Request $request){
        $semester= new Semester;
        $semester->semester_tingkat=$request->semester_tingkat;
        $semester->tahun_ajaran=$request->tahun_ajaran;
        $semester->save();
        return back()->with('create','data berhasil di simpan');
    }

    function destroy($semester){

        $nilai = Nilai::where('semester_id', $semester)->delete();
        $semesters= Semester::find($semester);

       $semesters->delete();
        return back()->with('delete',' data berhasil di hapus');
    }
}
