
<!-- Page Add employee  -->

@extends('admin.admin')

@section('breadcrumbs')
{!! Breadcrumbs::render('addemployee') !!}
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
	<div class="form-horizontal">
		<div class="panel panel-default">

			<!-- panel heading -->
			<div class="panel-heading ui-draggable-handle">
				<div class="panel-title">
					<p> Tambah Karyawan</p>
				</div>
			</div>
			<!-- end panel heading -->
			
			<!-- panel body -->

      
    </div>


			
				<div class="form-group form-group-separated">

					{!! Form::open(['route'=> ['employee_store']]) !!}
					@include ('admin/employee/_include/_form',['submit_text'=>'Tambah','reset_text'=>'Reset'])
					{!! Form::close() !!}
				
				</div>
			</div>
			<!-- end panel body -->
		</div>
	</div>
</div>
@endsection