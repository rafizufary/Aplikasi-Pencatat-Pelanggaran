<!-- Menghubungkan dengan view template utama -->
@extends('template')

@section('konten')

<div class="content-start transition  ">
    <div class="container-fluid dashboard">
        <div class="content-header">
            <h1>{{$title}}</h1>
            <p>Edit mata pelajaran</p>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="/mapel-update" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" value="{{$mapel->id}}">
                            <div class="mb-3">
                                <label>Nama Mata Pelajaran</label>
                                <input type="text" name="nama" class="form-control" value="{{$mapel->nama}}" required>
                            </div>
                            <div class="mb-3">
                                <label>AKM</label>
                                <input type="text" name="akm" class="form-control" value="{{$mapel->akm}}" required>
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