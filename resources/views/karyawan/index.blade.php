@extends('layouts.master')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li class="active">Karyawan</li>
				</ul>
				<div class="panel panel-default">
					<div class="panel-heading">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah">Tambah
						</button>
						<div class="panel-title pull-right"><a href="{{URL::previous()}}">Kembali</a></div>
					</div>

					<div class="panel-body">
						<table class="table table-striped table-hover data">
						<thead>
							<tr>
								<th>No </th>
								<th>Nama Lengkap</th>
								<th>ALamat</th>
								<th>Jenis Kelamin</th>
								<th>No Hp</th>
								<th>Bagian</th>
								<th colspan="3">Action</th>
							</tr>
						</thead>
						@php $no=1; @endphp
						<tbody>
							
							@foreach($karyawan as $data)

							<tr>
							<td>{{$no++}}</td>
							<td>{{$data->nama_kar}}</td>
							<td>{{$data->alamat}}</td>
							<td>{{$data->jk}}</td>
							<td>{{$data->no_hp}}</td>
							<td>{{$data->Bagian->bagian}}</td>

							<td>
								<a class="btn btn-warning" href="/karyawan/{{$data->id}}/edit">Edit</a>
								<td>
									<a class="btn btn-primary" href="/karyawan/{{$data->id}}">Detail</a>
								</td>
								<td>
									<form action="{{route('karyawan.destroy', $data->id )}}" method="post">
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
                <h4 class="modal-title">Kategori</h4>
              </div>
              <div class="modal-body">
                {!! Form::open(['url' => route('karyawan.store'),'method' => 'post', 'class'=>'form-horizontal']) !!}
							@include('karyawan._form')
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