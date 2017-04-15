@extends('admin.admin')

@section('breadcrumbs')
{!! Breadcrumbs::render('dt_employe') !!}

@endsection

@section('content')


<div class="col-md-12">
<div class="panel-heading">
	<h3 class="panel-title">Data Log karyawan </h3>
</div> 

    
    @if (Session::has('flash_message'))
								<div class="alert alert-danger" role="alert">
                                		<button class="close" type="button" data-dismiss="alert"><span aria-hidden="true">×</span>
                                		<span class="sr-only">Close</span></button>
                               			{{ Session::get('flash_message') }}
    </div>
                 @endif
    
    

<div class="panel-body">

<a  href="{{url('/add/dt/employe')}}">
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
								<th>Id Amanah</th>
                                <th>Id Divisi</th>
								<th>Id Jabatan</th>
                                <th>Id Karir</th>
                            
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						@foreach($data as $key=>$val)
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

@endsection



</script>
@endsection


