@extends('layouts.tabel')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li class="active">Barang</li>
				</ul>
				<div class="panel panel-default">
					<div class="panel-heading">
						<a class="btn btn-primary" href="/barang/create">Tambah Data</a>
					</div>

					<div class="panel-body">
						<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No </th>
								<th>Gambar Barang </th>
								<th>Type Barang </th>
								<th>Harga Barang </th>
								<th>Stock Barang </th>
								<th>Kategori Barang </th>
								<th>Brand Barang </th>
								<th></th>
								<th>Action</th>
								<th></th>
							</tr>
						</thead>
						@php $no=1; @endphp
						<tbody>
							
							@foreach($barang as $data)
							<tr>
							<td>{{$no++}}</td>
							<td><img src="{{asset('img/'.$data->logo.'')}}" height="100" width="100"></td>
							<td>{{$data->type}}</td>
							<td>Rp.{{number_format($data->harga,0,",",".").",-"}}</td>
							<td>{{$data->stock}} Pcs</td>
							<td>{{$data->Kategori->kategori}}</td>
							<td>{{$data->Brand->brand}}</td>


							<td>
								<a class="btn btn-warning" href="/barang/{{$data->id}}/edit">Edit</a></td>
								<td>
									<a class="btn btn-primary" href="/barang/{{$data->id}}">Detail</a>
								</td>
								<td>
									<form action="{{route('barang.destroy', $data->id )}}" method="post">
										<input type="hidden" name="_method" value="DELETE">
										<input type="hidden" name="_token" >
										<input class="btn btn-danger" type="submit" value="Delete" >
										{{csrf_field()}}
									</form>
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