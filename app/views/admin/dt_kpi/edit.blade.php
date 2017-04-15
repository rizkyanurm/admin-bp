<!-- Page Add poin Kaizen -->

@extends('admin.admin')

@section('breadcrumbs')
	{!! Breadcrumbs::render('editkpi')!!}
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
	<div class="form-horizontal">
		<div class="panel panel-default">

			<!-- panel heading -->
			<div class="panel-heading ui-draggable-handle">
				<div class="panel-title">
					<p> Edit KPI</p>
				</div>
			</div>
			<!-- end panel heading -->

			<!-- panel body -->
            
				<div class="panel-body">
				 @if (Session::has('flash_message'))
								<div class="alert alert-danger" role="alert">
                                		<button class="close" type="button" data-dismiss="alert"><span aria-hidden="true">×</span>
                                		<span class="sr-only">Close</span></button>
                               			{{ Session::get('flash_message') }}
                            	</div>
            @endif
				{!! Form::model($dtkpi, array('route'=>array('update_dtkpi', $dtkpi->id_dtkpi),'class'=>'form-horizontal', 'id'=>'jvalidate', 'role'=>'form', 'novalidate'=>'novalidate')) !!}
					@include ('admin/dt_kpi/_include/_form',['submit_text'=>'Simpan'])
					{!! Form::close() !!}
				</div>
			</div>
			<!-- end panel body -->
		</div>
	</div>
</div>


@endsection


@section('script)
  <script type="text/javascript">
            var jvalidate = $("#jvalidate").validate({
                    ignore: [],
                    rules: {
                       id_kpi:{
                            required:true,
                           
                        },
                        tgl_mulai: {
                            required:true,
                         
                            
                        },
                        tgl_selesai:{
                            required:true,
                         
                        },
                        
                        status:{
                            required:true,
                            digits:false,
                        }
                       
                    }
            });
        
        </script>

@endsection