<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use App\Exports\SiswaExport;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class SiswaController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $siswa = Siswa::get();
        $data_siswa = User::paginate(6);
        return view('siswa', ['title' => 'Siswa','siswa' => $siswa], compact('siswa', 'data_siswa') );
    }

    public function store(Request $request)
    {
        $siswa = new Siswa;
        $siswa->nisn = $request->input('nisn');
        $siswa->nama = $request->input('nama');
        $siswa->alamat = $request->input('alamat');
        $siswa->save();

        return redirect()->back()->with('status', 'Siswa Added Successfully');
    }

    public function edit($id)
    {
        $siswa = Siswa::find($id);
        return view('siswa-edit', [
            'title' => 'Siswa Edit',
            'siswa' => $siswa
        ]);
    }

    public function update(Request $request)
    {
        Siswa::where('id', $request->input('id'))
            ->update(['nisn' => $request->input('nisn'), 'nama' => $request->input('nama'), 'alamat' => $request->input('alamat')]);

        return redirect()->back()->with('status', 'Siswa Updated Successfully');
    }

    public function delete($id)
    {
        Siswa::where('id', $id)->delete();

        return redirect()->back()->with('status', 'Siswa Deleted Successfully');
    }
    

    public function export_excel()
    {
        return Excel::download(new SiswaExport, 'siswa.xlsx');
    }
}
