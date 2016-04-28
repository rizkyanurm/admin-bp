		@extends ('admin.admin')

		@section('breadcrumbs')
		{!! breadcrumbs::render('absensi')!!}
		@endsection


		@section('content')


		<div class="col-md-12">
			<div class="panel-heading">
				<h3 class="panel-title">Data Absensi Karyawan</h3>
			</div>


			<div class="panel-body">

				<a  href="{{url('/addabsensi')}}">
					<button class="btn btn-warning" type="button" style="margin:10px 40px 20px 0px;">
						<span class="glyphicon glyphicon-plus-sign"></span>
						<span> Tambah Absensi </span>
					</button>
				</a>

					@if (Session::has('flash_message'))
				<div class="alert alert-success" role="alert">


					{{ Session::get('flash_message') }}
				</div>
				@endif

				<table class="table datatable">
					<thead>


						<tr>
							<th rowspan="2">id employe</th>
							<th rowspan="2">Tanggal</th>
							<th rowspan="2">Status</th>
							<th rowspan="2">Total Jam</th>
							<th rowspan="2">Total terlambat</th>
							<th colspan="2">Shift 1</th>
							<th colspan="2">Shift 2</th>
							<th colspan="2">Lembur</th>
							<th rowspan="2">Action</th>
								<tr>
									<th>Masuk</th>
									<th>Keluar</th>
									<th>Masuk</th>
									<th>Keluar</th>
									<th>Masuk</th>
									<th>Keluar</th>
								</tr>
						</tr>
					</thead>
					<tbody>
					@foreach($data as $key=>$val)
						<tr>
							<td>{{$val->id_employe}}</td>
							<td>{{$val->tgl_absensi}}</td>
							<td>{{$val->status}}</td>
							<td>{{$val->total_jam}}</td>
							<td>{{$val->jml_terlambat}}</td>
							<td>{{$val->jammasuk_shift1}}</td>
							<td>{{$val->jamkeluar_shift1}}</td>
							<td>{{$val->jammasuk_shift2}}</td>
							<td>{{$val->jamkeluar_shift2}}</td>
							<td>{{$val->jamasuk_lembur}}</td>
							<td>{{$val->jamkeluar_lembur}}</td>
							
							<td>
								<div class="btn btn-default btn-rounded btn-sm" >
									<span class="fa fa-pencil"></span>

									{!! link_to_route('editabsensi','Edit',($val->id_absensi)) !!}

								</div>

									{!! Form::open(array(
									'route'=>array('delete_absensi',$val->id_absensi ),
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
