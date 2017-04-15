<!-- Page Add Divisi -->

@extends('admin.admin')
@section('breadcrumbs')
	{!! Breadcrumbs::render('add_dtjamkerja') !!}
@endsection
@section('content')

<div class="row">
	<div class="col-md-12">
	<div class="form-horizontal">
		<div class="panel panel-default">

			<!-- panel heading -->
			<div class="panel-heading ui-draggable-handle">
				<div class="panel-title">
					<p> Tambah Log Jam Kerja </p>
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

					<div class="form-group">

					{!! Form::open(array('route'=> 'store_dtjkerja','class'=>'form-horizontal','id'=>'jvalidate','role'=>'form', 'novalidate'=>'novalidate')) !!}
					@include ('admin/dt_jkerja/_include/_form',['submit_text'=>'Tambah'])
					{!! Form::close() !!}
					<div>

				</div>
			</div>
			<!-- end panel body -->
		</div>
	</div>
</div>
    </div>
@endsection
        
@section('script')
        <script type="text/javascript">
            var jvalidate = $("#jvalidate").validate({
                    ignore: [],
                    rules: {
                       tgl_jamker:{
                            required:true,
                           
                        },
                        id_employe: {
                            required:true,
                            minlength:1,
                            maxlength:5,
                            digits:true,
                            
                        },
                        id_jam_kerja:{
                            required:true,
                            minlength:1,
                            maxlength:5,
                            digits:true,
                        },
                        jml_jam_realita:{
                          required:true,
                          min:0,
                          max:8,
                          digits:true,
                        },
                        total_jam_realita:{
                            required:true,
                            min:0,
                            max:310,
                            digits:true,
                        },
                        total_terlambat:{
                           required:true,
                           min:0,
                           max:30,
                           digits:true,
                        },
                        
                        total_kurang_jam:{
                            required:true,
                            min:0,
                            max:310,
                            digits:true,
                            
                        },
                        
                        jumlah_cuti:{
                           required:true,
                           min:0,
                           max:5,
                           digits:true,
                        },
                        
                        jumlah_izin:{
                          required:true,
                          min:0,
                          max:5,
                          digits:true,
                        },
                        
                        jumlah_lbr_kewarganegaraan:{
                            required:true,
                            min:0,
                            max:3,
                            digits:true,
                        },
                        
                        jumlah_sakit:{
                          required:true,
                          min:0,
                          max:31,
                          digits:true,
                        },
                        
                        total_lembur:{
                          required:true,
                          min:0,
                          max:61,
                          digits:true,
                        },                  
                    }
            });
        
        </script>
@endsection
