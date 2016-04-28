@extends('admin.admin')

@section('breadcrumbs')
	{!! Breadcrumbs::render('poinpimpin') !!}
@endsection

@section('content')


<div class="col-md-12">
<div class="panel-heading">
	<h3 class="panel-title">Poin Kepemimpinan</h3>
</div> 


<div class="panel-body">

<a  href="{{url('/addkepemimpinan')}}">
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
								<th>Nama Poin</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						
							<tr>
								<td>POIN KEPEMIMPINAN 1</td>
							

								<td>
									<div class="btn btn-default btn-rounded btn-sm" >
                                    <span class="fa fa-pencil"></span>
                                    
                                    	{!! link_to_route('editpoinpimpin','Edit') !!}
 									</div>

                                    <div class="btn btn-danger btn-rounded btn-sm" onclick="delete_row('trow_1');">
                                    <span class="fa fa-times"></span>

                                    	{!! link_to_route('delete_karir','Delete') !!}
 									
                                    </div >
								</td>
							</tr>
							<tr>
								<td>POIN KEPEMIMPINAN 2</td>
							

								<td>
									<div class="btn btn-default btn-rounded btn-sm" >
                                    <span class="fa fa-pencil"></span>
                                    
                                    	{!! link_to_route('editpoinpimpin','Edit') !!}
 									</div>

                                    <div class="btn btn-danger btn-rounded btn-sm" onclick="delete_row('trow_1');">
                                    <span class="fa fa-times"></span>

                                    	{!! link_to_route('delete_karir','Delete') !!}
 									
                                    </div >
								</td>
							</tr>
						</tbody>
					</table>
    </div>
</div>


@endsection
