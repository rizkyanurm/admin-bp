		<!-- Page Edit amanah -->

		@extends('admin.admin')

		@section('breadcrumbs')
		{!! Breadcrumbs::render('editamanah')!!}
		@endsection

		@section('content')

		<div class="row">
			<div class="col-md-12">
				<div class="form-horizontal">
					<div class="panel panel-default">

						<!-- panel heading -->
						<div class="panel-heading ui-draggable-handle">
							<div class="panel-title">
								<p> Edit Amanah</p>
							</div>
						</div>
						<!-- end panel heading -->

						<!-- panel body -->
						<div class="panel-body">


							{!! Form::model($amanah,array('route'=>array('updateamanah',$amanah->id_amanah))) !!}
							@include ('admin/amanah/_include/_form',['submit_text'=>'Simpan'])
							{!! Form::close() !!}

						</div>
					</div>
					<!-- end panel body -->
				</div>
			</div>
		</div>
		@endsection
