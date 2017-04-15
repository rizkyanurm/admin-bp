@extends('admin.admin')

@section('breadcrumbs')

{!! Breadcrumbs::render('budaya')!!}

@endsection

@section('content')


<div class="col-md-12">
<div class="panel-heading">
	<h3 class="panel-title">Budaya</h3>
</div> 


						@if (Session::has('flash_message'))
								<div class="alert alert-success" role="alert">
                                		<button class="close" type="button" data-dismiss="alert"><span aria-hidden="true">×</span>
                                		<span class="sr-only">Close</span></button>
                               			{{ Session::get('flash_message') }}
                            	</div>
						@endif
<div class="panel-body">

<a  href="{{url('/add/budaya')}}">
<button class="btn btn-warning" type="button" style="margin:10px 40px 20px 0px;">
<span class="glyphicon glyphicon-plus-sign"></span>
<span> Tambah Budaya </span>
</button>
</a>

					<table class="table datatable">
						<thead>
							<tr>
								<th>Budaya Perusahaan</th>
								<th>Bobot</th>
                                <th>Keterangan</th>
								
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						@foreach($data as $key=>$val)
							<tr>
								<td>{{$val->nama_budaya}}</td>
								<td>{{$val->bobot_budaya}}</td>
                                <td>{{$val->keterangan_budaya}}</td>
							
								<td>
									<div class="btn btn-default btn-rounded btn-sm" >
                                    <span class="fa fa-pencil"></span>
                                    
                                    	{!! link_to_route('edit_budaya','Edit', ($val->id_budaya)) !!}
                                        
                                    </div>
                                     {!! Form::open(array(
																	'route'=>array('delete_budaya', $val->id_budaya),
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