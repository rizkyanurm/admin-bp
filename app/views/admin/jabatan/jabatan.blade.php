		@extends('admin.admin')
		@section('breadcrumbs')
		{!! breadcrumbs::render('jabatan')!!}
		@endsection
		@section('content')


		<div class="col-md-12">
			<div class="panel-heading">
				<h3 class="panel-title">Daftar Jabatan</h3>
			</div>
			<div class="panel-body">

				@if (Session::has('flash_message'))
				<div class="alert alert-success" role="alert">
					{{ Session::get('flash_message') }}
				</div>
				@endif

				<a  href="{{url('/addjabatan')}}">
					<button class="btn btn-warning" type="button" style="margin:10px 40px 20px 0px;">
						<span class="glyphicon glyphicon-plus-sign"></span>
						<span> Tambah Jabatan</span>
					</button>
				</a>


				<table class="table datatable">
					<thead>
						<tr>
							<th>Nama Jabatan</th>
							<th>Tunjangan (Rp)</th>
							<th>Jumlah Staff</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($data as $key=>$val)
						<tr>
							<td>{{$val->jabatan}}</td>
							<td>{{$val->tunjangan}}</td>
							<td>{{$val->jum_staff}}</td>
							<td>
								<div class="btn btn-default btn-rounded btn-sm" >
									<span class="fa fa-pencil"></span>

									{!! link_to_route('editjabatan','Edit', $val->id_jabatan) !!}
								</div>

								{!! Form::open(array(
									'route'=>array('delete_jabatan',$val->id_jabatan ),
									'method'=>'DELETE')) !!}

									{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-rounded btn-sm']) !!}

									{!! Form::close()!!}
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>


				</div>
			</div>
			@endsection
