@extends('admin.admin')

@section('breadcrumbs')
{!! breadcrumbs::render('jamkerja')!!}

@endsection
@section('content')



<div class="col-md-12">
<div class="panel-heading">
	<h3 class="panel-title">Daftar Jam Kerja</h3>
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
    
            <a  href="{{url('/add/jamkerja')}}"> 
                <button class="btn btn-warning" type="button" style="margin:10px 40px 20px 0px;"> 
                <span class="glyphicon glyphicon-plus-sign"></span> 
                        <span> Tambah Jam Kerja </span> 
                </button> 
         </a> 


					<table class="table datatable">
						<thead>
							<tr>
                                
                                <th>Nam jam Kerja</th>
                                <th>Hari Kerja Normal</th>
                                <th>Jam Kerja Normal</th>
                                <th>Hari Kerja Aktual</th>
                                <th>Jam Kerja AKtual</th>
                                
<!--
								<th>id employee</th>
								<th>Tgl. Input</th>
								<th>Total jam realita</th>
								<th>Total terlambat</th>
								<th>Total kurang jam</th>


								<th>Total lembur</th>
								<th>Jumlah cuti</th>
								<th>Jumlah izin</th>
								<th>Jumlah libur negara</th>
								<th>Jumlah sakit</th>
-->

								<th>Action</th>
								
							</tr>
						</thead>
						<tbody>
                            @foreach($data as $key=>$val)
						
							<tr>
                                
							    <td>{{$val->nama_jkerja}}</td>
								<td>{{$val->hari_kerja_normal}}</td>
								<td>{{$val->jam_kerja_normal}}</td>
								
								<td>{{$val->hari_kerja_aktual}}</td>
								<td>{{$val->jam_kerja_aktual}}</td>
                                

								<td>
									<div class="btn btn-default btn-rounded btn-sm" >
									<span class="fa fa-pencil"></span>

									{!! link_to_route('editjamkerja','Edit', $val->id_jam_kerja) !!}
								</div>

								{!! Form::open(array(
									'route'=>array('delete_jamkerja',$val->id_jam_kerja ),
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



