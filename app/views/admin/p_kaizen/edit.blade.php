<!-- Page Add poin Kaizen -->

@extends('admin.admin')

@section('breadcrumbs')
	{!! Breadcrumbs::render('editkaizen')!!}
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
	<div class="form-horizontal">
		<div class="panel panel-default">

			<!-- panel heading -->
			<div class="panel-heading ui-draggable-handle">
				<div class="panel-title">
					<p> Edit Poin</p>
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
				
						{!! Form::model($pkaizen, array('route'=>array('update_pkaizen', $pkaizen->id_pkaizen),'class'=>'form-horizontal', 'id'=>'jvalidate', 'role'=>'form', 'novalidate'=>'novalidate')) !!}
					@include ('admin/p_kaizen/_include/_form',['submit_text'=>'Simpan'])
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
                kegiatan:{
                    required:true,
                    
                },
                bukti_keg:{
                    required:true,
                    minlength:5,
                    maxlength:30,
                    
                },
                jenis:{
                    required:true,
                },
            }
        });

</script>
@endsection