<div class="block">


<div class="form-group">
	{!!Form::label('id_employe', 'id_employe',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-4 col-xs-12">
		<!-- <div class="input-group"> -->
			{!!Form::input(null,'id_employe',null,['class' => 'form-control']) !!}
			
			<span class="help-block"> </span>
		<!-- </div> -->
	</div>
</div>

<div class="form-group">
	{!!Form::label('tgl_absensi', 'Tanggal Absensi',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-4 col-xs-12">
		<!-- <div class="input-group"> -->
			{!!Form::input(null, 'tgl_absensi',null,['class' => 'form-control datepicker']) !!}
			<span class="help-block">Masukkan tanggal Absensi</span>
		<!-- </div> -->
	</div>
</div>

<div class="form-group">
	{!!Form::label('status', 'Status Absensi',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-4 col-xs-12">
		<!-- <div class="input-group"> -->
			{!!Form::select('status',['Masuk'=>'Masuk','Sakit'=>'Sakit','Ijin'=>'Ijin','Cuti'=>'Cuti','Libur Kewarganegaraan'=>'Liburkewarganegaraan'],null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>
		<!-- </div> -->
	</div>
</div>

<div class="form-group">
	{!!Form::label('total_jam', 'Total Jam',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-4 col-xs-12">
		<!-- <div class="input-group bootstrap-timepicker"> -->
			{!!Form::input(null, 'total_jam',null,['class' => 'form-control']) !!}
			<span class="help-block"> Masukkan total Jam kerja karyawan </span>
		<!-- </div> -->
	</div>
</div>

<div class="form-group">
	{!!Form::label('jml_terlambat', 'Jumlah Terlambat',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-4 col-xs-12">
		<!-- <div class="input-group bootstrap-timepicker"> -->
			{!!Form::input(null, 'jml_terlambat',null,['class' => 'form-control']) !!}
			<span class="help-block"> Masukkan jumlah jam karyawan terlambat </span>
		<!-- </div> -->
	</div>
</div>

<div class="form-group">
	{!!Form::label('jammasuk_shift1', 'Masuk Shift 1 ',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-3 col-xs-12">
		<div class="input-group bootstrap-timepicker">
			{!!Form::input(null, 'jammasuk_shift1',null,['class' => 'form-control timepicker24', 'type'=>'text']) !!}
          
			<span class="help-block"></span>
		</div>
	</div>
</div>

<div class="form-group">
	{!!Form::label('jamkeluar_shift1', 'Keluar Shift 1 ',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-3 col-xs-12">
		<div class="input-group bootstrap-timepicker24">
			{!!Form::input(null, 'jamkeluar_shift1',null,['class' => 'form-control timepicker24', 'type'=>'text']) !!}
			<span class="help-block"> </span>
		</div>
	</div>
</div>



<div class="form-group">
	{!!Form::label('jammasuk_shift2', 'Masuk Shift 2 ',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-4 col-xs-12">
		<div class="input-group bootstrap-timepicker24">
			{!!Form::input(null, 'jammasuk_shift2',null,['class' => 'form-control timepicker24']) !!}
			<span class="help-block"> </span>
		</div>
	</div>
</div>

<div class="form-group">
	{!!Form::label('jamkeluar_shift2', 'Keluar Shift 2 ',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-4 col-xs-12">
		<div class="input-group bootstrap-timepicker">
			{!!Form::input(null, 'jamkeluar_shift2',null,['class' => 'form-control timepicker24']) !!}
			<span class="help-block"> </span>
		</div>
	</div>
</div>



<div class="form-group">
	{!!Form::label('jamasuk_lembur', 'Masuk Lembur ',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-4 col-xs-12">
		<div class="input-group bootstrap-timepicker">
			{!!Form::input(null, 'jamasuk_lembur',null,['class' => 'form-control timepicker24']) !!}
			<span class="help-block"> </span>
		</div>
	</div>
</div>

<div class="form-group">
	{!!Form::label('jamkeluar_lembur', 'Keluar Lembur',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-4 col-xs-12">
		<div class="input-group bootstrap-timepicker">
			{!!Form::input(null, 'jamkeluar_lembur',null,['class' => 'form-control timepicker24']) !!}
			<span class="help-block"> </span>
		</div>
	</div>
</div>




<div class="panel-footer">
	{!! Form::submit($submit_text, ['class'=>'btn btn-primary pull-right']) !!}

	
</div>

</div>