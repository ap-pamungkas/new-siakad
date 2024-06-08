<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Contracts\Auth\Authenticatable;

class Guru extends Model implements Authenticatable
{
    use HasFactory, HasUuids, AuthenticatableTrait;

    protected $table = 'guru';
    protected $primaryKey = "guru_id";

    function kelas_siswa(){
        return $this->hasOne(KelasSiswa::class, "foreign_key", "local_key");
    }

    public function getAuthIdentifierName()
    {
        return 'email'; // Or whichever field you use for login
    }

    public function getAuthIdentifier()
    {
        return $this->email; // Or the corresponding attribute
    }

    public function getAuthPassword()
    {
        return $this->password; // Or the password attribute
    }

    function KelasSiswa(){
        return $this->hasOne(KelasSiswa::class,'guru_id', 'guru_id');
    }
}