<!-- Menghubungkan dengan view template utama -->
@extends('user\template_user')

@section('konten_user')

<div class="content-start transition  ">
    <div class="container-fluid dashboard">
        <div class="content-header">
            <h1>{{$title}}</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>MAPEL</th>
                                    <th>NILAI</th>
                                    <th>PREDIKAT</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($nilai as $row)
                                    <tr>
                                        <th>{{$row->mapel}}</th>
                                        <th>{{$row->nilai}}</th>
                                        <th>{{$row->predikat}}</th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection