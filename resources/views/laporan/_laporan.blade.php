<div class="form-group{{ $errors->has('from') ? ' has-error' : '' }}">
	{!! Form::label('from', 'From', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::date('from', null, ['class'=>'col-md-12']) !!}
		{!! $errors->first('from', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group{{ $errors->has('to') ? ' has-error' : '' }}">
	{!! Form::label('to', 'To', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::date('to', null, ['class'=>'col-md-12']) !!}
		{!! $errors->first('to', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Lihat', ['class'=>'btn btn-primary']) !!}
	</div>
</div>