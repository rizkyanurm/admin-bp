@extends('admin.admin')

@section('breadcrumbs')
	{!! Breadcrumbs::render('poinpimpin') !!}
@endsection

@section('content')


<div class="col-md-12">
<div class="panel-heading">
	<h3 class="panel-title">Poin Kepemimpinan</h3>
</div> 
 @if (Session::has('flash_message'))
								<div class="alert alert-danger" role="alert">
                                		<button class="close" type="button" data-dismiss="alert"><span aria-hidden="true">×</span>
                                		<span class="sr-only">Close</span></button>
                               			{{ Session::get('flash_message') }}
    </div>
                 @endif
                                    

<div class="panel-body">

<a  href="{{url('/add/ppimpin')}}">
<button class="btn btn-warning" type="button" style="margin:10px 40px 20px 0px;">
<span class="glyphicon glyphicon-plus-sign"></span>
<span> Tambah Poin</span>
</button>
</a>
<!-- 
<a  href="{{url('/addpertanyaanp')}}">
<button class="btn btn-warning" type="button" style="margin:10px 40px 20px 0px;">
<span class="glyphicon glyphicon-plus-sign"></span>
<span> Tambah pertanyaan</span>
</button>
</a> -->

					<table class="table datatable">
						<thead>
							<tr>
                                <th>Id Poin</th>
								<th>Nama Poin</th>
                                <th>Created at</th>
                                <th>Update at</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						@foreach($data as $key=>$val)
							<tr>
								<td>{{$val->id_ppimpin}}</td>
                                <td>{{$val->nama_ppimpin}}</td>
                                <td>{{$val->created_at}}</td>
                                <td>{{$val->updated_at}}</td>
							

								<td>
									<div class="btn btn-default btn-rounded btn-sm" >
                                    <span class="fa fa-pencil"></span>
                                    
                                    	{!! link_to_route('edit_ppimpin','Edit', $val->id_ppimpin) !!}
 									</div>

                                   
                                    	  {!! Form::open(array(
																	'route'=>array('delete_ppimpin', $val->id_ppimpin),
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
