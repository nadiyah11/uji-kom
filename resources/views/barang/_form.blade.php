<div class="form-group{{ $errors->has('logo') ? ' has-error' : '' }}">
	{!! Form::label('logo', 'Gambar', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-9">
		{!! Form::file('logo', null, ['class'=>'form-control']) !!}
		{!! $errors->first('logo', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
	{!! Form::label('type', 'Type Barang', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-9">
		{!! Form::text('type', null, ['class'=>'form-control']) !!}
		{!! $errors->first('type', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('harga') ? ' has-error' : '' }}">
	{!! Form::label('harga', 'Harga Barang', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-9">
		{!! Form::number('harga', null, ['class'=>'form-control']) !!}
		{!! $errors->first('harga', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('stock') ? ' has-error' : '' }}">
	<div class="col-md-9">
		{!! Form::hidden('stock', 0, ['class'=>'form-control']) !!}
		{!! $errors->first('stock', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group {!! $errors->has('kategori_id') ? 'has-error' : '' !!}">
	{!! Form::label('kategori_id', 'Kategori', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-9">
		{!! Form::select('kategori_id', [''=>'']+App\Kategori::pluck('kategori','id')->all(), null,['class'=>'form-control']) !!}
		{!! $errors->first('kategori_id', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group {!! $errors->has('brand_id') ? 'has-error' : '' !!}">
	{!! Form::label('brand_id', 'Brand', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-9">
		{!! Form::select('brand_id', [''=>'']+App\Brand::pluck('brand','id')->all(), null,['class'=>'form-control']) !!}
		{!! $errors->first('brand_id', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('keterangan') ? ' has-error' : '' }}">
	{!! Form::label('keterangan', 'Keterangan Barang', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-9">
		{!! Form::textarea('keterangan', null,['id'=>'summary-ckeditor'], ['class'=>'form-control']) !!}
		{!! $errors->first('keterangan', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group">
	<div class="col-md-9 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>