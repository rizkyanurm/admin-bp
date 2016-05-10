@extends('admin.admin')

@section('breadcrumbs')

{!! breadcrumbs::render('editjabatan')!!}

@endsection


@section('content')


<div class="row">
	<div class="col-md-12">
	<div class="form-horizontal">
		<div class="panel panel-default">

			<!-- panel heading -->
			<div class="panel-heading ui-draggable-handle">
				<div class="panel-title">
					<p> Edit Jabatan</p>
				</div>
			</div>
			<!-- end panel heading -->

			<!-- panel body -->
            @if (Session::has('flash_message'))
								<div class="alert alert-danger" role="alert">
                                		<button class="close" type="button" data-dismiss="alert"><span aria-hidden="true">×</span>
                                		<span class="sr-only">Close</span></button>
                               			{{ Session::get('flash_message') }}
                            	</div>
            @endif

				<div class="panel-body">



					{!! Form::model($jabatan,array('route'=>array('updatejabatan', $jabatan->id_jabatan),'class'=>'form-horizontal','id'=>'jvalidate', 'role'=>'form', 'novalidate'=>'novalidate')) !!}
					@include ('admin/jabatan/_include/_form',['submit_text'=>'Simpan','reset_text'=>'Reset'])
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
                        jabatan: {
                                required: true,
                                minlength: 1,
                                maxlength: 30,
                        },                                                 
                        tunjangan: {
                                required: true,
                                digits:true,
                                max:1000000000,
                               
                        },
                        jum_staff: {
                                required: true,
                                digits: true,
                                max:1000,
                        },
                       

                    }                                    
                });                                    

        </script>
	@endsection



