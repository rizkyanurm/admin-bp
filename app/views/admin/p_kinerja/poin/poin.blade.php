@extends('admin.admin')

@section('breadcrumbs')

 {!! breadcrumbs::render('poinkinerja')!!}
@endsection

@section('content')


<div class="col-md-12">
<div class="panel-heading">
	<h3 class="panel-title">Poin Kinerja</h3>
</div> 

    
    @if (Session::has('flash_message'))
								<div class="alert alert-danger" role="alert">
                                		<button class="close" type="button" data-dismiss="alert"><span aria-hidden="true">×</span>
                                		<span class="sr-only">Close</span></button>
                               			{{ Session::get('flash_message') }}
    </div>
                 @endif
    
    

<div class="panel-body">

<a  href="{{url('/add/pkinerja')}}">
<button class="btn btn-warning" type="button" style="margin:10px 40px 20px 0px;">
<span class="glyphicon glyphicon-plus-sign"></span>
<span> Tambah Poin </span>
</button>
</a>

					<table class="table datatable">
						<thead>
							<tr>
								<th>id poin</th>
								<th>Nama Budaya</th>
<!--                                <th>Aspek</th>-->
                                <th>Nama Poin Kinerja</th>
								<th>Bobot</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						@foreach($data as $key=>$val)
							<tr>
								<td>{{$val->id_pkinerja}}</td>
								<td>{{$val->nama_budaya}}</td>
<!--								<td>{{$val->aspek_poin}}</td>-->
                                <td>{{$val->nama_pkinerja}}</td>
                                <td>{{$val->bobot_metrik}}</td>
								<td>
									<div class="btn btn-default btn-rounded btn-sm" >
                                    <span class="fa fa-pencil"></span>
                                    
                                    	{!! link_to_route('edit_pkinerja','Edit',($val->id_pkinerja)) !!}
 									</div>

                                    {!! Form::open(array(
																	'route'=>array('delete_pkinerja', $val->id_pkinerja),
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