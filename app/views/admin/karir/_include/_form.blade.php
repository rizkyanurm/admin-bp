

<div class="form-group">
	{!!Form::label('golongan', 'Golongan',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		<!-- <div class="input-group"> -->
		{!! Form::select('golongan',['A'=>'A','B'=>'B'], null,['class'=>'form-control select'])!!}
			<span class="help-block"> </span>
		<!-- </div> -->
	</div>
</div>

<div class="form-group">
	{!!Form::label('pangkat', 'Pangkat',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		<!-- <div class="input-group"> -->
			{!!Form::input(null, 'pangkat',null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>
		<!-- </div> -->
	</div>
</div>

<div class="form-group">
	{!!Form::label('poin_kaizen', 'Poin Kaizen',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		<!-- <div class="input-group"> -->
			{!!Form::input(null, 'poin_kaizen',null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>
		<!-- </div> -->
	</div>
</div>

<div class="form-group">
	{!!Form::label('poin kredit', 'Poin Kredit',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		<!-- <div class="input-group"> -->
			{!!Form::input(null, 'poin_kredit',null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>
		<!-- </div> -->
	</div>
</div>


<div class="panel-footer">
	{!! Form::submit($submit_text, ['class'=>'btn btn-primary pull-right']) !!}


</div>
