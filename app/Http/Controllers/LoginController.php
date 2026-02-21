<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{

    public function login(Request $request)
{
    $data = array(
            'tittle' => 'Dashboard',

        );  
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    $credentials = $request->only('email', 'password');

    $user = User::where('email', $credentials['email'])->first();

    if ($user && Hash::check($credentials['password'], $user->password)) {
        Auth::login($user);

        if ($user->role === 'admin') {
            return redirect('/dashboard');
        } else if ($user->role === 'user') {
            return redirect('/tugas');
        }
    }

    return back()->withErrors(['email' => 'Email atau password salah']);
}

    public function showLogin(){
        
        return view ('auth.login');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate(); // Hapus session
    $request->session()->regenerateToken(); // Regenerate CSRF token
        return redirect('/');
    }
}
