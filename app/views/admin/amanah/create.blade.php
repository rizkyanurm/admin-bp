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
<!--
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
-->
                        
                        	@if (Session::has('flash_message'))
								<div class="alert alert-danger" role="alert">
                                		<button class="close" type="button" data-dismiss="alert"><span aria-hidden="true">×</span>
                                		<span class="sr-only">Close</span></button>
                               			{{ Session::get('flash_message') }}
                            	</div>
						@endif


							{!! Form::open(array('route'=>'amanah_store', 'class'=>'form-horizontal', 'id'=>'jvalidate', 'role'=>'form', 'novalidate'=>'novalidate')) !!}
							@include ('admin/amanah/_include/_form',['submit_text'=>'Simpan'])
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
                		 nama_amanah: {
                                required: true,
                                minlength:2,
                                maxlength:15
                        },                                       
                        tunjangan:{
                                required:true,
                                digits:true,
                                max:99999999
                           
                    
                         },

                    }                                    
                });                                    

        </script>
	@endsection

