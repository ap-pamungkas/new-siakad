<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Siswa extends Authenticatable
{
    use HasFactory, HasUuids, Notifiable;

    protected $table ='siswa';
    protected $primaryKey = 'siswa_id';

    protected $fillable = [
        'nama',
        'nisn',
        'email',
        'foto',
        'password',
    ];

    // In Siswa model (App\Models\Siswa)

    public function kelasSiswaDetail() {
        return $this->hasOne(KelasSiswaDetail::class, 'siswa_id', 'siswa_id');
    }
    public function Nilai() {
        return $this->hasMany(Nilai::class, 'siswa_id', 'siswa_id');
    }
}
