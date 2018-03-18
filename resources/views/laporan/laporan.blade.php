@extends('layouts.tabel')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Home</a></li>
				</ul>
				<div class="panel panel-default">
					<div class="panel-heading">
					<h2 class="panel-title">Laporan</h2>
					
					</div>

					<div class="panel-body">
						{!! Form::open(['url' => 'download-pdf','method' => 'post', 'class'=>'form-horizontal']) !!}
							@include('laporan._form')
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li class="active">Laporan</li>
				<div class="panel-title pull-right"><a href="{{URL::previous()}}">Kembali</a></div>
				</ul>
				<div class="panel panel-default">
					<div class="panel-body">

						<table id="example1" class="table table-bordered table-striped">
						<thead>
							
								<h3>Laporan</h3><br>
								
								<a class="btn btn-primary" href="{{ url('/download-pdf') }}">PDF </a>
								<center><h4>Total Uang Masuk Dari Tanggal {{$from}} Sampai {{$to}}: Rp.{{number_format($sum)}},-</h4></center>

							<tr>
								<th>No </th>
								<th>Tanggal Masuk</th>
								<th>Pencatat</th>
								<th>Gambar</th>
								<th>Supplier</th>
								<th>Type Barang</th>
								<th>Harga Barang</th>
								<th>Jumlah Masuk</th>
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
							<td><img src="{{asset('img/'.$data->Barang->logo.'')}}" height="100" width="100"></td>
							<td>{{ $data->Supplier->nama_per }}</td>
							<td>{{ $data->Barang->type }}</td>
							<td>Rp.{{number_format($data->Barang->harga,0,",",".").",-"}}</td>
							<td>{{ $data->jumlahs }} Barang</td>
							<td>Rp.{{number_format($data->totals,0,",",".").",-"}}</</td>
							<td></td>
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