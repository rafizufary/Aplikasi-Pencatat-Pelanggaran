<!-- Menghubungkan dengan view template utama -->
@extends('template')

@section('konten')

<div class="content-start transition  ">
    <div class="container-fluid dashboard">
        <div class="content-header">
            <h1>{{$title}}</h1>
            <p>Edit data siswa</p>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="/siswa-update" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" value="{{$siswa->id}}">
                            <div class="mb-3">
                                <label>NISN</label>
                                <input type="text" name="nisn" class="form-control" value="{{$siswa->nisn}}" required>
                            </div>
                            <div class="mb-3">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" value="{{$siswa->nama}}" required>
                            </div>
                            <div class="mb-3">
                                <label>Alamat</label>
                                <textarea name="alamat" class="form-control" required>{{$siswa->alamat}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Simpan</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection