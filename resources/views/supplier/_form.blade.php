<div class="form-group{{ $errors->has('logo_per') ? ' has-error' : '' }}">
	{!! Form::label('logo_per', 'Logo', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::file('logo_per', null, ['class'=>'form-control']) !!}
		{!! $errors->first('logo_per', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('nama_per') ? ' has-error' : '' }}">
	{!! Form::label('nama_per', 'Nama Perusahaan', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('nama_per', null, ['class'=>'form-control']) !!}
		{!! $errors->first('nama_per', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('pimpinan') ? ' has-error' : '' }}">
	{!! Form::label('pimpinan', 'Nama Pimpinan', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('pimpinan', null, ['class'=>'form-control']) !!}
		{!! $errors->first('pimpinan', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('kontak') ? ' has-error' : '' }}">
	{!! Form::label('kontak', 'Kontak Perusahaan', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('kontak', null, ['class'=>'form-control']) !!}
		{!! $errors->first('kontak', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
	{!! Form::label('alamat', 'Alamat Perusahaan', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::textarea('alamat', null, ['class'=>'form-control']) !!}
		{!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>