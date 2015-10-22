		<!-- Page Edit amanah -->

		@extends('admin.admin')

		@section('breadcrumbs')
		{!! Breadcrumbs::render('addamanah')!!}
		@endsection

		@section('content')

		<div class="row">
			<div class="col-md-12">
				<div class="form-horizontal">
					<div class="panel panel-default">

						<!-- panel heading -->
						<div class="panel-heading ui-draggable-handle">
							<div class="panel-title">
								<p> Tambah Amanah</p>
							</div>
						</div>
						<!-- end panel heading -->

						<!-- panel body -->
						<div class="panel-body">
							@if(isset($data))
							@if(!($statuss))
							<div class="flash alert alert-danger" role="alert">
								@foreach($data as $error)
								<p>{{ $error }}</p>
								@endforeach
							</div>
							@endif
							@endif

							{!! Form::open(['route'=>['amanah_store']]) !!}
							@include ('admin/amanah/_include/_form',['submit_text'=>'Simpan'])
							{!! Form::close() !!}

						</div>
					</div>
					<!-- end panel body -->
				</div>
			</div>
		</div>
		@endsection
