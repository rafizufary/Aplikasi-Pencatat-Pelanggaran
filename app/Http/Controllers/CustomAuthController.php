<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $ceklogin = $request->only('username', 'password');
            if (Auth::attempt($ceklogin)){
                $request->session()->regenerate();
                $role = User::where('username', $request->input("username"))->pluck('role')->first();
                if($role == "admin") return redirect()->intended('dashboard');

                return redirect()->intended('dashboard_user');
            }

        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function signOut()
    {
        Auth::logout();
        request()->session()->flush();

        request()->session()->regenerateToken();

        return Redirect('login');
    }
}
