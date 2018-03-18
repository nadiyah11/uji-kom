<div class="form-group{{ $errors->has('brand') ? ' has-error' : '' }}">
	{!! Form::label('brand', 'Brand', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('brand', null, ['class'=>'form-control']) !!}
		{!! $errors->first('brand', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>