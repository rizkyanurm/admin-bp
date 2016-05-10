@extends('admin.admin')
@section('breadcrumbs')
{!! Breadcrumbs::render('editabsensi') !!}
@endsection

@section('content')


<div class="row">
	<div class="col-md-12">
	<div class="form-horizontal">
		<div class="panel panel-default">

			<!-- panel heading -->
			<div class="panel-heading ui-draggable-handle">
				<div class="panel-title">
					<p> Edit Absensi</p>
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
				
					
				
					{!! Form::model($absensi,array('route'=>array('updateabsensi',$absensi->id_absensi),'class'=>'form-horizontal', 'id'=>'jvalidate', 'role'=>'form', 'novalidate'=>'novalidate')) !!}
					@include ('admin/absensi/_include/_form',['submit_text'=>'Update'])
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
                		 id_employe: {
                                required: true,
                                minlength: 1,
                                maxlength: 15
                        },                                                 
                        status: {
                                required: true,
                               
                        },
                        total_jam: {
                                required: true,
                                digits: true
                        },
                        tgl_absensi: {
                                required: true,
                                date: true
                        },

          
            			Jammasuk_shift1: {
            					required:true
                            
            			},

            			jamkeluar_shift1: {
            					required:true
                             
            			},

            			Jammasuk_shift2: {

            					required:true
                            

            			},
                    
                        jamkeluar_shift2:{
                                
                                required:true
                             
                            
                        },
                        
                        Jamasuk_lembur:{
                                required:true
                                
                        },
                    
                        jamkeluar_lembur:{
                                required:true
                           
                    
                         },

                    }                                    
                });                                    

        </script>
	@endsection


