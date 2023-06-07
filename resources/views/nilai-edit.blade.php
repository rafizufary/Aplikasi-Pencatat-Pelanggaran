<!-- Menghubungkan dengan view template utama -->
@extends('template')

@section('konten')

<div class="content-start transition  ">
    <div class="container-fluid dashboard">
        <div class="content-header">
            <h1>{{$title}}</h1>
            <p>Nilai pelajaran</p>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="/nilai-update" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" value="{{$nilai->id}}">
                            <div class="mb-3">
                                <label>NISN</label>
                                <input type="text" name="nisn" class="form-control" value="{{$nilai->nisn}}" required>
                            </div>
                            <div class="mb-3">
                                <label>MAPEL</label>
                                <input type="text" name="mapel" class="form-control" value="{{$nilai->mapel}}" required>
                            </div>
                            <div class="mb-3">
                                <label>NILAI</label>
                                <input type="text" name="nilai" class="form-control" value="{{$nilai->nilai}}" required>
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