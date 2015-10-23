@extends('admin.admin')

@section('breadcrumbs')

{!! breadcrumbs::render('editjabatan')!!}

@endsection


@section('content')


<div class="row">
	<div class="col-md-12">
	<div class="form-horizontal">
		<div class="panel panel-default">

			<!-- panel heading -->
			<div class="panel-heading ui-draggable-handle">
				<div class="panel-title">
					<p> Edit Jabatan</p>
				</div>
			</div>
			<!-- end panel heading -->

			<!-- panel body -->
				<div class="panel-body">



					{!! Form::model($jabatan,array('route'=>array('updatejabatan', $jabatan->id_jabatan))) !!}
					@include ('admin/jabatan/_include/_form',['submit_text'=>'Simpan','reset_text'=>'Reset'])
					{!! Form::close() !!}

				</div>
			</div>
			<!-- end panel body -->
		</div>
	</div>
</div>
@endsection
