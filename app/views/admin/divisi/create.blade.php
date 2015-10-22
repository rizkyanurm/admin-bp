<!-- Page Add Divisi -->

@extends('admin.admin')
@section('breadcrumbs')
	{!! Breadcrumbs::render('add divisi') !!}
@endsection
@section('content')

<div class="row">
	<div class="col-md-12">
	<div class="form-horizontal">
		<div class="panel panel-default">

			<!-- panel heading -->
			<div class="panel-heading ui-draggable-handle">
				<div class="panel-title">
					<p> Tambah Divisi </p>
				</div>
			</div>
			<!-- end panel heading -->
			@if(isset($data))
			@if(! ($statuss))
			<div class="flash alert alert-danger" role="alert">
				@foreach($data as $error)
				<p>{{ $error }}</p>
				@endforeach
			</div>
			@endif
			@endif


			<!-- panel body -->
				<div class="panel-body">

					<div class="form-group form-group-separated">

					{!! Form::open(['route'=> ['divisi_store']]) !!}
					@include ('admin/divisi/_include/_form',['submit_text'=>'Tambah'])
					{!! Form::close() !!}
					<div>

				</div>
			</div>
			<!-- end panel body -->
		</div>
	</div>
</div>
@endsection
