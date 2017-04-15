<div class="block">
    <div class="form-group">
    {!!Form::label('kode_kpi', 'Kode Kpi',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
<!--		<div class="input-group">-->
			{!!Form::input(null,'kode_kpi',null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>
<!--		</div>-->
	</div>
    
    </div>
    
    
    
      <div class="form-group">
    {!!Form::label('tugas', 'Tugas',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
<!--		<div class="input-group">-->
			{!!Form::input(null,'tugas',null,['class' => 'form-control']) !!}
			<span class="help-block"> </span>
<!--		</div>-->
	</div>
    
    </div>
    
    
    
      <div class="form-group">
    {!!Form::label('divisi', 'Divisi',  ['class'=>'col-md-3 col-xs-12 control-label'])!!}
	<div class="col-md-6 col-xs-12">
<!--		<div class="input-group">-->
<!--			{!!Form::input(null,'id_divisi',null,['class' => 'form-control']) !!}-->
        <select class="form-control select" name="divisi">
        @foreach($divisi as $divisii)
            <option value="{{$divisii->id_divisi}}">
            {{$divisii->nama_divisi}}
            </option>
        @endforeach
        </select>
			<span class="help-block"> </span>
<!--		</div>-->
	</div>
    
    </div>
    
       


<div class="panel-footer">
	{!! Form::submit($submit_text, ['class'=>'btn btn-primary pull-right']) !!}

</div>
</div>