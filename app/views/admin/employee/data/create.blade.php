<!-- Page Add poin Kaizen -->

@extends('admin.admin')

@section('breadcrumbs')
{!! Breadcrumbs::render('add_dt_employe') !!}
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
	<div class="form-horizontal">
		<div class="panel panel-default">

			<!-- panel heading -->
			<div class="panel-heading ui-draggable-handle">
				<div class="panel-title">
					<p> Tambah Data Employe</p>
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
				
					{!! Form::open(array('route'=>'store_dtemploye','class'=>'form-horizontal','id'=>'jvalidate','role'=>'form','novalidate'=>'novalidate')) !!}
					@include ('admin/employee/data/_form',['submit_text'=>'Tambah'])
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
        var jvalidate =$("#jvalidate").validate({
            ignore:[],
            rules:{
               id_employe:{
                    required:true,
                    maxlength:5,
                    
                },
                }
        });

</script>
@endsection