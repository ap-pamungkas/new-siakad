<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class CheckLogin
{
  
    
    public function handle(Request $request, Closure $next)
    {
        if (Auth::guard('admin')->check()) {
            return redirect('admin/beranda');
        } elseif (Auth::guard('guru')->check()) {
            return redirect()->route('user.dashboard');
        } else {
            return redirect()->route('login');
        }
    }
    }

