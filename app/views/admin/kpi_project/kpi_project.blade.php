@extends('admin.admin')

@section('breadcrumbs')
{!! Breadcrumbs::render('kpi')!!}
@endsection

@section('content')


<div class="col-md-12">
<div class="panel-heading">
	<h3 class="panel-title">KPI Project</h3>
</div> 


<div class="panel-body">

<a  href="{{url('/addkpi')}}">
<button class="btn btn-warning" type="button" style="margin:10px 40px 20px 0px;">
<span class="glyphicon glyphicon-plus-sign"></span>
<span> Tambah KPI </span>
</button>
</a>

					<table class="table datatable">
						<thead>
							<tr>
								<th>Kode KPI </th>
								<th>Kegiatan</th>
								<th>Departemen</th>
								<th>Divisi</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td>
									<div class="btn btn-default btn-rounded btn-sm" >
                                    <span class="fa fa-pencil"></span>
                                    
                                    	{!! link_to_route('editkpi','Edit') !!}
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

