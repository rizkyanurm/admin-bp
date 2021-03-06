		<!-- Page Add Karir -->

		@extends('admin.admin')

		@section('breadcrumbs')
		{!! Breadcrumbs::render('addkarir')!!}
		@endsection

		@section('content')

		<div class="row">
			<div class="col-md-12">
				<div class="form-horizontal">
					<div class="panel panel-default">

						<!-- panel heading -->
						<div class="panel-heading ui-draggable-handle">
							<div class="panel-title">
								<p> Tambah Karir </p>
							</div>
						</div>
						<!-- end panel heading -->
                        <!-- Start Flash Message -->

				@if (Session::has('flash_message'))
								<div class="alert alert-danger" role="alert">
                                		<button class="close" type="button" data-dismiss="alert"><span aria-hidden="true">×</span>
                                		<span class="sr-only">Close</span></button>
                               			{{ Session::get('flash_message') }}
                            	</div>
						@endif
						<!-- End Flash Message -->

						<!-- panel body -->
						<div class="panel-body">
<!--
							@if(isset($data))
							@if(!($statuss))
								<div class="flash alert alert-danger" role="alert">
										@foreach($data as $error)
										<p>{{$error}}</p>
										@endforeach
								</div>
							@endif
							@endif
-->
                         


							{!! Form::open(array('route'=>'store_karir', 'class'=>'form-horizontal', 'id'=>'jvalidate', 'role'=>'form', 'novalidate'=>'novalidate')) !!}
							@include ('admin/karir/_include/_form',['submit_text'=>'Tambah'])
							{!! Form::close() !!}

						</div>
					</div>
					<!-- end panel body -->
				</div>
			</div>
		</div>

@endsection

@
@section('script')
<script type="text/javascript">
        var jvalidate=$("#jvalidate").validate({
            ignore:[],
            rules: {
                golongan:{
                    required:true,
                   
                },
                pangkat:{
                    required: true,
                    digits:false,
                    minlength:1,
                    maxlength:3,
                },
                poin_kaizen:{
                    required:true,
                    digits:true,
                    minlength:3,
                    maxlength:30000,
                }, 
                
                poin_kredit:{
                  required:true,
                  digits:true,
                  min:0,
                  max:50000,
                },
                
            }
        });

</script>

@endsection

