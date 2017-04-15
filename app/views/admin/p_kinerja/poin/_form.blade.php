
<div class="block">

<div class="form-group">
	{!!Form::label('id_budaya', 'Budaya',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
<!--		<div class="input-group">-->
<!--			{!!Form::input(null,'id_kpi',null,['class' => 'form-control datepicker']) !!}-->
        <select class="form-control selecet" name="budaya">
        @foreach($budaya as $budayaa)
        
            <option value="{{$budayaa->id_budaya}}">
            {{$budayaa->nama_budaya}}
            </option>
            
        @endforeach
        
        </select>
			<span class="help-block"> </span>
<!--		</div>-->
	</div>
</div>
    
    
<!--
    <div class="form-group">
	{!!Form::label('aspek_poin', 'Aspek Poin',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
	

			{!!Form::input(null,'aspek_poin',null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>


</div>
</div>
-->
    
    
    
        <div class="form-group">
	{!!Form::label('nama_pkinerja', 'Nama Poin Kinerja',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
	

			{!!Form::input(null,'nama_pkinerja',null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>


</div>
</div>
    
    
    
    
        <div class="form-group">
	{!!Form::label('bobot_metrik', 'Bobot Metrik',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
	

			{!!Form::input(null,'bobot_metrik',null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>


</div>
</div>
    
    
    
<div class="panel-footer">
	{!! Form::submit($submit_text, ['class'=>'btn btn-primary pull-right']) !!}

</div>
</div>
