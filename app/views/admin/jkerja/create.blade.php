	<!-- Page Add Jam Kerja  -->

	@extends('admin.admin')

	@section('breadcrumbs')

	{!! breadcrumbs::render('addjamkerja')!!}


	@endsection


	@section('content')


	<div class="row">
		<div class="col-md-12">
			<div class="form-horizontal">
				<div class="panel panel-default">

					<!-- panel heading -->
					<div class="panel-heading ui-draggable-handle">
						<div class="panel-title">
							<p> Tambah Jam Kerja</p>
						</div>
					</div>
					<!-- end panel heading -->

					<!-- panel body -->
					<div class="panel-body">
                        
                        <!-- Start Flash Message -->

						@if (Session::has('flash_message'))
								<div class="alert alert-danger" role="alert">
                                		<button class="close" type="button" data-dismiss="alert"><span aria-hidden="true">×</span>
                                		<span class="sr-only">Close</span></button>
                               			{{ Session::get('flash_message') }}
                            	</div>
						@endif

						<!-- End Flash Message -->


<!--
						@if(isset($data))
						@if(! ($statuss))
						<div class="flash alert alert-danger" role="alert">
							@foreach($data as $error)

							<p>{{ $error }}</p>

							@endforeach
						</div>
						@endif
						@endif
-->

				    {!! Form::open(array('route'=>'jamkerja_store', 'class'=>'form-horizontal', 'id'=>'jvalidate', 'role'=>'form', 'novalidate'=>'novalidate')) !!}
						@include ('admin/jkerja/_include/_form',['submit_text'=>'Tambah','reset_text'=>'Reset'])
						{!! Form::close() !!}


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
                             
                        nama_jamker:{
                          required:true,
                          maxlength:30;
                          minlength:2;
                           
                        },
                    
                        hari_kerja_normal: {
                                required: true,
                                digits:true,
                                max:31,
                                min:0,
                               
                        },
                        jam_kerja_normal: {
                                required: true,
                                digits: true,
                                max:248,
                                min:0,
                        },
                      
                        hari_kerja_aktual:{
                                required:true,
                                digits:true,
                                max:310,
                                min:0,
                        },
                        
                        jam_kerja_aktual:{
                                required:true,
                                digits:true,
                                max:310,
                                min:0,
                        },
                       
                    }                                    
                });                                    

        </script>
	@endsection
