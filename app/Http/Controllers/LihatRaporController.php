<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Nilai;
use App\Models\User;
use Illuminate\Http\Request;
use App\Exports\SiswaExport;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class LihatRaporController extends Controller
{
    public function index()
    {
        $nilai = Nilai::all();
        return view('user\lihatrapor', ['title' => 'Rapor'], compact('nilai')); 
    }
}
