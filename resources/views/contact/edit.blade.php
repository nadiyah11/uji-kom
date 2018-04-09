@extends('layouts.master')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="{{ url('/home') }}">Home</a></li>
					<li class="active">Edit ontact</li>
				</ul>
				<div class="panel panel-default">
					<div class="panel-heading">
					<h2 class="panel-title">contact</h2>
					</div>
				<div class="panel-body">
					{!! Form::model($contact, ['url' => route('contact.update', $contact->id),'method'=>'put', 'class'=>'form-horizontal']) !!}
					@include('contact._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection