<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'semester';
    protected $primaryKey = 'semester_id';


    function Nilai(){
        return $this->hasOne(Nilai::class, 'semester_id', 'semester_id');
    }
    
}