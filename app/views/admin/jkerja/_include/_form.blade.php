


<div class="form-group">
	{!!Form::label('nama_jkerja', 'Nama Jam Kerja',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		<!-- <div class="input-group"> -->

			{!!Form::input(null, 'nama_jkerja',null,['class' => 'form-control']) !!}
		<!-- </div> -->
	</div>
</div>

<div class="form-group">
	{!!Form::label('hari_kerja_normal', 'Hari Kerja Normal',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		<!-- <div class="input-group"> -->

			{!!Form::input(null, 'hari_kerja_normal',null,['class' => 'form-control']) !!}
		<!-- </div> -->
	</div>
</div>


<div class="form-group">
	{!!Form::label('jam_kerja_normal', 'Jam Kerja Normal', ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		<!-- <div class="input-group"> -->

			{!!Form::input('null', 'jam_kerja_normal', null, ['class' => 'form-control']) !!}
		<!-- </div> -->
	</div>
</div>

<div class="form-group">
	{!!Form::label('hari_kerja_aktual', 'Hari Kerja Aktual', ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		<!-- <div class="input-group"> -->

			{!!Form::input('null', 'hari_kerja_aktual', null, ['class' => 'form-control']) !!}
		<!-- </div> -->
	</div>
</div>

<div class="form-group">
	{!!Form::label('jam_kerja_aktual', 'Jam Kerja Aktual', ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		<!-- <div class="input-group"> -->

			{!!Form::input('null', 'jam_kerja_aktual', null, ['class' => 'form-control']) !!}
		<!-- </div> -->
	</div>
</div>


<div class="panel-footer">
	{!! Form::submit($submit_text, ['class'=>'btn btn-primary pull-right']) !!}


</div>
