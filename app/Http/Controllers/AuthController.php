<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // ================= LOGIN =================
    public function showLogin()
    {
        if (session()->has('user')) {
            return redirect()->route('home');
        }
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {

            session([
                'user' => $user->name,
                'role' => $user->role,
                'user_id' => $user->id
            ]);

            // 🔥 Redirect sesuai role
            if ($user->role == 'admin') {
                return redirect('/admin');
            } else {
                return redirect('/');
            }
        }

        return back()->with('error', 'Email atau Password salah!');
    }

    // ================= REGISTER =================
    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'user' // default user
        ]);

        return redirect('/login')->with('success', 'Register berhasil!');
    }

    // ================= LOGOUT =================
    public function logout()
    {
        session()->flush();
        return redirect('/login');
    }
}
