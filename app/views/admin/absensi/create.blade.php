<!-- page Add Absensi-->

@extends('admin.admin')
@section('breadcrumbs')
    {!! Breadcrumbs::render('addabsensi') !!}
@endsection


@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="form-horizontal">
                <div class="panel panel-default">

                    <!-- panel heading -->
                    <div class="panel-heading ui-draggable-handle">
                        <div class="panel-title">
                            <p> Tambah Absensi</p>
                        </div>
                    </div>
                    <!-- end panel heading -->

                    <!-- panel body -->

                    <!--
				@if(isset($data))
                    @if(!($statuss))

                    @if($data==='false')
                            <div class="alert alert-danger" role="alert" data-sound="fail">
                               <p> id employee tidak ada </p>
                               </div>

                                @else
                            <div class="alert alert-danger" role="alert">
                            @foreach($data as $error)
                            <button class="close" type="button" data-dismiss="alert"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
                            <p> <strong>{{ $error }}</strong></p>
								

							@endforeach
                            </div>

                    @endif

                    @elseif($statuss)
                            <div class="alert alert-success" role="alert">
                                 <button class="close" type="button" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                 <strong>Bagus!</strong> Data absensi berhasil dimasukkan.
                          </div>

                        @endif

                    @endif -->
                   <!-- Start Flash Message -->

						@if (Session::has('flash_message'))
								<div class="alert alert-success" role="alert">
                                		<button class="close" type="button" data-dismiss="alert"><span aria-hidden="true">×</span>
                                		<span class="sr-only">Close</span></button>
                               			{{ Session::get('flash_message') }}
                            	</div>
						@endif

						<!-- End Flash Message -->


                </div>
                <div class="panel-body">


                    {!! Form::open(array('route'=>'absensi_store', 'class'=>'form-horizontal', 'id'=>'jvalidate', 'role'=>'form', 'novalidate'=>'novalidate')) !!}
                    @include ('admin/absensi/_include/_form',['submit_text'=>'Tambah'])
                    {!! Form::close() !!}

                </div>
            </div>
            <!-- end panel body -->
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

