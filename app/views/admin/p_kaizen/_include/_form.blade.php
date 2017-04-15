
<div class="form-group">
	{!!Form::label('kegiatan', 'Kegiatan',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		<!-- <div class="input-group"> -->
			{!!Form::input(null, 'kegiatan',null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>
		<!-- </div> -->
	</div>
</div>
<div class="form-group">
	{!!Form::label('bukti_keg', 'Bukti Kegiatan',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		<!-- <div class="input-group"> -->
			{!!Form::input(null,'bukti_keg',null, ['class' => 'form-control', 'rows' => '5']) !!}
			<span class="help-block"> </span>
		<!-- </div> -->
	</div>
</div>

<div class="form-group">
	{!!Form::label('jenis', 'Jenis Kegiatan',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		<!-- <div class="input-group"> -->
			<select class="form-control select" name="status">
        <option value="Perusahaan">Perusahaan </option>
        <option value="Individu">Individu</option>
        </select>
        
			<span class="help-block"> </span>
		<!-- </div> -->
	</div>
</div>

<div class="panel-footer">
	{!! Form::submit($submit_text, ['class'=>'btn btn-primary pull-right']) !!}
	
</div>