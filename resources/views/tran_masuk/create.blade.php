@extends('layouts.master')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Home</a></li>
				<li class="active">Tambah Pemasukan</li>
				</ul>
				<div class="panel panel-default">
					<div class="panel-heading">
					<h2 class="panel-title">Pemasukan</h2>
					</div>

					<div class="panel-body">
						<form action="{{route('tran_masuk.store')}}" method="post" id="insert_form"> {{csrf_field()}}
							<table id="item_table" class="table table-bordered">
								<tr id="last">
									<th>Supplier</th>
									<th>Barang</th>
									<th>Jumlah</th>
									<th><button type="button" name="add" class="btn btn-success btn-sm add" onclick="addrow()">Tambah</button></th>
								</tr>
								</table>
								<br>
								<div align="center">
									<input type="submit" name="submit" class="btn btn-info" value="simpan">
								</div>
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

<script>
	function addrow() {
		var no = $('item_table tr').length;
		var html = '';
		html +='<tr id="row_'+no+'">';
		html +='<td><select name="sup_id[]" class="form-control">@foreach ($supplier as $data) <option value="{{$data->id}}">{{$data->nama_per}}</option>@endforeach</select></td>';
		html +='<td><select name="barang_id[]" class="form-control">@foreach ($barang as $barang) <option value="{{$barang->id}}">{{$barang->type}}</option>@endforeach</select></td>';
		html +='<td><input type="text" name="jumlahs[]" class="form-control jumlahs"></td>';
		html +='<td><button type="button" class="btn btn-danger btn-sm" onclick="remove('+no+')">Hapus</button></td></tr>';
		$('#last').after(html);
	}
	function remove(no){
		$('#row_'+no).remove();
	}
</script>