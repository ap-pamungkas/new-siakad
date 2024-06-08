<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'mapel';
    protected $primaryKey = 'mapel_id';

    function kelasSiswa(){
        return $this->belongsTo(KelasSiswa::class);
    }
}
