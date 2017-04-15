<div class="form-group">
	{!!Form::label('id_employe', 'Id Employe',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		<!-- <div class="input-group"> -->
			{!!Form::input(null, 'id_employe',null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>
		<!-- </div> -->
	</div>
</div>



<div class="form-group">
	{!!Form::label('id_pkinerja', 'id_pkinerja',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
<!--		 <div class="input-group"> -->
		<select class="form-control select" name="id_pkinerja">
            @foreach($pkinerja as $pkinerjaa)
            <option value="{{$pkinerjaa->id_pkinerja}}">
            
            {{$pkinerjaa->nama_pkinerja}}
            </option>
            
            @endforeach
        </select>
			<span class="help-block"> </span>
<!--		 </div> -->
	</div>
</div>


<div class="form-group">
	{!!Form::label('nilai_kinerja', 'Nilai Kinerja',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		<!-- <div class="input-group"> -->
			{!!Form::input(null, 'nilai_kinerja',null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>
		<!-- </div> -->
	</div>
</div>


<div class="form-group">
	{!!Form::label('bobot_poin', 'Bobot Poin',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		<!-- <div class="input-group"> -->
			{!!Form::input(null, 'bobot_poin',null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>
		<!-- </div> -->
	</div>
</div>

<div class="form-group">
	{!!Form::label('indikator_kinerja', 'Indikator Kinerja',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		<!-- <div class="input-group"> -->
			{!!Form::input(null, 'indikator_kinerja',null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>
		<!-- </div> -->
	</div>
</div>

<div class="panel-footer">
	{!! Form::submit($submit_text, ['class'=>'btn btn-primary pull-right']) !!}
	
</div>

