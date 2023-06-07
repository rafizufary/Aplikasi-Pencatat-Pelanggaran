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
									<th>NISN</th>
									<th>NAMA</th>
									<th>ALAMAT</th>
								</tr>
							</thead>
							<tbody>

								<tr>
									<td>{{$siswa[0]->nisn}}</td>
									<td>{{$siswa[0]->nama}}</td>
									<td>{{$siswa[0]->alamat}}</td>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection