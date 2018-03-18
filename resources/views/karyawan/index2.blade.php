@extends('layouts.master')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li class="active">Karyawan</li>
				</ul>
				<div class="panel panel-default">
				
					<div class="panel-body">
						<center>
						<a class="btn btn-primary" href="{{ route('karyawan.index') }}">Karyawan</a>
						<a class="btn btn-primary" href="{{ route('bagian.index') }}">Bagian</a>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection