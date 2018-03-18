@extends('layouts.tabel')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li class="active">Pemasukan</li>
				</ul>
				<div class="panel panel-default">
					<div class="panel-heading">
						<a class="btn btn-primary" href="/tran_masuk/create">Tambah Data</a>
						<!-- <a class="btn btn-primary" href="{{ url('/export/laporan') }}">Export</a> -->
					</div>

					<div class="panel-body">
						<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No </th>
								<th>Tanggal Masuk</th>
								<th>Pencatat</th>
								<th>Supplier</th>
								<th>Type Barang</th>
								<th>Harga Barang</th>
								<th>Stock Masuk</th>
								<th>Total</th>
								<th colspan="3">Action</th>
							</tr>
						</thead>
						
						<tbody>
							@php $no=1; @endphp
							@foreach($tran_masuk as $data)
							<tr>
							<td>{{$no++}}</td>
							<td>{{$data->created_at}}</td>
							<td>{{$data->User->name}}</td>
							<td>{{$data->Supplier->nama_per}}</td>
							<td>{{$data->Barang->type}}</td>
							<td>Rp.{{number_format($data->Barang->harga,0,",",".").",-"}}</td>
							<td>{{$data->jumlahs}} Pcs</td>
							<td>Rp.{{number_format($data->totals,0,",",".").",-"}}</td>
							@role('admin')
							<td>
								<a class="btn btn-warning" href="/tran_masuk/{{$data->id}}/edit">Edit</a>
							</td>
							@endrole
							<td>
									<a class="btn btn-primary" href="/tran_masuk/{{$data->id}}">Detail</a>
							</td>
							@role('admin')
							<td>
								<form action="{{route('tran_masuk.destroy', $data->id )}}" method="post">
										<input type="hidden" name="_method" value="DELETE">
										<input type="hidden" name="_token" >
										<input class="btn btn-danger" type="submit" value="Delete" >
										{{csrf_field()}}
									</form>
								
							</td>
							@endrole
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

