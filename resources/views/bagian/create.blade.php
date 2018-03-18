@extends('layouts.master')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Home</a></li>
				<li class="active">Tambah Bagian</li>
				</ul>
				<div class="panel panel-default">
					<div class="panel-heading">
					<h2 class="panel-title">Bagian</h2>
					</div>

					<div class="panel-body">
						{!! Form::open(['url' => route('bagian.store'),'method' => 'post', 'class'=>'form-horizontal']) !!}
							@include('bagian._form')
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection