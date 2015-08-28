

<div class="form-group">
	{!!Form::label('nama_jabatan', 'Nama Jabatan',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		<!-- <div class="input-group"> -->
			{!!Form::input(null,'nama',null,['class' => 'form-control']) !!}
		<!-- </div> -->
	</div>
</div>

<div class="form-group">
	{!!Form::label('tunjangan', 'Tunjangan',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		<!-- <div class="input-group"> -->
	
			{!!Form::input(null, 'tunjangan',null,['class' => 'form-control']) !!}
		<!-- </div> -->
	</div>
</div>


<div class="form-group">
	{!!Form::label('jumlah_staff', 'Jumlah Staff', ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		<!-- <div class="input-group"> -->
	
			{!!Form::input('null', 'tunjangan', null, ['class' => 'form-control']) !!}
		<!-- </div> -->
	</div>
</div>


<div class="panel-footer">
	{!! Form::submit($submit_text, ['class'=>'btn btn-primary pull-right']) !!}
	{!! Form::submit($reset_text, ['class'=>'btn btn-default']) !!}
	
</div>