@extends('layouts.master')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="{{ url('/home') }}">Home</a></li>
					<li class="active">Barang</li>
				</ul>
				<div class="panel panel-default">
					<div class="panel-heading">
					<h2 class="panel-title">Barang</h2>
					</div>
				<div class="panel-body">
					<div class="form-group">
						<div class="col-md-6">
							Kode Barang
						</div>
						<div class="col-md-6">
							{{$barang->id}}
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-md-6">
							Gambar Barang
						</div>
						<div class="col-md-6">
							<img src="{{asset('img/'.$barang->logo.'')}}" height="150" width="300">
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6">
							Nama Barang
						</div>
						<div class="col-md-6">
							{{$barang->type}}
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6">
							Harga Barang
						</div>
						<div class="col-md-6">
							Rp.{{number_format($barang->hrga,0,",",".").",-"}}
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6">
							Stock Barang
						</div>
						<div class="col-md-6">
							{{$barang->stock}} Buah
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6">
							Kategori Barang
						</div>
						<div class="col-md-6">
							{{$barang->Kategori->kategori}}
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6">
							Brand Barang
						</div>
						<div class="col-md-6">
							{{$barang->brand->brand}}
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6">
							Spesifikasi  Barang
						</div>
						<div class="col-md-6">
							{!! $barang->keterangan !!}
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
@endsection