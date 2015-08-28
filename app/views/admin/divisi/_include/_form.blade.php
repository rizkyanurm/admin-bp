

<div class="form-group">
	{!!Form::label('nama_divisi', 'Nama Divisi',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		<div class="input-group">
			{!!Form::input('nama_divisi',null,null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>
		</div>
	</div>
</div>

<div class="form-group">
	{!!Form::label('departemen', 'Departemen',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		<div class="input-group">
			{!!Form::input('departemen',null,null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>
		</div>
	</div>
</div>

<div class="form-group">
	{!!Form::label('kode_divisi', 'Kode Divisi',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		<div class="input-group">
			{!!Form::input(null, 'kode_divisi',null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>
		</div>
	</div>
</div>


<div class="panel-footer">
	{!! Form::submit($submit_text, ['class'=>'btn btn-primary pull-right']) !!}
	{!! Form::submit($reset_text, ['class'=>'btn btn-default']) !!}
	
</div>