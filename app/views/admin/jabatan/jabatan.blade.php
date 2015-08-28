@extends('admin.admin')

@section('breadcrumbs')

{!! breadcrumbs::render('jabatan')!!}


@endsection


@section('content')


<div class="col-md-12">
<div class="panel-heading">
	<h3 class="panel-title">Daftar Jabatan</h3>
</div> 
<div class="panel-body">


<a  href="{{url('/addjabatan')}}">
<button class="btn btn-warning" type="button" style="margin:10px 40px 20px 0px;">
<span class="glyphicon glyphicon-plus-sign"></span>
<span> Tambah Jabatan</span>
</button>
</a>

				
					<table class="table datatable">
						<thead>
							<tr>
								<th>Nama Jabatan</th>
								<th>Tunjangan (Rp)</th>
								<th>Jumlah Staff</th>
							</tr>
						</thead>
						<tbody>
						
							<tr>
								<td></td>
								<td></td>
								<td>
									<div class="btn btn-default btn-rounded btn-sm" >
                                    <span class="fa fa-pencil"></span>
                                    
                                    	{!! link_to_route('editjabatan','Edit') !!}
 									</div>

                                    <div class="btn btn-danger btn-rounded btn-sm" onclick="delete_row('trow_1');">
                                    <span class="fa fa-times"></span>

                                    	{!! link_to_route('deletekarir','Delete') !!}
 									
                                    </div >
								</td>
							</tr>
							
						</tbody>
					</table>


    </div>
</div>
@endsection