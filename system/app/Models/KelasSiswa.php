<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasSiswa extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'kelas_siswa';
    protected $primaryKey = 'kelas_siswa_id';


    protected $fillable = ['kelas_id', 'guru_id', 'siswa_id', 'mapel_id'];
    static $message = [
        'kelas_id.required'=> 'Inputan tidak boleh.kosong',
        'guru_id.required'=> 'Inputan tidak boleh.kosong',
        'mapel_id.required'=> 'Inputan tidak boleh.kosong',
        'siswa_id.required'=> 'Inputan tidak boleh.kosong',
    ];


    function kelas(){
        return $this->belongsTo(Kelas::class,'kelas_id');
    }
    function guru(){
        return $this->belongsTo(Guru::class,'guru_id');
    }
    function mapel(){
        return $this->hasMany(Mapel::class,'mapel_id', 'mapel_id');
    }
   
    function kelasSiswaDetail(){
        return $this->hasMany(KelasSiswaDetail::class, 'kode', 'kode');
    }



    static function  generateCode(){
        $urutan = mt_rand(1,999);
        $randomString= substr(str_shuffle('1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 0, 5);

        $kode = 'K./'.$urutan."S/".$randomString;
        return $kode;
    }

    

}
