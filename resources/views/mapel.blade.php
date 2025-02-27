<!-- Menghubungkan dengan view template utama -->
@extends('template')

@section('konten')

<div class="content-start transition  ">
    <div class="container-fluid dashboard">
        <div class="content-header">
            <h1>{{$title}}</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#default"><i class="fa fa-plus"></i> Tambah Data</a>
                        <a href="/mapel/export_excel" class="btn btn-success"><i class="fa fa-file-excel"></i> Export to Excel</a>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>NAMA</th>
                                    <th>AKM</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($mapel as $row)
                                <tr>
                                    <td>{{$row->nama}}</td>
                                    <td>{{$row->akm}}</td>
                                    <td width="200">
                                        <a href="/mapel/edit/{{$row->id}}" class="btn btn-primary btn-sm">Update</a>
                                        <a href="/mapel/delete/{{$row->id}}" onclick="return confirm('Yakin?')" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                @empty
                                <div class="alert alert-danger">
                                    Data belum Tersedia.
                                </div>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Tambah mapel baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/mapel-save" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">

                    <div class="mb-3">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>AKM</label>
                        <input type="text" name="akm" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Simpan</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection