			<!-- page Add Departemen -->

			@extends('admin.admin')
			@section('breadcrumbs')
			{!! Breadcrumbs::render('adddepartemen') !!}
			@endsection


			@section('content')

			<div class="row">
				<div class="col-md-12">
					<div class="form-horizontal">
						<div class="panel panel-default">

							<!-- panel heading -->
							<div class="panel-heading ui-draggable-handle">
								<div class="panel-title">
									<p> Tambah Departemen</p>
								</div>
							</div>
							<!-- end panel heading -->
							@if(isset($data))

							<div class="flash alert alert-danger" role="alert">
								@foreach($data as $error)
								<p>{{ $error }}</p>
								@endforeach
							</div>

							@endif

							<!-- panel body -->
							<div class="panel-body">


								{!! Form::open(['route'=>['departemen_store']]) !!}
								@include ('admin/departemen/_include/_form',['submit_text'=>'Tambah','reset_text'=>'Reset'])
								{!! Form::close() !!}

							</div>
						</div>
						<!-- end panel body -->
					</div>
				</div>
			</div>
			@endsection
