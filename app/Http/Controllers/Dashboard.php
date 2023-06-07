<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mapel;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $total_siswa = Siswa::count();
        $total_mapel = Mapel::count();
        return view('dashboard', ['title' => 'Dashboard'], compact('total_mapel', 'total_siswa')); 
    }
}
