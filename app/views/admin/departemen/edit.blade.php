<!-- page Edit Departemen -->

@extends('admin.admin')
@section('breadcrumbs')
{!! Breadcrumbs::render('editdepartemen') !!}
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
	<div class="form-horizontal">
		<div class="panel panel-default">

			<!-- panel heading -->
			<div class="panel-heading ui-draggable-handle">
				<div class="panel-title">
					<p> Edit Departemen</p>
				</div>
			</div>
			<!-- end panel heading -->

			<!-- panel body -->
				<div class="panel-body">


					{!! Form::model($departement,array('route'=>array('updatedepartemen', $departement->id_departement))) !!}
							@include ('admin/departemen/_include/_form',['submit_text'=>'Simpan','reset_text'=>'Reset'])
					{!! Form::close() !!}

				</div>
			</div>
			<!-- end panel body -->
		</div>
	</div>
</div>
@endsection
