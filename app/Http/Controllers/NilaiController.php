<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use Illuminate\Http\Request;
use App\Exports\NilaiExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = Nilai::All();
        return view('nilai', [
            'title' => 'Nilai',
            'nilai' => $nilai
        ]);
    }

    public function store(Request $request)
    {
        $nilai = new Nilai;
        $nilai->nisn = $request->input('nisn');
        $nilai->mapel = $request->input('mapel');
        $nilai->nilai = $request->input('nilai');

        switch ($nilai->nilai) {
            case $nilai->nilai >= 91 && $nilai->nilai <=100:
                $hasil = "A";
                break;

            case $nilai->nilai >= 83 && $nilai->nilai <91:
                $hasil = "B";
                break;

            case $nilai->nilai >= 75 && $nilai->nilai <83:
                $hasil = "C";
                break;

            default:
                $hasil = "D";
                break;
        }
        $nilai->predikat = $hasil;
        $nilai->save();
        return redirect()->back()->with('status', 'Nilai Added Successfully');
    }

    public function edit($id)
    {
        $nilai = Nilai::find($id);
        return view('nilai-edit', [
            'title' => 'Nilai Edit',
            'nilai' => $nilai
        ]);
    }

    public function update(Request $request)
    {
        $nilai = new Nilai();
        $nilai->nilai = $request->nilai;
        switch ($nilai->nilai) {
            case $nilai->nilai >= 91 && $nilai->nilai <=100:
                $hasil = "A";
                break;

            case $nilai->nilai >= 83 && $nilai->nilai <91:
                $hasil = "B";
                break;

            case $nilai->nilai >= 75 && $nilai->nilai <83:
                $hasil = "C";
                break;

            default:
                $hasil = "D";
                break;
        }
        $nilai->predikat = $hasil;
        Nilai::where('id', $request->input('id'))
            ->update([  'nisn' => $request->input('nisn'),
                        'mapel' => $request->input('mapel'), 
                        'nilai' => $request->input('nilai'),
                        'predikat' => $nilai->predikat ]);
                        
        return redirect()->back()->with('status', 'Nilai Added Successfully');
    }

    public function delete($id)
    {
        Nilai::where('id', $id)->delete();

        return redirect()->back()->with('status', 'Siswa Added Successfully');
    }

    public function export_excel()
    {
        return Excel::download(new NilaiExport, 'rapor.xlsx');
    }
}
