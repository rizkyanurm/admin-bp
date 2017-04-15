<!-- Page Add poin Kepemimpinan -->

@extends('admin.admin')

@section('breadcrumbs')
	{!! Breadcrumbs::render('editpoinpimpin')!!}
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
	<div class="form-horizontal">
		<div class="panel panel-default">

			<!-- panel heading -->
			<div class="panel-heading ui-draggable-handle">
				<div class="panel-title">
					<p> Edit Poin</p>
				</div>
			</div>
			<!-- end panel heading -->

            
              @if (Session::has('flash_message'))
								<div class="alert alert-danger" role="alert">
                                		<button class="close" type="button" data-dismiss="alert"><span aria-hidden="true">×</span>
                                		<span class="sr-only">Close</span></button>
                               			{{ Session::get('flash_message') }}
                            	</div>
            @endif
            
			<!-- panel body -->
				<div class="panel-body">
				
				
						{!! Form::model($ppimpin, array('route'=>array('update_ppimpin', $ppimpin->id_ppimpin),'class'=>'form-horizontal', 'id'=>'jvalidate', 'role'=>'form', 'novalidate'=>'novalidate')) !!}
					@include ('admin/p_pimpin/_include/_form_pimpin',['submit_text'=>'Simpan'])
					{!! Form::close() !!}
				
				</div>
			</div>
			<!-- end panel body -->
		</div>
	</div>
</div>


@endsection