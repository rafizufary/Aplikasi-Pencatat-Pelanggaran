<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;

class UpdatePassController extends Controller
{
    public function index()
    {
        $siswa = Siswa::All();
        return view('user\updatepass', ['title' => 'Update Password'], compact('siswa')); 
    }
}
