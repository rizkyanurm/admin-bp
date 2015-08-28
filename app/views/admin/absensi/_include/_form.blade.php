<div class="block">


<div class="form-group">
	{!!Form::label('id_employee', 'id_employee',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-4 col-xs-12">
		<!-- <div class="input-group"> -->
			{!!Form::input('id_employee',null,null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>
		<!-- </div> -->
	</div>
</div>

<div class="form-group">
	{!!Form::label('tanggal', 'Tanggal',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-4 col-xs-12">
		<!-- <div class="input-group"> -->
			{!!Form::input(null, 'tanggal',null,['class' => 'form-control datepicker']) !!}
			<span class="help-block"> </span>
		<!-- </div> -->
	</div>
</div>

<div class="form-group">
	{!!Form::label('status_absensi', 'Status Absensi',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-4 col-xs-12">
		<!-- <div class="input-group"> -->
			{!!Form::select('status_absensi',['Masuk','Sakit','Ijin','Cuti','Libur kewarganegaraan'],null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>
		<!-- </div> -->
	</div>
</div>

<div class="form-group">
	{!!Form::label('total_jam', 'Total Jam',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-4 col-xs-12">
		<!-- <div class="input-group bootstrap-timepicker"> -->
			{!!Form::input(null, 'total_jam',null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>
		<!-- </div> -->
	</div>
</div>

<div class="form-group">
	{!!Form::label('total_terlambat', 'Total Terlambat',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-4 col-xs-12">
		<!-- <div class="input-group bootstrap-timepicker"> -->
			{!!Form::input(null, 'total_terlambat',null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>
		<!-- </div> -->
	</div>
</div>

<div class="form-group">
	{!!Form::label('s1_masuk', 'Masuk Shift 1 ',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-4 col-xs-12">
		<!-- <div class="input-group bootstrap-timepicker"> -->
			{!!Form::input(null, 's1_masuk',null,['class' => 'form-control timepicker24']) !!}
			<span class="help-block"> </span>
		<!-- </div> -->
	</div>
</div>

<div class="form-group">
	{!!Form::label('s1_keluar', 'Keluar Shift 1 ',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-4 col-xs-12">
		<!-- <div class="input-group bootstrap-timepicker"> -->
			{!!Form::input(null, 's2_masuk',null,['class' => 'form-control timepicker24', 'type'=>'text']) !!}
			<span class="help-block"> </span>
		<!-- </div> -->
	</div>
</div>



<div class="form-group">
	{!!Form::label('s2_masuk', 'Masuk Shift 2 ',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-4 col-xs-12">
		<!-- <div class="input-group bootstrap-timepicker"> -->
			{!!Form::input(null, 's1_masuk',null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>
		<!-- </div> -->
	</div>
</div>

<div class="form-group">
	{!!Form::label('s2_keluar', 'Keluar Shift 2 ',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-4 col-xs-12">
		<!-- <div class="input-group bootstrap-timepicker"> -->
			{!!Form::input(null, 's2_masuk',null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>
		<!-- </div> -->
	</div>
</div>



<div class="form-group">
	{!!Form::label('l_masuk', 'Masuk Lembur ',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-4 col-xs-12">
		<!-- <div class="input-group bootstrap-timepicker"> -->
			{!!Form::input(null, 'l_masuk',null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>
		<!-- </div> -->
	</div>
</div>

<div class="form-group">
	{!!Form::label('l_keluar', 'Keluar Lembur',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-4 col-xs-12">
		<!-- <div class="input-group bootstrap-timepicker"> -->
			{!!Form::input(null, 'l_keluar',null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>
		<!-- </div> -->
	</div>
</div>



<div class="panel-footer">
	{!! Form::submit($submit_text, ['class'=>'btn btn-primary pull-right']) !!}
	{!! Form::submit($reset_text, ['class'=>'btn btn-default']) !!}
	
</div>

</div>