		@extends('admin.admin')

		@section('breadcrumbs')
		{!! Breadcrumbs::render('employee') !!}
		@endsection


		@section('content')

		<div class="col-md-12">
			<div class="panel-heading">
				<h3 class="panel-title">Daftar Karyawan</h3>
			</div>
			<div class="panel-body">

				@if (Session::has('flash_message'))
				<div class="alert alert-success" role="alert">
					{{ Session::get('flash_message') }}
				</div>
				@endif
				<a  href="{{url('/addemployee')}}">
					<button class="btn btn-warning" type="button" style="margin:10px 40px 20px 0px;">
						<span class="glyphicon glyphicon-plus-sign"></span>
						<span> Tambah Karyawan</span>
					</button>
				</a>

				<table class="table datatable">
					<thead>
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th>Jenis Kelamin</th>
							<th>Alamat</th>
							<th>No.Telp</th>
							<th>Agama</th>
							<th>Umur</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($data as $key=>$val)
						<tr>
							<td>{{$val->nama}}</td>
							<td>{{$val->email}}</td>
							<td>{{$val->jenis_kelamin}}</td>
							<td>{{$val->alamat}}</td>
							<td>{{$val->no_telp}}</td>
							<td>{{$val->agama}}</td>
							<td>{{$val->umur}}</td>

							<td>

								<div class="btn btn-default btn-rounded btn-sm" >
									<span class="fa fa-pencil"></span>

									{!! link_to_route('editemployee','Edit',($val->id_employe)) !!}
								</div>

								{!! Form::open(array(
									'route'=>array('delete_employee',$val->id_employe ),
									'method'=>'DELETE')) !!}

									{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-rounded btn-sm']) !!}

									{!! Form::close()!!}

									<div class="btn btn-primary btn-rounded btn-sm">
										<span class="glyphicon glyphicon-file"></span>
										{!! link_to_route('delete_employee','detail') !!}
									</div>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>

				</div>
			</div>

			@endsection
			@stop
