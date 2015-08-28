<!-- Page Add pertanyaan poin Kepemimpinan -->

@extends('admin.admin')

@section('breadcrumbs')
	{!! Breadcrumbs::render('addpertanyaanp')!!}
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
	<div class="form-horizontal">
		<div class="panel panel-default">

			<!-- panel heading -->
			<div class="panel-heading ui-draggable-handle">
				<div class="panel-title">
					<p> Tambah Pertanyaan</p>
				</div>
			</div>
			<!-- end panel heading -->

			<!-- panel body -->
				<div class="panel-body">
				
				
					{!! Form::open() !!}
					@include ('admin/p_kepemimpinan/_include/_form_pertanyaan',['submit_text'=>'Tambah','reset_text'=>'Reset'])
					{!! Form::close() !!}
				
				</div>
			</div>
			<!-- end panel body -->
		</div>
	</div>
</div>


@endsection