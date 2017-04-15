<!-- page Divisi -->

@extends('admin.admin')

@section('breadcrumbs')
	{!! Breadcrumbs::render('dt_jamkerja') !!}
@endsection

@section('content')

<div class="col-md-16">
<div class="panel-heading">
	<h3 class="panel-title">Daftar Data Jam Kerja</h3>
</div>


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

<a  href="{{url('/add/dtjkerja')}}">
<button class="btn btn-warning" type="button" style="margin:10px 40px 20px 0px;">
<span class="glyphicon glyphicon-plus-sign"></span>
<span> Tambah Data Jam Kerja</span>
</button>
</a>

					<table class="table datatable">
						<thead>
							<tr>
								<th>Tanggal Jam Kerja</th>
								<th>Id Employee</th>
								<th>Id Jam Kerja</th>
								<th>Jumlah Jam Realita</th>
                                <th>Total Jam Realita</th>
                                <th>Total Terlambat</th>
                                <th>Total Kurang Jam</th>
                                <th>Jumlah Cuti</th>
                                <th>Jumlah Izin</th>
                                <th>Jumlah Libur Kewarganegaraan</th>
                                <th>Jumlah Sakit</th>
                                <th>Total Lembur</th>
                                
							</tr>
						</thead>
						<tbody>
							@foreach ($data as $key=>$val)
						<tr>
						<td>{{$val->tgl_jamker}}</td>
						<td>{{$val->id_employe}}</td>
						<td>{{$val->id_jam_kerja}}</td>
                        <td>{{$val->jml_jam_realita}}</td>
                        <td>{{$val->total_jam_realita}}</td>
                        <td>{{$val->total_terlambat}}</td>
                        <td>{{$val->total_kurang_jam}}</td>
                        <td>{{$val->jumlah_cuti}}</td>
                        <td>{{$val->jumlah_izin}}</td>
                        <td>{{$val->jumlah_lbr_kewarganegaraan}}</td>
                        <td>{{$val->jumlah_sakit}}</td>
                        <td>{{$val->total_lembur}}</td>
                        
						<td>
									<div class="btn btn-default btn-rounded btn-sm" >
                                    <span class="fa fa-pencil"></span>

                                    	{!! link_to_route('edit_dtjkerja','Edit',($val->id_dt_jamkerja)) !!}
 									</div>

                                {!! Form::open(array(
																	'route'=>array('delete_dtjkerja', $val->id_dt_jamkerja),
																	'method'=>'DELETE'))!!}

																	{!! Form::submit('Delete',['class'=>'btn btn-danger btn-rounded btn-sm']) !!}
																	{!! Form::close()!!}
								</td>
							</tr>
	@endforeach
						</tbody>
					</table>


    </div>
</div>

@endsection
