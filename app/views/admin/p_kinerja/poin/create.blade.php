@extends('admin.admin')

@section('breadcrumbs')

 {!! breadcrumbs::render('addpoin')!!}
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
	<div class="form-horizontal">
		<div class="panel panel-default">

			<!-- panel heading -->
			<div class="panel-heading ui-draggable-handle">
				<div class="panel-title">
					<p> Tambah Poin</p>
				</div>
			</div>
			<!-- end panel heading -->

			<!-- panel body -->
				<div class="panel-body">
				
				
					{!! Form::open(array('route'=>'store_pkinerja','class'=>'form-horizontal','id'=>'jvalidate','role'=>'form','novalidate'=>'novalidate')) !!}
					@include ('admin/p_kinerja/poin/_form',['submit_text'=>'Tambah','reset_text'=>'Reset'])
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
                bduaya:{
                    required:true,
                    
                },
                aspek_poin:{
                    required:true,
                   
                    
                },
                nama_pkinerja:{
                    required:true,
                },
                
                bobot_metrik:{
                    required:true,
                    digits:true,
                    min:0,
                    max:100,
                },
            }
        });

</script>
@endsection
