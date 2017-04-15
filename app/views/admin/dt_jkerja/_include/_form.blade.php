<div class="block">

<div class="form-group">
	{!!Form::label('tgl_jamker', 'Tanggal Jam Kerja',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
<!--		<div class="input-group">-->
			{!!Form::input(null,'tgl_jamker',null,['class' => 'form-control datepicker']) !!}
			<span class="help-block"> </span>
<!--		</div>-->
	</div>
</div>

<div class="form-group">
	{!!Form::label('id_employe', 'Id Employe',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		
<!--			<div class="input-group">-->
			{!!Form::input(null,'id_employe',null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>
<!--		</div>-->
	</div>

</div>

<div class="form-group">
	{!!Form::label('id_jam_kerja', 'Id Jam Kerja',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
<!--		<div class="input-group">-->
			<select class="form-control select" name="id_jam_kerja">
					@foreach($jamkerja as $jamkerjaa)
							<option value="{{$jamkerjaa->id_jam_kerja}}"> {{$jamkerjaa->nama_jkerja}} </option>
					@endforeach
			</select>
			<span class="help-block"> </span>
<!--		</div>-->
	</div>
</div>
    
<div class="form-group">
	{!!Form::label('jml_jam_realita', 'jumlah jam realita',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
<!--		<div class="input-group">-->
			{!!Form::input(null, 'jml_jam_realita',null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>
<!--		</div>-->
	</div>
</div>
    
    <div class="form-group">
	{!!Form::label('total_jam_realita', 'Total Jam Realita',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
<!--		<div class="input-group">-->
			{!!Form::input(null, 'total_jam_realita',null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>
<!--		</div>-->
	</div>
</div>
    
    <div class="form-group">
	{!!Form::label('total_terlambat', 'Total Terlambat',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
<!--		<div class="input-group">-->
			{!!Form::input(null, 'total_terlambat',null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>
<!--		</div>-->
	</div>
</div>
    
    <div class="form-group">
	{!!Form::label('total_kurang_jam', 'Total Kurang Jam',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
<!--		<div class="input-group">-->
			{!!Form::input(null, 'total_kurang_jam',null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>
<!--		</div>-->
	</div>
</div>
    
    
<div class="form-group">
	{!!Form::label('jumlah_cuti', 'Jumlah Cuti',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
<!--		<div class="input-group">-->
			{!!Form::input(null, 'jumlah_cuti',null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>
<!--		</div>-->
	</div>
</div>
    
    <div class="form-group">
	{!!Form::label('jumlah_izin', 'Jumlah Izin',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
<!--		<div class="input-group">-->
			{!!Form::input(null, 'jumlah_izin',null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>
<!--		</div>-->
	</div>
</div>
    
    <div class="form-group">
	{!!Form::label('jumlah_lbr_kewarganegaraan', 'Jumlah Libur Kewarganegaraan',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
<!--		<div class="input-group">-->
			{!!Form::input(null, 'jumlah_lbr_kewarganegaraan',null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>
<!--		</div>-->
	</div>
</div>
        
<div class="form-group">
	{!!Form::label('jumlah_sakit', 'Jumlah Sakit',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
<!--		<div class="input-group">-->
			{!!Form::input(null, 'jumlah_sakit',null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>
<!--		</div>-->
	</div>
</div>

        
    <div class="form-group">
	{!!Form::label('total_lembur', 'Total Lembur',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
<!--		<div class="input-group">-->
			{!!Form::input(null, 'total_lembur',null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>
<!--		</div>-->
	</div>
</div>



<div class="panel-footer">
	{!! Form::submit($submit_text, ['class'=>'btn btn-primary pull-right']) !!}

</div>
</div>
