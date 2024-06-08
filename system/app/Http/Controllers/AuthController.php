<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;



class AuthController extends Controller
{
   public  function showLogin(){
        return view('auth.login');
    }

    public function loginProcess(Request $request): RedirectResponse
    {
       
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        if (Auth::guard('admin')->attempt($credentials)) {
     
            $request->session()->regenerate();
        

            return redirect()->intended('admin/beranda');
            
        }if (Auth::guard('guru')->attempt($credentials)) {
     
            $request->session()->regenerate();
       
            return redirect()->intended('guru/profile');

        }if (Auth::guard('kepsek')->attempt($credentials)) {
     
            $request->session()->regenerate();
    
            return redirect()->intended('kepsek/beranda');

        }if (Auth::guard('siswa')->attempt($credentials)) {
     
            $request->session()->regenerate();
    
            return redirect()->intended('siswa/profile');

        }
        else {
            return back()->withErrors([
                'error' => 'login gagal',
            ])->withInput(request(['email']));
        }
    }


    public function logout(){
        Auth::logout();

        return redirect('login');
    }


}
