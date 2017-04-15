@extends('admin.admin')

@section('breadcrumbs')
{!! Breadcrumbs::render('kpi')!!}
@endsection

@section('content')

<div class="col-md-12">
<div class="panel-heading">
	<h3 class="panel-title">Daftar KPI/Project</h3>
</div> 


<div class="panel-body">
    	@if (Session::has('flash_message'))
								<div class="alert alert-succes" role="alert">
                                		<button class="close" type="button" data-dismiss="alert"><span aria-hidden="true">×</span>
                                		<span class="sr-only">Close</span></button>
                               			{{ Session::get('flash_message') }}
                            	</div>
            @endif

<a  href="{{url('/add/kpi')}}">
<button class="btn btn-warning" type="button" style="margin:10px 40px 20px 0px;">
<span class="glyphicon glyphicon-plus-sign"></span>
<span> Tambah KPI </span>
</button>
</a>

					<table class="table datatable">
						<thead>
							<tr>
								<th>Kode KPI </th>
								<th>Tugas</th>
								<th>Divisi</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						@foreach($data as $key=>$val)
							<tr>
								<td>{{ $val->kode_kpi }}</td>
								<td>{{ $val->tugas }}</td>
								<td>{{ $val->nama_divisi}}</td>
								<td>
									<div class="btn btn-default btn-rounded btn-sm" >
                                    <span class="fa fa-pencil"></span>
                                    
                                    	{!!link_to_route('editkpi','Edit',($val->id_kpi)) !!}
 									</div>

                                    {!!Form::open(array(
								'route'=>array('delete_kpi', $val->id_kpi),
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

