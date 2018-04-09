@extends('layouts.master')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li class="active">Contact</li>
				</ul>
				<div class="panel panel-default">

					<div class="panel-body">
						<table class="table table-striped table-hover data">
						<thead>
							<tr>
								<th>Pimpinan</th>
								<th>Contact</th>
								<th>Alamat</th>
								<th colspan="3">Action</th>
							</tr>
						</thead>
						@php $no=1; @endphp
						<tbody>
							
							@foreach($contact as $data)
							<tr>
							<td>{{$data->pimpinan}}</td>
							<td>{{$data->conper}}</td>
							<td>{{$data->alamat}}</td>

							<td>
								<a class="btn btn-warning" href="/contact/{{$data->id}}/edit">Edit</a>
								
							</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection