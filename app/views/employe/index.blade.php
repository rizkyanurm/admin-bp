@extends('layouts.template')
@section('content')
<!-- PAGE TITLE -->
<div class="page-title">                    
	<h2><span class="fa fa-arrow-circle-o-left"></span> Data Employe</h2>
</div>
<!-- END PAGE TITLE -->    
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">                
	<div class="row">
		<div class="col-md-12">
			<!-- START DEFAULT DATATABLE -->
			<div class="panel panel-default">
				<div class="panel-heading">                                
					<h3 class="panel-title">Default</h3>
					<ul class="panel-controls">
						<li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
						<li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
						<li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
					</ul>                                
				</div>
				<div class="panel-body">
					<table class="table datatable">
						<thead>
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Jenis Kelamin</th>
								<th>Agama</th>
								<th>Alamat</th>
								<th>No.Telp</th>
							</tr>
						</thead>
						<tbody>
							@foreach($data as $key=>$val)
							<tr>
								<td>{{$val->nama}}</td>
								<td>{{$val->email}}</td>
								<td>{{$val->jenis_kelamin}}</td>
								<td>{{$val->agama}}</td>
								<td>{{$val->alamat}}</td>
								<td>{{$val->no_telp}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@stop