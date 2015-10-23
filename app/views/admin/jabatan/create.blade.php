	<!-- Page Add Jabatan  -->

	@extends('admin.admin')

	@section('breadcrumbs')

	{!! breadcrumbs::render('addjabatan')!!}


	@endsection


	@section('content')


	<div class="row">
		<div class="col-md-12">
			<div class="form-horizontal">
				<div class="panel panel-default">

					<!-- panel heading -->
					<div class="panel-heading ui-draggable-handle">
						<div class="panel-title">
							<p> Tambah Jabatan</p>
						</div>
					</div>
					<!-- end panel heading -->

					<!-- panel body -->
					<div class="panel-body">
						@if(isset($data))
						@if(! ($statuss))
						<div class="flash alert alert-danger" role="alert">
							@foreach($data as $error)

							<p>{{ $error }}</p>

							@endforeach
						</div>
						@endif
						@endif

						{!! Form::open(['route'=> ['jabatan_store']]) !!}
						@include ('admin/jabatan/_include/_form',['submit_text'=>'Tambah','reset_text'=>'Reset'])
						{!! Form::close() !!}


					</div>
					<!-- end panel body -->
				</div>
			</div>
		</div>
		@endsection
