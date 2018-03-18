@extends('layouts.master')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="{{ url('/home') }}">Home</a></li>
					<li class="active">Supplier</li>
				</ul>
				<div class="panel panel-default">
					<div class="panel-heading">
					<h2 class="panel-title">Supplier</h2>
					</div>
				<div class="panel-body">
					<div class="form-group">
						<div class="col-md-6">
							No Perusahaan
						</div>
						<div class="col-md-6">
							{{$supplier->id}}
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-md-6">
							Nama Perusahaan
						</div>
						<div class="col-md-6">
							{{$supplier->nama_per}}
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-6">
							Nama Pimpinan
						</div>
						<div class="col-md-6">
							{{$supplier->pimpinan}}
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-6">
							Kontak Perusahaan
						</div>
						<div class="col-md-6">
							{{$supplier->kontak}}
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-6">
							Alamat Perusahaan
						</div>
						<div class="col-md-6">
							{{$supplier->alamat}}
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
@endsection