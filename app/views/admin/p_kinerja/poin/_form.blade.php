
<div class="form-group">
	{!!Form::label('nama_aspek', 'Nama Aspek',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		<!-- <div class="input-group"> -->
			{!!Form::select('nama_aspek',[],null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>
		<!-- </div> -->
	</div>
</div>
<div class="form-group">
	{!!Form::label('nama_poin', 'Nama Poin',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		<!-- <div class="input-group"> -->
			{!!Form::input(null,'nama_poin',null, ['class' => 'form-control', 'rows' => '5']) !!}
			<span class="help-block"> </span>
		<!-- </div> -->
	</div>
</div>

<div class="form-group">
	{!!Form::label('bobot_poin', 'Bobot Poin',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		<!-- <div class="input-group"> -->
			{!!Form::input(null,'bobot_poin',null, ['class' => 'form-control', 'rows' => '5']) !!}
			<span class="help-block"> </span>
		<!-- </div> -->
	</div>
</div>

<div class="panel-footer">
	{!! Form::submit($submit_text, ['class'=>'btn btn-primary pull-right']) !!}
	{!! Form::submit($reset_text, ['class'=>'btn btn-default']) !!}
	
</div>