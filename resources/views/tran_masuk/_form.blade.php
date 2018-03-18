<div class="form-group {!! $errors->has('sup_id') ? 'has-error' : '' !!}">
	{!! Form::label('sup_id', 'Nama Perusahaan', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::select('sup_id', [''=>'']+App\Supplier::pluck('nama_per','id')->all(),null,['class'=>'form-control']) !!}
		{!! $errors->first('sup_id', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group {!! $errors->has('barang_id') ? 'has-error' : '' !!}">
	{!! Form::label('barang_id', 'Type Barang', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::select('barang_id', [''=>'']+App\Barang::pluck('type','id')->all(), null,['class'=>'form-control']) !!}
		{!! $errors->first('barang_id', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('jumlahs') ? ' has-error' : '' }}">
	{!! Form::label('jumlahs', 'Stock Barang Masuk', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::number('jumlahs', null, ['class'=>'form-control']) !!}
		{!! $errors->first('jumlahs', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>