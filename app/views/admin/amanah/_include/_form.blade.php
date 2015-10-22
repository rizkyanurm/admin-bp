

		<div class="form-group">
			{!!Form::label('amanah', 'Amanah',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
			<div class="col-md-6 col-xs-12">
				<!-- <div class="input-group"> -->
				{!!Form::input(null,'nama_amanah', null,['class' => 'form-control']) !!}
				<span class="help-block"> </span>
				<!-- </div> -->
			</div>
		</div>

		<div class="form-group">
			{!!Form::label('tunjangan', 'Tunjangan',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
			<div class="col-md-6 col-xs-12">
				<!-- <div class="input-group"> -->
				{!!Form::input(null, 'tunjangan',null,['class' => 'form-control']) !!}
				<span class="help-block"> </span>
				<!-- </div> -->
			</div>
		</div>

		<div class="panel-footer">
			{!! Form::submit($submit_text, ['class'=>'btn btn-primary pull-right']) !!}

		</div>
