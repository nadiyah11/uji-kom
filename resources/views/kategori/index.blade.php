@extends('layouts.master')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li class="active">Kategori</li>
				</ul>
				<div class="panel panel-default">
					<div class="panel-heading">
						<a class="btn btn-primary" href="/kategori/create">Tambah Data</a>
					</div>

					<div class="panel-body">
						<table class="table table-striped table-hover data">
						<thead>
							<tr>
								<th>No </th>
								<th>Daftar Kategori</th>
								<th colspan="3">Action</th>
							</tr>
						</thead>
						@php $no=1; @endphp
						<tbody>
							
							@foreach($kategori as $data)
							<tr>
							<td>{{$no++}}</td>
							<td>{{$data->kategori}}</td>

							<td>
								<a class="btn btn-warning" href="/kategori/{{$data->id}}/edit">Edit</a>
								<td>
									<form action="{{route('kategori.destroy', $data->id )}}" method="post">
										<input type="hidden" name="_method" value="DELETE">
										<input type="hidden" name="_token" >
										<input class="btn btn-danger" type="submit" value="Delete" >
										{{csrf_field()}}
									</form>
								</td>
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