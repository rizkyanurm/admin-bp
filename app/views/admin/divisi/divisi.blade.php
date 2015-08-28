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
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<tr>
						<td></td>
						<td></td>
						<td>
									<div class="btn btn-default btn-rounded btn-sm" >
                                    <span class="fa fa-pencil"></span>
                                    
                                    	{!! link_to_route('editemployee','Edit') !!}
 									</div>

                                    <div class="btn btn-danger btn-rounded btn-sm" onclick="delete_row('trow_1');">
                                    <span class="fa fa-times"></span>

                                    	{!! link_to_route('delete_employee','delete') !!}
 									
                                    </div >
								</td>
							</tr>
						
						</tbody>
					</table>


    </div>
</div>

@endsection