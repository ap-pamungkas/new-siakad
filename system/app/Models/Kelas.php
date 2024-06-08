<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'kelas';
    protected $primaryKey='kelas_id';


    public function kelasSiswa() {
        return $this->hasOne(KelasSiswa::class, 'kelas_id', 'kelas_id');
    }
}
