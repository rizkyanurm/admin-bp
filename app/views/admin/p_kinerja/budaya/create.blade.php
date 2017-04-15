@extends('admin.admin')

@section('breadcrumbs')
{!! Breadcrumbs::render('addbudaya') !!}
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
	<div class="form-horizontal">
		<div class="panel panel-default">

			<!-- panel heading -->
			<div class="panel-heading ui-draggable-handle">
				<div class="panel-title">
					<p> Tambah Budaya</p>
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
				
				
					{!! Form::open() !!}
					@include ('admin/p_kinerja/budaya/_form',['submit_text'=>'Tambah','reset_text'=>'Reset'])
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
                nama_budaya:{
                    required:true,
                    
                },
                bobot_budaya:{
                    required:true,
                    min:0,
                    maxlength:100,
                    
                },
                keterangan_budaya:{
                    required:true,
                },
            }
        });

</script>
@endsection
