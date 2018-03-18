<div class="form-group {!! $errors->has('barang_id') ? 'has-error' : '' !!}">
	{!! Form::label('barang_id', 'Type Barang', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::select('barang_id', [''=>'']+App\Barang::pluck('type','id')->all(), null,['class'=>'form-control']) !!}
		{!! $errors->first('barang_id', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('jumlahk') ? ' has-error' : '' }}">
	{!! Form::label('jumlahk', 'Barang Keluar', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::number('jumlahk', null, ['class'=>'form-control']) !!}
		{!! $errors->first('jumlahk', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>