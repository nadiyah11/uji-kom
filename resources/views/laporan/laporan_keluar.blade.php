@extends('layouts.tabel')
@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li class="active">Laporan</li>

				<div class="panel-title pull-right"><a href="{{URL::previous()}}">Kembali</a>
				</div>
				</ul>
				<div class="panel panel-default">
					<div class="panel-body">
						<table  class="table table-bordered table-striped">
						<thead>
							<h3>Laporan</h3>
							<a class="btn btn-primary" href="{{ url('/download-pdf2') }}">PDF</a>
							<center><h4>Total Uang Masuk Dari Tanggal {{$from}} Sampai {{$to}}: Rp.{{number_format($sum)}},-</h4></center>
							<tr>
								<th>No </th>
								<th>Tanggal Keluar</th>
								<th>Pencatat</th>
								<th>Type Barang</th>
								<th>Harga Barang</th>
								<th>Jumlah Keluar</th>
								<th>Total Pembayaran</th>
								<th colspan="3"></th>
							</tr>
						</thead>
						@php $no=1; @endphp
						<tbody>
							
							@foreach($laporan as $data)
							<tr>
							<td>{{$no++}}</td>
							<td>{{ $data->created_at }}</td>
							<td>{{ $data->User->name }}</td>
							<td>{{ $data->Barang->type }}</td>
							<td>Rp.{{number_format($data->Barang->harga,0,",",".").",-"}}</</td>
							<td>{{ $data->jumlahk }} Barang</td>
							<td>Rp.{{number_format($data->totalk,0,",",".").",-"}}</</td>
							</tr>
							@endforeach
							
						</tbody>
					</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection