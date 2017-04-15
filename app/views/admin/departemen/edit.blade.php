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
                    	@if (Session::has('flash_message'))
								<div class="alert alert-danger" role="alert">
                                		<button class="close" type="button" data-dismiss="alert"><span aria-hidden="true">×</span>
                                		<span class="sr-only">Close</span></button>
                               			{{ Session::get('flash_message') }}
                            	</div>
						@endif



					{!! Form::model($departement,array('route'=>array('updatedepartemen', $departement->id_departement),'class'=>'form-horizontal', 'id'=>'jvalidate', 'role'=>'form', 'novalidate'=>'novalidate')) !!}
							@include ('admin/departemen/_include/_form',['submit_text'=>'Simpan'])
					{!! Form::close() !!}

				</div>
			</div>
			<!-- end panel body -->
		</div>
	</div>
</div>
@endsection



@section('script')
	<script type="text/javascript">
            var jvalidate = $("#jvalidate").validate({
                ignore: [],
                rules: {
                		 nama_departement: {
                                required: true,
                                minLength:2,
                                maxLength:15
                        },                                     
                    }                                    
                });                                    

        </script>
	@endsection


