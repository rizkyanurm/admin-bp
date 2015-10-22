<!-- Page Edit Karir -->

@extends('admin.admin')

@section('breadcrumbs')
{!! Breadcrumbs::render('editkarir')!!}
@endsection

@section('content')


<div class="row">
	<div class="col-md-12">
	<div class="form-horizontal">
		<div class="panel panel-default">

			<!-- panel heading -->
			<div class="panel-heading ui-draggable-handle">
				<div class="panel-title">
					<p> Edit Jenjang Karir</p>
				</div>
			</div>
			<!-- end panel heading -->

			<!-- panel body -->
				<div class="panel-body">

					{!! Form::model($karir, array('route'=>array('updatekarir', $karir->id_karir ))) !!}
							@include ('admin/karir/_include/_form',['submit_text'=>'Simpan'])
					{!! Form::close() !!}

				</div>
			</div>
			<!-- end panel body -->
		</div>
	</div>
</div>

@endsection
