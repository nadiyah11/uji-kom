<div class="form-group{{ $errors->has('bagian') ? ' has-error' : '' }}">
	{!! Form::label('bagian', 'Bagian', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('bagian', null, ['class'=>'form-control']) !!}
		{!! $errors->first('bagian', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>