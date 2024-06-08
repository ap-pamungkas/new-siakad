<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Kepsek extends Authenticatable
{
    use HasFactory, HasUuids, Notifiable;
    protected $table = "kepsek";
    protected $primaryKey = "kepsek_id";
}
