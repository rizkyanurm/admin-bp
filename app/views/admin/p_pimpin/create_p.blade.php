<!-- Page Add poin Kepemimpinan -->

@extends('admin.admin')

@section('breadcrumbs')
	{!! Breadcrumbs::render('add_dtpimpin')!!}
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
	<div class="form-horizontal">
		<div class="panel panel-default">

			<!-- panel heading -->
			<div class="panel-heading ui-draggable-handle">
				<div class="panel-title">
					<p> Tambah Data Pimpin</p>
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
				
					{!! Form::open(array('route'=>'store_dtpimpin', 'class'=>'form-horizontal', 'id'=>'jvalidate', 'role'=>'form', 'novalidate'=>'novalidate')) !!}
							@include ('admin/p_pimpin/_include/_form_',['submit_text'=>'Tambah'])
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
                id_employe_p:{
                    required:true,
                    maxlength:5,
                        },
                    
                id_employe_d:{
                    required:true,  
                    maxlength:5,
                    },
                    
                poin_pimpin:{
                    required:true,
                    maxlength:3,
                },
                    
                tgl_penilaian:{
                   required:true,
                    
                },
                    nilai_ppimpin:{
                   required:true,
                        min:0,
                        max:100,
                        digits:true,
                    
                },
                feedback:{
                    maxlength:100,
                    
                },
                
          
                    }                                    
                });                                    

        </script>
	@endsection

