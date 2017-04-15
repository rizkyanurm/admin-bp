@extends('admin.admin')

@section('breadcrumbs')

{!! breadcrumbs::render('dtpkaizen')!!}

@endsection

@section('content')



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
						@foreach($data as $key=>$val)
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