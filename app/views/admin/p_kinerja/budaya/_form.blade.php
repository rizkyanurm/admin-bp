
<div class="form-group">
	{!!Form::label('nama_budaya', 'Nama Budaya',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		<!-- <div class="input-group"> -->
			{!!Form::input(null, 'nama_budaya',null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>
		<!-- </div> -->
	</div>
</div>



<div class="form-group">
	{!!Form::label('bobot_budaya', 'Bobot Budaya',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		<!-- <div class="input-group"> -->
			{!!Form::input(null, 'bobot_budaya',null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>
		<!-- </div> -->
	</div>
</div>

<!--
<div class="form-group">
                                            <label class="control-label col-md-2"></label>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="stepSlider ui-rangeSlider ui-rangeSlider" data-min="0" data-max="100" style="position: relative;">
                                                    <div class="ui-rangeSlider-container" style="position: absolute; width: 100px;">
                                                     
                                                        
                                                        </div>
                                                    </div>
                                               
                                                </div>
                                            </div>
                                        </div>
-->


<div class="form-group">
	{!!Form::label('keterangan_budaya', 'Keterangan',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		<!-- <div class="input-group"> -->
			{!!Form::textarea('keterangan_budaya',null, ['class' => 'form-control', 'rows' => '5']) !!}
			<span class="help-block"> </span>
		<!-- </div> -->
	</div>
</div>

<div class="panel-footer">
	{!! Form::submit($submit_text, ['class'=>'btn btn-primary pull-right']) !!}
	
	
</div>