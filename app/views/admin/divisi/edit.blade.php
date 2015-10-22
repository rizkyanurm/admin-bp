
<!-- page Edit divisi -->
@extends('admin.admin')
@section('breadcrumbs')
	{!! Breadcrumbs::render('edit divisi') !!}
@endsection
@section('content')

<div class="row">
	<div class="col-md-12">
	<div class="form-horizontal">
		<div class="panel panel-default">

			<!-- panel heading -->
			<div class="panel-heading ui-draggable-handle">
				<div class="panel-title">
					<p> Edit Divisi </p>
				</div>
			</div>
			<!-- end panel heading -->

			<!-- panel body -->
				<div class="panel-body">

					{!! Form::model($divisi, array('route'=>array('updatedivisi', $divisi->id_divisi))) !!}
					@include ('admin/divisi/_include/_form',['submit_text'=>'Simpan'])
					{!! Form::close() !!}

				</div>
			</div>
			<!-- end panel body -->
		</div>
	</div>
</div>
@endsection
