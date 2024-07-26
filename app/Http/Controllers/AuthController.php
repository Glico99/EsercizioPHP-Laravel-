<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //REGISTER METHODS
    public function register()
    {
        return view('auth.register');
    }

    public function store()
    {
        $validated = request()->validate([
            'name' => 'required|min:3|max:15',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        Auth::login($user);

        $success = 'User Created! Feel free to share your ideas and enjoy other people\' s content! ';

        return redirect()->route('showDashboard')->with('success', $success);
    }

    //LOGIN METHODS
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate()
    {
        $validated = request()->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (auth()->attempt($validated)) {
            request()->session()->regenerate();

            return redirect()->route('showDashboard')->with('success', 'Logged in Successfully!');
        } else {
            return redirect()->route('loginUser')->withErrors([
                    'email' => 'wrong email',
                    'password' => 'wrong password',
                ]);
        }
    }

    //LOGOUT MEHTODS
    public function logout()
    {
        auth()->logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('showDashboard')->with('success', 'Logged out Successfully!');
    }
}
