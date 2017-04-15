
<div class="form-group">
	{!!Form::label('id_employe', 'Id_Employe',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		<!-- <div class="input-group"> -->
			{!!Form::input(null, 'id_employe',null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>
		<!-- </div> -->
	</div>
</div>
<div class="form-group">
	{!!Form::label('id_pkaizen', 'id_pkaizen',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
<!--		 <div class="input-group"> -->
		<select class="form-control select" name="id_pkaizen">
            @foreach($pkaizen as $pkaizenn)
            <option value="{{$pkaizenn->id_pkaizen}}">
            
            {{$pkaizenn->id_pkaizen}}
            </option>
            
            @endforeach
        </select>
			<span class="help-block"> </span>
<!--		 </div> -->
	</div>
</div>

<div class="form-group">
	{!!Form::label('nilai_kaizen', 'Nilai Kaizen',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		<!-- <div class="input-group"> -->
			{!!Form::input(null,'nilai_kaizen',null, ['class' => 'form-control', 'rows' => '5']) !!}
			<span class="help-block"> </span>
		<!-- </div> -->
	</div>
</div>


<div class="form-group">
	{!!Form::label('status', 'Status',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		<!-- <div class="input-group"> -->
		<select class="form-control select" name="status">
        <option value="Berhasil">Berhasil </option>
        <option value="Tidak Berhasil">Tidak Berhasil</option>
        
        </select>
			<span class="help-block"> </span>
		<!-- </div> -->
	</div>
</div>

<div class="panel-footer">
	{!! Form::submit($submit_text, ['class'=>'btn btn-primary pull-right']) !!}
	
</div>