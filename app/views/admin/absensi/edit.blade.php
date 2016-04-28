@extends('admin.admin')
@section('breadcrumbs')
{!! Breadcrumbs::render('editabsensi') !!}
@endsection

@section('content')


<div class="row">
	<div class="col-md-12">
	<div class="form-horizontal">
		<div class="panel panel-default">

			<!-- panel heading -->
			<div class="panel-heading ui-draggable-handle">
				<div class="panel-title">
					<p> Edit Absensi</p>
				</div>
			</div>
			<!-- end panel heading -->
	
			<!-- panel body -->

					@if (Session::has('flash_message'))
				<div class="alert alert-warning" role="alert">
					{{ Session::get('flash_message') }}
				</div>
	
				  	@endif
         
				<div class="panel-body">
				
					
				
					{!! Form::model($absensi,array('route'=>array('updateabsensi',$absensi->id_absensi))) !!}
					@include ('admin/absensi/_include/_form',['submit_text'=>'Tambah'])
					{!! Form::close() !!}
				
				</div>
			</div>
			<!-- end panel body -->
		</div>
	</div>
</div>
@endsection



 $('div.alert').delay(5000).slideUp(300);

