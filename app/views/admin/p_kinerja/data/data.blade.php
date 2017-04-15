@extends('admin.admin')

@section('breadcrumbs')

@endsection

@section('content')


<div class="col-md-12">
<div class="panel-heading">
	<h3 class="panel-title">Data Log Poin Kinerja</h3>
</div> 

    
    @if (Session::has('flash_message'))
								<div class="alert alert-danger" role="alert">
                                		<button class="close" type="button" data-dismiss="alert"><span aria-hidden="true">×</span>
                                		<span class="sr-only">Close</span></button>
                               			{{ Session::get('flash_message') }}
    </div>
                 @endif
    
    

<div class="panel-body">

<a  href="{{url('/add/dt/pkinerja')}}">
<button class="btn btn-warning" type="button" style="margin:10px 40px 20px 0px;">
<span class="glyphicon glyphicon-plus-sign"></span>
<span> Tambah Log </span>
</button>
</a>

					<table class="table datatable">
						<thead>
							<tr>
                                <th>Tgl Input</th>
								<th>Id Employe</th>
								<th>Nama Poin Kinerja</th>
                                <th>Nilai Kinerja</th>
								<th>Bobot Poin</th>
                                <th>Indikator_kinerja</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						@foreach($data as $key=>$val)
							<tr>
                                <td>{{$val->created_at}}</td>
								<td>{{$val->id_employe}}</td>
								<td>{{$val->nama_pkinerja}}</td>
								<td>{{$val->nilai_kinerja}}</td>
                                <td>{{$val->bobot_poin}}</td>
                                <td>{{$val->indikator_kinerja}}</td>
								<td>
									
                                    {!! Form::open(array(
																	'route'=>array('delete_dtpkinerja', $val->id_dt_pkinerja),
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