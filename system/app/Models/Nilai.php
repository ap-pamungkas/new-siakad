<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'nilai';

    protected $primaryKey = 'nilai_id';


 
    function siswa(){
        return $this->belongsTo(Siswa::class,'siswa_id');
    }
    function mapel(){
        return $this->belongsTo(Mapel::class, 'mapel_id');
    }
    function semester(){
        return $this->belongsTo(Semester::class, 'semester_id');
    }
}
