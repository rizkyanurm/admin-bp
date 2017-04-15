@extends('admin.admin')

@section('breadcrumbs')
{!! Breadcrumbs::render('dtkpi')!!}
@endsection

@section('content')


<div class="col-md-12">
<div class="panel-heading">
	<h3 class="panel-title">Daftar Data KPI Project</h3>
</div> 


<div class="panel-body">
    	@if (Session::has('flash_message'))
								<div class="alert alert-succes" role="alert">
                                		<button class="close" type="button" data-dismiss="alert"><span aria-hidden="true">×</span>
                                		<span class="sr-only">Close</span></button>
                               			{{ Session::get('flash_message') }}
                            	</div>
            @endif

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
						@foreach($data as $key=>$val)
							<tr>
								<td>{{ $val->kode_kpi }}</td>
								<td>{{ $val->tgl_mulai }}</td>
								<td>{{ $val->tgl_selesai}}</td>
								<td>{{$val->status}}</td>
								<td>
<!--
									<div class="btn btn-default btn-rounded btn-sm" >
                                    <span class="fa fa-pencil"></span>
                                    
                                    	{!! link_to_route('edit_dtkpi','Edit',($val->id_dtkpi)) !!}
 									</div>
-->

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


@endsection
@stop

