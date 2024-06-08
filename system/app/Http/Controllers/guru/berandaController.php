<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KelasSiswa;
use App\Models\KelasSiswaDetail;
use Illuminate\Support\Facades\Auth;

class berandaController extends Controller
{
   

   

    function profile(){
        return view("guru.profile");
    }
}

