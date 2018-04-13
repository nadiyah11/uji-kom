@extends('layouts.master')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li class="active">Brand</li>
				</ul>
				<div class="panel panel-default">
					<div class="panel-heading">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Tambah
						</button>
					</div>

					<div class="panel-body">
						<table class="table table-striped table-hover data">
						<thead>
							<tr>
								<th>No </th>
								<th>Daftar Brand</th>
								<th colspan="3">Action</th>
							</tr>
						</thead>
						@php $no=1; @endphp
						<tbody>
							
							@foreach($brand as $data)
							<div class="modal fade" id="modal-default2{{$data->id}}">
					          <div class="modal-dialog">
					            <div class="modal-content">
					              <div class="modal-header">
					                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					                  <span aria-hidden="true">&times;</span></button>
					                <h4 class="modal-title">Brand</h4>
					              </div>
					              <div class="modal-body">
					               {!! Form::model($data, ['url' => route('brand.update', $data->id),'method'=>'put', 'class'=>'form-horizontal']) !!}
										@include('brand._form')
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
							<tr>
							<td>{{$no++}}</td>
							<td>{{$data->brand}}</td>
							
							<td>
								<!-- <a class="btn btn-warning" href="/brand/{{$data->id}}/edit">Edit</a> -->
								<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-default2{{$data->id}}">Edit</button>
							@role('admin')
								<td>
									<form action="{{route('brand.destroy', $data->id )}}" method="post">
										<input type="hidden" name="_method" value="DELETE">
										<input type="hidden" name="_token" >
										<input class="btn btn-danger" type="submit" value="Delete" >
										{{csrf_field()}}
									</form>
								</td>
							@endrole
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
<div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Brand</h4>
              </div>
              <div class="modal-body">
                {!! Form::open(['url' => route('brand.store'),'method' => 'post', 'class'=>'form-horizontal']) !!}
							@include('brand._form')
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
