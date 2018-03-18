@extends('layouts.master')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li><a href="{{ url('/tran_masuk') }}">Data Masuk</a></li>
				<li class="active">Export Data Masuk</li>
			</ul>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2 class="panel-title">Export Data Masuk</h2>
			</div>
			<div class="panel-body">
				{!! Form::open(['url' => route('export.laporans.post'),
				'method' => 'post', 'class'=>'form-horizontal']) !!}
				<div class="form-group {!! $errors->has('barang_id') ? 'has-error' : '' !!}">
					{!! Form::label('barang_id', 'Barang', ['class'=>'col-md-2 control-label']) !!}
					<div class="col-md-4">
						{!! Form::select('barang_id[]', [''=>'']+App\Barang::pluck('type','id')->all(),null, [
						'class'=>'js-selectize',
						'multiple',
						'placeholder' => 'Pilih Barang',
						'class'=>'col-md-12']) !!}
						{!! $errors->first('barang_id', '<p class="help-block">:message</p>') !!}
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-4 col-md-offset-2">
						{!! Form::submit('Download', ['class'=>'btn btn-primary']) !!}
					</div>
				</div>
				{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection