<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function loginProcess(Request $request): RedirectResponse
    {
        // Validate the credentials
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Logout from all guards to reset the session
        $this->logoutFromAllGuards();

        // Try to authenticate with different guards
        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('admin/beranda');
        } elseif (Auth::guard('guru')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('guru/profile');
        } elseif (Auth::guard('kepsek')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('kepsek/beranda');
        } elseif (Auth::guard('siswa')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('siswa/profile');
        } else {
            return back()->withErrors([
                'error' => 'Login gagal',
            ])->withInput(request(['email']));
        }
    }

    public function logout(): RedirectResponse
    {
        $this->logoutFromAllGuards();
        return redirect('login');
    }

    private function logoutFromAllGuards(): void
    {
      
        $guards = ['admin', 'guru', 'kepsek', 'siswa'];

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                Auth::guard($guard)->logout();
            }
        }

        request()->session()->invalidate();
        request()->session()->regenerateToken();
    }
}
