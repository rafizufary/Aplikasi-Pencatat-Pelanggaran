<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        return view('user\dashboard_user', ['title' => 'Dashboard'], compact('siswa')); 
    
    }
}   
