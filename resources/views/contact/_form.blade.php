<div class="form-group{{ $errors->has('pimpinan') ? ' has-error' : '' }}">
	{!! Form::label('pimpinan', 'Pimpinan', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('pimpinan', null, ['class'=>'form-control']) !!}
		{!! $errors->first('pimpinan', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('conper') ? ' has-error' : '' }}">
	{!! Form::label('conper', 'Contact Perusahaan', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('conper', null, ['class'=>'form-control']) !!}
		{!! $errors->first('conper', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
	{!! Form::label('alamat', 'Alamat', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('alamat', null, ['class'=>'form-control']) !!}
		{!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('ketper') ? ' has-error' : '' }}">
	{!! Form::label('ketper', 'Keterangan Perusahaan', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::textarea('ketper', null, ['class'=>'form-control']) !!}
		{!! $errors->first('ketper', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>