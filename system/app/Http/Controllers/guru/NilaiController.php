<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\KelasSiswa;
use Illuminate\Http\Request;
use App\Models\Nilai;
use App\Models\Mapel;
use App\Models\Semester;
use App\Models\Siswa;

use Illuminate\Support\Facades\Auth;

class NilaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Pastikan ini diaktifkan
    }
    public function index()
    {
        $guruId = Auth::user()->guru_id;

        $kelasSiswas = KelasSiswa::with(['KelasSiswaDetail.siswa', 'mapel'])
            ->where('guru_id', $guruId)
            ->get();


        $data['list_mapel'] = $kelasSiswas->flatMap(function ($kelasSiswa) {
            return $kelasSiswa->mapel->map(function ($mapel) {
                return [
                    'mapel_id' => $mapel->mapel_id,
                    'mapel_nama' => $mapel->mapel_nama,
                ];
            });
        })->unique('mapel_id')->values();


        $data['list_siswa'] = $kelasSiswas->flatMap(function ($kelasSiswa) {
            return $kelasSiswa->KelasSiswaDetail->map(function ($detail) use ($kelasSiswa) {
                return [
                    'siswa_id' => $detail->siswa->siswa_id,
                    'nama' => $detail->siswa->nama,
                    'mapel' => $kelasSiswa->mapel->map(function ($mapel) {
                        return [
                            'mapel_id' => $mapel->mapel_id,
                            'mapel_nama' => $mapel->mapel_nama,
                        ];
                    })
                ];
            });
        })->unique('siswa_id');

        $data['list_semester'] = Semester::all();
        $data['list_nilai'] = Nilai::with('siswa', 'mapel', 'semester')->get();


        return view("guru.nilai.index", $data);
    }
    public function store(Request $request)
    {
        $request->validate([
            'siswa_id' => 'required',
            'mapel_id' => 'required',
            'semester_id' => 'required',
            'nilai_tugas' => 'required|numeric',
            'nilai_ulangan' => 'required|numeric',
            'nilai_uts' => 'required|numeric',
            'nilai_uas' => 'required|numeric',
        ]);

        // Cek duplikasi berdasarkan siswa_id dan mapel_id
        $duplikat = Nilai::where('siswa_id', $request->siswa_id)
            ->where('mapel_id', $request->mapel_id)
            ->first();

        if ($duplikat) {
            return redirect()->back()->with('error', 'Nilai untuk siswa ini pada mata pelajaran ini sudah ada.');
        }

        $nilai = new Nilai;
        $nilai->siswa_id = $request->siswa_id;
        $nilai->mapel_id = $request->mapel_id;
        $nilai->semester_id = $request->semester_id;
        $nilai->nilai_tugas = $request->nilai_tugas;
        $nilai->nilai_ulangan = $request->nilai_ulangan;
        $nilai->nilai_uts = $request->nilai_uts;
        $nilai->nilai_uas = $request->nilai_uas;
        $nilai->total = ($nilai->nilai_tugas + $nilai->nilai_ulangan + $nilai->nilai_uts + $nilai->nilai_uas) / 4;

        if ($nilai->save()) {
            return redirect()->back()->with('create', 'Data nilai berhasil disimpan.');
        } else {
            return redirect()->back()->with('error', 'Data nilai gagal disimpan.');
        }
    }


    function destroy($nilai)
    {
        $nilai = Nilai::find($nilai);

        $nilai->delete();
        return back()->with('delete', 'succes');
    }
}
