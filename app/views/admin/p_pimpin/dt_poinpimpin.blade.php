@extends('admin.admin')

@section('breadcrumbs')

{!! breadcrumbs::render('dtppimpin')!!}

@endsection

@section('content')



<div class="col-md-12">
<div class="panel-heading">
	<h3 class="panel-title">Data Poin Kepemimpinan</h3>
</div> 

    
      @if (Session::has('flash_message'))
								<div class="alert alert-danger" role="alert">
                                		<button class="close" type="button" data-dismiss="alert"><span aria-hidden="true">×</span>
                                		<span class="sr-only">Close</span></button>
                               			{{ Session::get('flash_message') }}
    </div>
                 @endif

<div class="panel-body">
   <a  href="{{url('/add/dt/pimpin')}}"> 
 <button class="btn btn-warning" type="button" style="margin:10px 40px 20px 0px;"> 
 <span class="glyphicon glyphicon-plus-sign"></span> 
 <span> Tambah Data Pimpin </span> 
 </button> 
 </a> 
  
    

<!-- <a  href="{{url('/addpoin')}}"> -->
<!-- <button class="btn btn-warning" type="button" style="margin:10px 40px 20px 0px;"> -->
<!-- <span class="glyphicon glyphicon-plus-sign"></span> -->
<!-- <span> Tambah Poin </span> -->
<!-- </button> -->
<!-- </a> -->

					<table class="table datatable">
						<thead>
							<tr>
								<th>id employee dinilai</th>
								<th>id employee penilai</th>
								<th>tgl nilai penilai</th>
								<th>nilai kepemimpinan</th>
								<th>poin pimpin</th>
                                <th>Feedback</th>
                                <th>Action</th>
							</tr>
						</thead>
						<tbody>
                            @foreach($data as $key=>$val)
						
							<tr>
								<td>{{$val->id_employe_d}}</td>
								<td>{{$val->id_employe_p}}</td>
								<td>{{$val->created_at}}</td>
                                <td>{{$val->nilai_ppimpin}}</td>
                                <td>{{$val->id_ppimpin}}</td>
								<td>{{$val->feedback}}</td>
                             
								<td>
								
                                    

                                    	  {!! Form::open(array(
																	'route'=>array('delete_dtpimpin', $val->id_dt_ppimpin),
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