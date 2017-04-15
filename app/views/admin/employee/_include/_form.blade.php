

<div class="form-group">
	{!!Form::label('nama', 'Nama',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		<!-- <div class="input-group">
		<span class="input-group-addon"><span class="fa fa-pencil"></span></span> -->
			{!!Form::input(null,'nama',null,['class' => 'form-control']) !!}

		<!-- </div> -->
			<span class="help-block">min = 2 karakter, max  = 20 karakter</span>

	</div>

</div>

<div class="form-group">
	{!!Form::label('email', 'Email',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		<!-- <div class="input-group"> -->
		<!-- <span class="input-group-addon"><span class="fa fa-envelope"></span></span> -->
			{!!Form::input(null,'email', null,['class' => 'form-control']) !!}
		<!-- </div> -->
	</div>
</div>


<div class="form-group">
	{!!Form::label('tgl_lahir', 'Tanggal Lahir', ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		<div class="input-group">
		<span class="input-group-addon"><span class="fa fa-calendar-o"></span></span>
				{!!Form::input(null, 'tgl_lahir',null,['class' => 'form-control datepicker']) !!}

		</div>
	</div>
</div>


<div class="form-group">

	{!!Form::label('agama', 'Agama', ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		<!-- <div class="input-group"> -->
		<!-- <span class="input-group-addon"></span> -->
			{!!Form::select( 'agama',['Islam'=>'Islam','Katholik'=>'Katholik', 'Kristen'=>'Kristen','Hindu'=>'Hindu', 'Budha'=>'Budha'],null, ['class' => 'form-control']) !!}
				
		
		<!-- </div> -->
	</div>
</div>


<div class="form-group">
	{!!Form::label('jenis_kelamin', 'Jenis Kelamin',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
		<div class="col-md-6 col-xs-12">
			<!-- <div class="input-group"> -->
			<!-- <span class="input-group-addon"></span> -->
				{!! Form::select( 'jenis_kelamin', ['Pria'=>'Pria', 'Wanita'=>'Wanita'],null, ['class' => 'form-control']) !!}
			<!-- </div> -->
		</div>
</div>
<div class="form-group">
	{!!Form::label('status_karyawan', 'Status Karyawan',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
		<div class="col-md-6 col-xs-12">
			<!-- <div class="input-group"> -->
			<!-- <span class="input-group-addon"><span class="fa fa-info"></span></span> -->
				{!! Form::select( 'status_karyawan', ['Masih bekerja'=>'Masih Bekerja', 'Pensiun'=>'Pensiun'],null, ['class' => 'form-control']) !!}
			</div>
		<!-- </div> -->
</div>

<div class="form-group">
	{!! Form::label('alamat', 'Alamat :',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
		<div class="col-md-6 col-xs-12">
			<!-- <div class="input-group"> -->
				{!! Form::textarea('alamat', null,['class'=>'form-control', 'rows'=>'5'])!!}
				 <!-- <span class="help-block">Default textarea field</span> -->
			<!-- </div> -->
		</div>
</div>


<div class="form-group">
	{!! Form::label('no_telp', 'No Telp ',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
		<div class="col-md-6 col-xs-12">
			<!-- <div class="input-group"> -->
			<!-- <span class="input-group-addon"><span class="fa fa-phone"></span></span> -->
				{!! Form::input(null,'no_telp', null,['class'=>'form-control select'])!!}
			<!-- </div> -->
		</div>
</div>



<div class="panel-footer">
	{!! Form::submit($submit_text, ['class'=>'btn btn-primary pull-right']) !!}
</div>
