<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasSiswaDetail extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'kelas_siswa_detail';

    function kelasSiswa(){
        return $this->belongsTo(KelasSiswa::class, 'kode', 'kode');
    }


    function  siswa(){
        return $this->belongsTo(Siswa::class,'siswa_id');
    }
   
}
