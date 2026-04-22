<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        if (session()->has('user')) {
            return redirect()->route('home');
        }
        // use the existing `resources/views/login.blade.php`
        return view('login');
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {

            session([
                'user' => $user->name,
                'user_id' => $user->getKey()
            ]);
            return redirect()->route('home');
        }

        return back()->with('error', 'Email atau Password salah!');
    }

    public function logout()
    {
        session()->forget(['user', 'user_id']);
        return redirect()->route('login');
    }
}
