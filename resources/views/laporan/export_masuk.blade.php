@extends('layouts.master')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Home</a></li>
				</ul>
				<div class="panel-body">
				{!! Form::open(['url' => route('export.laporans.post'),
				'method' => 'post', 'class'=>'form-horizontal']) !!}
					<div class="form-group {!! $errors->has('created_at') ? 'has-error' : '' !!}">
					{!! Form::label('created_at', 'Tanggal Masuk', ['class'=>'col-md-2 control-label']) !!}
						<div class="col-md-4">
						{!! Form::date('created_at',
						'placeholder' => 'Pilih Tanggal']) !!}
						{!! $errors->first('created_at', '<p class="help-block">:message</p>') !!}
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