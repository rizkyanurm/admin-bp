@extends('admin.admin')

@section('breadcrumbs')
	{!! Breadcrumbs::render('poinpimpin') !!}
@endsection

@section('content')

<div class="panel panel-default">

<div class="panel-heading ui-draggable-handle">

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
                                		<button class="close" type="button" data-dismiss="alert"><span aria-hidden="true">×</span>
                                		<span class="sr-only">Close</span></button>
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
				@foreach($absensi as $key=>$val)
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
</div>
</div>







<div class="panel panel-default">

<div class="panel-heading ui-draggable-handle">

<div class="col-md-16">
<div class="panel-heading">
	<h3 class="panel-title">Daftar Data Jam Kerja</h3>
</div>


<div class="panel-body">

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
							@foreach ($dtjkerja as $key=>$val)
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

</div>










<div class="panel panel-default">
<div class="panel-heading ui-draggable-handle">
<div class="col-md-12">
<div class="panel-heading">
	<h3 class="panel-title">Daftar Data KPI Project</h3>
</div> 


<div class="panel-body">

<a  href="{{url('/add/dtkpi')}}">
<button class="btn btn-warning" type="button" style="margin:10px 40px 20px 0px;">
<span class="glyphicon glyphicon-plus-sign"></span>
<span> Tambah Data KPI </span>
</button>
</a>

					<table class="table datatable">
						<thead>
							<tr>
								<th>Kode KPI </th>
								<th>Tgl mulai</th>
								<th>Tgl Selesai</th>
                                <th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						@foreach($dtkpi as $key=>$val)
							<tr>
								<td>{{ $val->kode_kpi }}</td>
								<td>{{ $val->tgl_mulai }}</td>
								<td>{{ $val->tgl_selesai}}</td>
								<td>{{$val->status}}</td>
								<td>

                                    {!!Form::open(array(
								'route'=>array('delete_dtkpi', $val->id_dtkpi),
								'method'=>'DELETE')) !!}

							{!!Form::submit('Delete',['class'=> 'btn btn-danger btn-rounded btn-sm'])!!}
                            
                            {!!Form::close()!!}
								</td>
							</tr>
                            @endforeach
							
						</tbody>
					</table>
    </div>
    </div>
    
    </div>
</div>










<div class="panel panel-default">
<div class="panel-heading ui-draggable-handle">
<div class="col-md-12">
<div class="panel-heading">
	<h3 class="panel-title">Data Employee </h3>
</div> 
        

<div class="panel-body">

<a  href="{{url('/add/dt/employe')}}">
<button class="btn btn-warning" type="button" style="margin:10px 40px 20px 0px;">
<span class="glyphicon glyphicon-plus-sign"></span>
<span> Tambah Poin </span>
</button>
</a>

					<table class="table datatable">
						<thead>
							<tr>
                                <th>Tgl Input</th>
								<th>Id Employe</th>
								<th>Id Amanah</th>
                                <th>Id Divisi</th>
								<th>Id Jabatan</th>
                                <th>Id Karir</th>
                            
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						@foreach($dtemploye as $key=>$val)
							<tr>
                                <td>{{$val->created_at}}</td>
								<td>{{$val->id_employe}}</td>
								<td>{{$val->id_amanah}}</td>
								<td>{{$val->id_divisi}}</td>
                                <td>{{$val->id_jabatan}}</td>
                                <td>{{$val->id_karir}}</td>
								<td>
									
                                    {!! Form::open(array(
																	'route'=>array('delete_dtemploye', $val->id_dt_employe),
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
</div>
</div>










<div class="panel panel-default">
<div class="panel-heading ui-draggable-handle">
<div class="col-md-12">
<div class="panel-heading">
	<h3 class="panel-title">Data Poin Kaizen</h3>
</div> 
    
      @if (Session::has('flash_message'))
								<div class="alert alert-danger" role="alert">
                                		<button class="close" type="button" data-dismiss="alert"><span aria-hidden="true">×</span>
                                		<span class="sr-only">Close</span></button>
                               			{{ Session::get('flash_message') }}
    </div>
                 @endif


<div class="panel-body">

 <a  href="{{url('/add/dt/kaizen')}}"> 
 <button class="btn btn-warning" type="button" style="margin:10px 40px 20px 0px;"> 
 <span class="glyphicon glyphicon-plus-sign"></span> 
 <span> Tambah Poin </span> 
 </button> 
 </a> 

					<table class="table datatable">
						<thead>
							<tr>
								<th>id employee</th>
								<th>id Poin kaizen</th>
								<th>Nilai kaizen</th>
								<th>Status</th>
                                <th>created at</th>
                                <th>updated at</th>
								<th>Action</th>
								
							</tr>
						</thead>
						<tbody>
						@foreach($dtkaizen as $key=>$val)
							<tr>
								<td>{{$val->id_employe}}</td>
								<td>{{$val->id_dt_pkaizen}}</td>
								<td>{{$val->nilai_kaizen}}</td>
								<td>{{$val->status}}</td>
                                <td>{{$val->created_at}}</td>
								<td>{{$val->updated_at}}</td>
                                

								<td>
								
                                    

                                    	  {!! Form::open(array(
																	'route'=>array('delete_dtkaizen', $val->id_dt_pkaizen),
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
    
    
    @section('scripts')
    
<script type="text/javascript" src="{{URL::to('assets/js/plugins/tableexport/jspdf/libs/base64.js')}}"></script>

<script type="text/javascript" src="{{URL::to('assets/js/plugins/tableexport/jspdf/jspdf.js')}}"></script>

<script type="text/javascript" src="{{URL::to('assets/js/plugins/tableexport/jspdf/libs/sprintf.js')}}"></script>

<script type="text/javascript" src="{{URL::to('assets/js/plugins/tableexport/html2canvas.js')}}"></script>

<script type="text/javascript" src="{{URL::to('assets/js/plugins/tableexport/jquery.base64.js')}}"></script>

<script type="text/javascript" src="{{URL::to('assets/js/plugins/tableexport/tableExport.js')}}"></script>

<script type="text/javascript" src="{{URL::to('assets/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>

<script type="text/javascript" src="{{URL::to('assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>

<script type="text/javascript" src="{{URL::to('assets/js/plugins/icheck/icheck.min.js')}}"></script>

    @endsection