<!-- Menghubungkan dengan view template utama -->
@extends('template')

<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
<link rel="stylesheet" href="assets/libs/css/style.css">
<link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
<link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
<link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
<link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
<link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
<link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">

@section('konten')

<div class="content-start transition  ">
    <div class="container-fluid dashboard">
        <div class="content-header">
            <h1>Dashboard</h1>
        </div>
        <div class="container">
            <div class="row align-items-start">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-inline-block">
                                <h5 class="text-end">Total Siswa</h5>
                                <h2 class="mb-0">{{$total_siswa}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-inline-block">
                                <h5 class="text-center">Total Mata pelajaran</h5>
                                <h2 class="mb-0">{{$total_mapel}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    

    </div>
</div>

@endsection