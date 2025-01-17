<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    //
    public function showshowRegisterForm() {
        return view('admin.register');
    }

    public function register(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'requied|string|min:8|confirmed'
        ]);

        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('admin.login');
    }

    public function showLoginForm() {
        return view('admin.login');
    }

    public function login(Request $request) {
        $credentials = $request->only('email','password');

        if(Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended(route('admin.dashboard'));
        }

        return back()->withErrors([
            'email' => 'the provided credentials do not match our records'
        ]);
    }

    public function dashboard() {
        return view('admin.dashboard');
    }
}
