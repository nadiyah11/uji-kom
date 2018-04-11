<div class="form-group{{ $errors->has('nama_kar') ? ' has-error' : '' }}">
	{!! Form::label('nama_kar', 'Nama Lengkap', ['class'=>'col-md-3 control-label']) !!}
	<div class="col-md-8">
		{!! Form::text('nama_kar', null, ['class'=>'form-control']) !!}
		{!! $errors->first('nama_kar', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
	{!! Form::label('alamat', 'Alamat', ['class'=>'col-md-3 control-label']) !!}
	<div class="col-md-8">
		{!! Form::textarea('alamat', null, ['class'=>'form-control']) !!}
		{!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('jk') ? ' has-error' : '' }}">
	{!! Form::label('jk', 'Jenis Kelamin', ['class'=>'col-md-3 control-label']) !!}
	<div class="col-md-8">
		{!! Form::radio('jk', 'laki-laki', ['class'=>'col-md-3l']) !!} Laki-Laki
		{!! Form::radio('jk', 'perempuan', ['class'=>'col-md-3']) !!} Perempuan
		{!! $errors->first('jk', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('no_hp') ? ' has-error' : '' }}">
	{!! Form::label('no_hp', 'No Hp', ['class'=>'col-md-3 control-label']) !!}
	<div class="col-md-8">
		{!! Form::number('no_hp', null, ['class'=>'form-control']) !!}
		{!! $errors->first('no_hp', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group {!! $errors->has('bagian_id') ? 'has-error' : '' !!}">
	{!! Form::label('bagian_id', 'Bagian', ['class'=>'col-md-3 control-label']) !!}
	<div class="col-md-8">
		{!! Form::select('bagian_id', [''=>'']+App\Bagian::pluck('bagian','id')->all(), null,['class'=>'form-control']) !!}
		{!! $errors->first('bagian_id', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group">
	<div class="col-md-8 col-md-offset-3">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>