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
	{!!Form::label('id_amanah', 'Amanah',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
<!--		 <div class="input-group"> -->
		<select class="form-control select" name="id_amanah">
            @foreach($amanah as $amanahh)
            <option value="{{$amanahh->id_amanah}}">
            
            {{$amanahh->nama_amanah}}
            </option>
            
            @endforeach
        </select>
			<span class="help-block"> </span>
<!--		 </div> -->
	</div>
</div>





<div class="form-group">
	{!!Form::label('id_divisi', 'Kode Divisi',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
<!--		 <div class="input-group"> -->
		<select class="form-control select" name="id_divisi">
            @foreach($divisi as $divisii)
            <option value="{{$divisii->id_divisi}}">
            
            {{$divisii->kode_divisi}}
            </option>
            
            @endforeach
        </select>
			<span class="help-block"> </span>
<!--		 </div> -->
	</div>
</div>




<div class="form-group">
	{!!Form::label('id_jabatan', 'Jabatan',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
<!--		 <div class="input-group"> -->
		<select class="form-control select" name="id_jabatan">
            @foreach($jabatan as $jabatann)
            <option value="{{$jabatann->id_jabatan}}">
            
            {{$jabatann->jabatan}}
            </option>
            
            @endforeach
        </select>
			<span class="help-block"> </span>
<!--		 </div> -->
	</div>
</div>



<div class="form-group">
	{!!Form::label('id_karir', 'Karir',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
<!--		 <div class="input-group"> -->
		<select class="form-control select" name="id_karir">
            @foreach($karir as $karirr)
            <option value="{{$karirr->id_karir}}">
            
            {{$karirr->pangkat}}
            </option>
            
            @endforeach
        </select>
			<span class="help-block"> </span>
<!--		 </div> -->
	</div>
</div>

<div class="panel-footer">
	{!! Form::submit($submit_text, ['class'=>'btn btn-primary pull-right']) !!}
	
</div>

