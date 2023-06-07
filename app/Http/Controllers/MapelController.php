<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;
use App\Exports\MapelExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class MapelController extends Controller
{
    public function index()
    {
        $mapel = Mapel::All();
        return view('mapel', [
            'title' => 'Mata Pelajaran',
            'mapel' => $mapel
        ]);
    }

    public function store(Request $request)
    {
        $mapel = new Mapel;
        $mapel->nama = $request->input('nama');
        $mapel->akm = $request->input('akm');
        $mapel->save();
        return redirect()->back()->with('status', 'Mapel Added Successfully');
    }

    public function edit($id)
    {
        $mapel = Mapel::find($id);
        return view('mapel-edit', [
            'title' => 'Mata Pelajaran Edit',
            'mapel' => $mapel
        ]);
    }

    public function update(Request $request)
    {
        Mapel::where('id', $request->input('id'))
            ->update(['nama' => $request->input('nama'), 'akm' => $request->input('akm')]);

        return redirect()->back()->with('status', 'Mapel Added Successfully');
    }

    public function delete($id)
    {
        Mapel::where('id', $id)->delete();

        return redirect()->back()->with('status', 'Siswa Added Successfully');
    }

    public function export_excel()
    {
        return Excel::download(new MapelExport, 'mapel.xlsx');
    }
}
