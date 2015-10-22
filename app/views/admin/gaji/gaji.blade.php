@extends('admin.admin')

@section('breadcrumbs')
{!! breadcrumbs::render('gaji')!!}
@endsection

@section('content')


<div class="col-md-12">
<div class="panel-heading">
	<h3 class="panel-title">Gaji Karyawan</h3>
</div> 


<div class="panel-body">


					<table class="table datatable">
						<thead>
							<tr>
								<th>id_employee</th>
								<th>Bulan</th>
								<th>Gaji Pokok</th>
								<th>Gaji total</th>
								<th>Gaji bersih</th>
								<th>Reimburse</th>
								
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>

						<td>
									<div class="btn btn-default btn-rounded btn-sm" >
                                    <span class="fa fa-pencil"></span>
                                    
                                    	{!! link_to_route('editemployee','Detail') !!}
 									</div>
								</td>
							</tr>
						
						</tbody>
					</table>


    </div>
</div>

@endsection