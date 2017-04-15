<div class="block">

<div class="form-group">
	{!!Form::label('id_kpi', 'Id Kpi',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
<!--		<div class="input-group">-->
<!--			{!!Form::input(null,'id_kpi',null,['class' => 'form-control datepicker']) !!}-->
        <select class="form-control selecet" name="kpi">
        @foreach($kpi as $kpii)
        
            <option value="{{$kpii->id_kpi}}">
            {{$kpii->kode_kpi}}
            </option>
            
        @endforeach
        
        </select>
			<span class="help-block"> </span>
<!--		</div>-->
	</div>
</div>

<div class="form-group">
	{!!Form::label('tgl_mulai', 'Tgl Mulai',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
<!--		<div class="input-group">-->
<!--			<div class="input-group">-->
			{!!Form::input(null,'tgl_mulai',null,['class' => 'form-control datepicker']) !!}
			<span class="help-block"> </span>
<!--		</div>-->
<!--	</div>-->
</div>
</div>

<div class="form-group">
	{!!Form::label('tgl_selesai', 'Tgl Selesai',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
<!--		<div class="input-group">-->
<!--			<div class="input-group">-->
			{!!Form::input(null,'tgl_selesai',null,['class' => 'form-control datepicker']) !!}
			<span class="help-block"> </span>
<!--		</div>-->
<!--	</div>-->
	</div>
</div>
    
<div class="form-group">
	{!!Form::label('status', 'Status',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
<!--		<div class="input-group">-->
		<select class="form-control select" name="status">
        <option value="Selesai">Selesai</option>
        <option value="sdg dikerjakan">Sedang Dikerjakan</option>
        <option value="tidak selesai">Tidak Selesai</option>
        </select>
			<span class="help-block"> </span>
<!--		</div>-->
	</div>
</div>
   


<div class="panel-footer">
	{!! Form::submit($submit_text, ['class'=>'btn btn-primary pull-right']) !!}

</div>
</div>
