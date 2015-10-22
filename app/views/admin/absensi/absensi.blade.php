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

				<table class="table datatable">
					<thead>
						<tr>
							<th rowspan="2">id employee</th>
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

						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<div class="btn btn-default btn-rounded btn-sm" >
									<span class="fa fa-pencil"></span>

									{!! link_to_route('editabsensi','Edit') !!}
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>


		@endsection
