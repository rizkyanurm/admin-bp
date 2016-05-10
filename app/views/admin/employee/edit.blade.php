<!-- Edit Employeee -->


@extends('admin.admin')

@section('breadcrumbs')
{!! Breadcrumbs::render('editemployee') !!}
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
	<div class="form-horizontal">
		<div class="panel panel-default">

			<!-- panel heading -->
			<div class="panel-heading ui-draggable-handle">
				<div class="panel-title">
					<p> Edit Karyawan</p>
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

				
					{!! Form::model($employe, array('route'=>array('updateemployee', $employe->id_employe) ,'class'=>'form-horizontal', 'id'=>'jvalidate', 'role'=>'form', 'novalidate'=>'novalidate')) !!}
							@include ('admin/employee/_include/_form',['submit_text'=>'Simpan'])
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
                		 nama: {
                                required: true,
                                minlength: 2,
                                maxlength: 30
                        },                                                 
                        umur: {
                                required: true,
                                min: 18,
                                max: 99,
                                digits:true

                        },
                        email: {
                                required: true,
                                email: true
                        },
                        tgl_lahir: {
                                required: true,
                                date: true
                        },

          
            			jenis_kelamin: {
            					required:true
            			},

            			agama: {
            					required:true
            			},

            			alamat: {

            					required:true,
            					maxlength: 50

            			},

            			no_telp: {
            					required:true,
            					maxlength: 13,
            					minlength:8,
            					digits:true
            			},			
                    }                                    
                });                                    

        </script>
	@endsection







<!-- end edit employee -->