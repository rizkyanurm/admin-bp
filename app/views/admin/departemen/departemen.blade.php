		<!-- Page Departemen -->

		@extends('admin.admin')
		@section('breadcrumbs')
		{!! Breadcrumbs::render('departemen') !!}
		@endsection

		@section('content')

		<div class="col-md-12">
			<div class="panel-heading">
				<h3 class="panel-title">Daftar Departement</h3>
			</div>
			<div class="panel-body">
			@if (Session::has('flash_message'))
								<div class="alert alert-success" role="alert">
                                		<button class="close" type="button" data-dismiss="alert"><span aria-hidden="true">×</span>
                                		<span class="sr-only">Close</span></button>
                               			{{ Session::get('flash_message') }}
                            	</div>
						@endif


				<a  href="{{url('/adddepartemen')}}">
					<button class="btn btn-warning" type="button" style="margin:10px 40px 20px 0px;">
						<span class="glyphicon glyphicon-plus-sign"></span>
						<span> Tambah Departemen</span>
					</button>
				</a>

				<table class="table datatable">
					<thead>
						<tr>
							<th>Nama Departement</th>
                            <th>Created at</th>
                            <th>Updated at</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($data as $key=>$val)
						<tr>
							<td>{{$val->nama_departement}}</td>
                            <td>{{$val->created_at}}</td>
                            <td>{{$val->updated_at}}</td>
					

							<td>
								<div class="btn btn-default btn-rounded btn-sm" >
									<span class="fa fa-pencil"></span>

									{!! link_to_route('editdepartemen','Edit',$val->id_departement) !!}
								</div>

								{!!Form::open(array(
									'route'=>array('delete_departemen', $val->id_departement),
									'method'=>'DELETE'))!!}
                                

									{!!Form::submit('Delete', ['class'=>'btn btn-danger btn-rounded btn-sm'])!!}

									{!!Form::close()!!}
                                
                                
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>

			@endsection
			@stop
