@extends('layouts.master')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="{{ url('/home') }}">Home</a></li>
					<li class="active">Edit Kategori</li>
				</ul>
				<div class="panel panel-default">
					<div class="panel-heading">
					<h2 class="panel-title">Kategori</h2>
					</div>
				<div class="panel-body">
					{!! Form::model($kategori, ['url' => route('kategori.update', $kategori->id),'method'=>'put', 'class'=>'form-horizontal']) !!}
					@include('kategori._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection