@extends('admin.admin')

@section('breadcrumbs')
{!! Breadcrumbs::render('employee') !!}
@endsection


@section('content')

<div class="col-md-12">
<div class="panel-heading">
	<h3 class="panel-title">Daftar Karyawan</h3>
</div> 
<div class="panel-body">


<a  href="{{url('/addemployee')}}">
<button class="btn btn-warning" type="button" style="margin:10px 40px 20px 0px;">
<span class="glyphicon glyphicon-plus-sign"></span>
<span> Tambah Karyawan</span>
</button>
</a>

				
					<table class="table datatable">
						<thead>
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Jenis Kelamin</th>
								<th>Alamat</th>
								<th>No.Telp</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($data as $key=>$val)
							<tr>
								<td>{{$val->nama}}</td>
								<td>{{$val->email}}</td>
								<td>{{$val->jenis_kelamin}}</td>
								
								<td>{{$val->alamat}}</td>
								<td>{{$val->no_telp}}</td>
								<td>

                                    <div class="btn btn-default btn-rounded btn-sm" >
                                    <span class="fa fa-pencil"></span>
                                    
                                    	{!! link_to_route('editemployee','Edit') !!}
 									</div>

                                    <div class="btn btn-danger btn-rounded btn-sm" onclick="delete_row('trow_1');">
                                    <span class="fa fa-times"></span>

                                    	{!! link_to_route('delete_employee','delete') !!}
 									
                                    </div >

                                    <div class="btn btn-primary btn-rounded btn-sm">
                                    <span class="glyphicon glyphicon-file"></span>
                                    	{!! link_to_route('delete_employee','detail') !!}
                                    </div>
                                </td>
							</tr>
							@endforeach
						</tbody>
					</table>

    </div>
</div>

@endsection
@stop
