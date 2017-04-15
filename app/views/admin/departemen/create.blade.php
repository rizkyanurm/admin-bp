			<!-- page Add Departemen -->

			@extends('admin.admin')
			@section('breadcrumbs')
			{!! Breadcrumbs::render('adddepartemen') !!}
			@endsection


			@section('content')

			<div class="row">
				<div class="col-md-12">
					<div class="form-horizontal">
						<div class="panel panel-default">

							<!-- panel heading -->
							<div class="panel-heading ui-draggable-handle">
								<div class="panel-title">
									<p> Tambah Departemen</p>
								</div>
							</div>
							<!-- end panel heading -->
<!--
							@if(isset($data))

							<div class="flash alert alert-danger" role="alert">
								@foreach($data as $error)
								<p>{{ $error }}</p>
								@endforeach
							</div>

							@endif
-->
                              	@if (Session::has('flash_message'))
								<div class="alert alert-danger" role="alert">
                                		<button class="close" type="button" data-dismiss="alert"><span aria-hidden="true">×</span>
                                		<span class="sr-only">Close</span></button>
                               			{{ Session::get('flash_message') }}
                            	</div>
						@endif


							<!-- panel body -->
							<div class="panel-body">


								{!! Form::open(array('route'=>'departemen_store','class'=>'form-horizontal', 'id'=>'jvalidate','role'=>'form', 'novalidate'=>'novalidate')) !!}
								@include ('admin/departemen/_include/_form',['submit_text'=>'Tambah'])
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



