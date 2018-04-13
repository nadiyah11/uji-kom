@extends('layouts.master')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li class="active">Supplier</li>
				</ul>
				<div class="panel panel-default">
					<div class="panel-heading">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">Tambah
						</button>
					</div>

					<div class="panel-body">
						<table class="table">
						<thead>
							<tr>
								<th>No </th>
								<th>Logo</th>
								<th>Nama Perusahaan </th>
								<th>Nama Pimpinan</th>
								<th>Kontak Perusahaan</th>
								<th>Alamat Perusahaan</th>
								<th colspan="3">Action</th>
							</tr>
						</thead>
						@php $no=1; @endphp
						<tbody>
							
							@foreach($supplier as $data)
							
							<tr>
							<td>{{$no++}}</td>
							<td><img src="{{asset('img/'.$data->logo_per.'')}}" height="100" width="100"></td>
							<td>{{$data->nama_per}}</td>
							<td>{{$data->pimpinan}}</td>
							<td>{{$data->kontak}}</td>
							<td>{{$data->alamat}}</td>
							<td>
									<a class="btn btn-warning" href="/supplier/{{$data->id}}/edit">Edit</a>
								</td>
								<td>
									<form action="{{route('supplier.destroy', $data->id )}}" method="post">
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
<div class="modal fade" id="tambah">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Supplier</h4>
              </div>
              <div class="modal-body">
                {!! Form::open(['url' => route('supplier.store'),'method' => 'post', 'class'=>'form-horizontal','enctype' => 'multipart/form-data']) !!}
							@include('supplier._form')
						{!! Form::close() !!}
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->