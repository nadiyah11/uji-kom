@extends('layouts.master')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="{{ url('/home') }}">Home</a></li>
					<li class="active">Pemasukan</li>
				</ul>
				<div class="panel panel-default">
					<div class="panel-heading">
					<h2 class="panel-title">Pemasukan</h2>
					</div>
				<div class="panel-body">
					<div class="form-group">
						<div class="col-md-6">
							ID Pemasukan
						</div>
						<div class="col-md-6">
							{{$tran_keluar->id}}
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6">
							Pencatat
						</div>
						<div class="col-md-6">
							{{$tran_keluar->User->name}}
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6">
							Tanggal Masuk
						</div>
						<div class="col-md-6">
							{{$tran_keluar->created_at->format('d M Y')}}
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6">
							Type Barang
						</div>
						<div class="col-md-6">
							{{$tran_keluar->Barang->type}}
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6">
							Barang Keluar
						</div>
						<div class="col-md-6">
							{{$tran_keluar->jumlahk}} Pcs
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection