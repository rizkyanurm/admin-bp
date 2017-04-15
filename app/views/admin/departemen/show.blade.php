<!-- page Divisi -->

@extends('admin.admin')

@section('breadcrumbs')
	{!! Breadcrumbs::render('divisi') !!}
@endsection

@section('content')

<div class="col-md-12">
<div class="panel-heading">
	<h3 class="panel-title">Daftar Divisi</h3>
</div>


<div class="panel-body">
	@if (Session::has('flash_message'))
	<div class="alert alert-success" role="alert">
		{{ Session::get('flash_message') }}
	</div>
	@endif

<a  href="{{url('/adddivisi')}}">
<button class="btn btn-warning" type="button" style="margin:10px 40px 20px 0px;">
<span class="glyphicon glyphicon-plus-sign"></span>
<span> Tambah Divisi</span>
</button>
</a>

					<table class="table datatable">
						<thead>
							<tr>
								<th>Nama Divisi</th>
								<th>Kode</th>
								<th>Departemen</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($data as $key=>$val)
						<tr>
						<td>{{$val->nama_divisi}}</td>
						<td>{{$val->kode_divisi}}</td>
						<td>{{$val->nama_departement}}</td>
						<td>
									<div class="btn btn-default btn-rounded btn-sm" >
                                    <span class="fa fa-pencil"></span>

                                    	{!! link_to_route('editdivisi','Edit',($val->id_divisi)) !!}
 									</div>

                                {!! Form::open(array(
																	'route'=>array('delete_divisi', $val->id_divisi),
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
