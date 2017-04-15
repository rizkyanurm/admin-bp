		<!-- rizkyanurm//2015-2016 -->

		@extends('admin.admin')


		<!-- Start Section Breadcrumbs -->
		@section('breadcrumbs')
		{!! Breadcrumbs::render('employee') !!}
		@endsection
		<!-- End Section Breadcrumbs -->



		<!-- Start Section Content -->
		@section('content')

		<div class="col-md-12">
			<div class="panel-heading">
				<h3 class="panel-title">Daftar Karyawan</h3>
			</div>


			<!-- Start Panel Body -->
				<div class="panel-body">

						<!-- Start Flash Message -->

						@if (Session::has('flash_message'))
								<div class="alert alert-success" role="alert">
                                		<button class="close" type="button" data-dismiss="alert"><span aria-hidden="true">×</span>
                                		<span class="sr-only">Close</span></button>
                               			{{ Session::get('flash_message') }}
                            	</div>
						@endif

						<!-- End Flash Message -->


						<!--Start Button Add Employee-->
						<a href="{{url('/addemployee')}}">
								<button class="btn btn-warning" type="button" style="margin:10px 40px 20px 0px;">
									<span class="glyphicon glyphicon-plus-sign"></span>
									<span> Tambah Karyawan</span>
								</button>
						</a>
						<!-- End Button Add Employee -->


								<!-- Start Table Employee -->
								<table class="table datatable">
									<thead>
										<tr>
											<th>Id Employee</th>
											<th>Name</th>
											<th>Email</th>
											<th>Jenis Kelamin</th>
											<th>Alamat</th>
											<th>No.Telp</th>
											<th>Agama</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach($data as $key=>$val)
										<tr>
											<td>{{$val->id_employe}}</td>
											<td>{{$val->nama}}</td>
											<td>{{$val->email}}</td>
											<td>{{$val->jenis_kelamin}}</td>
											<td>{{$val->alamat}}</td>
											<td>{{$val->no_telp}}</td>
											<td>{{$val->agama}}</td>
									

											<td>

											<!-- Start Button Edit -->

												<div class="btn btn-default btn-rounded btn-sm" >
													<span class="fa fa-pencil"></span>
														{!! link_to_route('editemployee','Edit',($val->id_employe)) !!}
												</div>

											<!-- End Button Edit -->


											<!-- Start Button Delete -->
													{!! Form::open(array(
														'route'=>array('delete_employee',$val->id_employe ),
														'method'=>'DELETE')) !!}

														{!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-rounded btn-sm']) !!}

													{!! Form::close()!!}
											<!-- End Button Delete -->

											<!-- Start Button Detail Employee -->

<!--
													<div class="btn btn-primary btn-rounded btn-sm">
														<span class="glyphicon glyphicon-file"></span>
														{!! link_to_route('show_employee','detail',($val->id_employe))!!}
													</div>
-->
											<!-- End Button Detail Employee -->
												</td>
											</tr>
											@endforeach
										</tbody>
									</table>
									<!-- End Table Employee -->

			</div>
			<!-- End Panel Body -->
		</div>

		@endsection
		<!-- End Section Content -->
		@stop
		<!-- End Looping Row -->

		