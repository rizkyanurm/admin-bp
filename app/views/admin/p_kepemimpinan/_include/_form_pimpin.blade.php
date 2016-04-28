<div class="form-group">
	{!!Form::label('nama_poin_pimpin', 'Nama Poin kepemimpinan',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		<!-- <div class="input-group"> -->
			<!-- {!!Form::input(null, 'nama_poin_pimpin',null, ['class' => 'form-control']) !!} -->
			{!!Form::input('null ', 'nama_poin_pimpin','POIN KEPEMIMPINAN 1',['class' => 'form-control']) !!}
			<span class="help-block"> </span>
		<!-- </div> -->
	</div>
</div>



<div class="panel-footer">
	{!! Form::submit($submit_text, ['class'=>'btn btn-primary pull-right']) !!}
	{!! Form::submit($reset_text, ['class'=>'btn btn-default']) !!}
	
</div>