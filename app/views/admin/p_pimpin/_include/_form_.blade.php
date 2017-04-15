<div class="form-group">
	{!!Form::label('id_employe_p', 'Id_Employe penilai',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		<!-- <div class="input-group"> -->
			{!!Form::input(null, 'id_employe_p',null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>
		<!-- </div> -->
	</div>
</div>
    
    
    <div class="form-group">
	{!!Form::label('id_employe_d', 'Id_Employe dinilai',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		<!-- <div class="input-group"> -->
			{!!Form::input(null, 'id_employe_d',null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>
		<!-- </div> -->
	</div>
    </div>
        
        
            <div class="form-group">
	{!!Form::label('id_ppimpin', 'poin pimpin',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		<!-- <div class="input-group"> -->
			<select name="poin_pimpin" class="form-control select">
                @foreach($ppimpin as $pimpin)
                <option value="{{$pimpin->id_ppimpin}}">
                {{$pimpin->nama_ppimpin}}
                
                </option>
                @endforeach
        </select>
			<span class="help-block"> </span>
		<!-- </div> -->
	</div>
        </div>
                
                
             
                    
                    
 <div class="form-group">
	{!!Form::label('nilai_ppimpin', 'Nilai Poin Pimpin',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		<!-- <div class="input-group"> -->
			{!!Form::input(null, 'nilai_ppimpin',null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>
		<!-- </div> -->
	</div>
                    </div>
     
     
      <div class="form-group">
	{!!Form::label('feedback', 'Feedback',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
		<!-- <div class="input-group"> -->
			{!!Form::input(null, 'feedback',null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>
		<!-- </div> -->
	</div>
     </div>
          
          
<div class="panel-footer">
	{!! Form::submit($submit_text, ['class'=>'btn btn-primary pull-right']) !!}
	
</div>