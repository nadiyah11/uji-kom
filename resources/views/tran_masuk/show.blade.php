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
							{{$tran_masuk->id}}
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6">
							Pencatat
						</div>
						<div class="col-md-6">
							{{ $tran_masuk->User->name }}
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6">
							Tanggal Masuk
						</div>
						<div class="col-md-6">
							{{$tran_masuk->created_at->format('d M Y')}}
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6">
							Perusahaan
						</div>
						<div class="col-md-6">
							{{$tran_masuk->Supplier->nama_per}}
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6">
							Type Barang
						</div>
						<div class="col-md-6">
							{{$tran_masuk->Barang->type}}
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6">
							Harga Satuan
						</div>
						<div class="col-md-6">
							Rp.{{number_format($tran_masuk->Barang->harga,0,",",".").",-"}}
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6">
							Stock Pemasukan
						</div>
						<div class="col-md-6">
							{{$tran_masuk->jumlahs}} Pcs
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6">
							Total Bayar
						</div>
						<div class="col-md-6">
							Rp.{{number_format($tran_masuk->totals,0,",",".").",-"}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection