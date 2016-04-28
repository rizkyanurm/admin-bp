@extends('admin.admin')

@section('breadcrumbs')

 {!! breadcrumbs::render('poin')!!}
@endsection

@section('content')


<div class="col-md-12">
<div class="panel-heading">
	<h3 class="panel-title">Poin Kinerja</h3>
</div> 


<div class="panel-body">

<a  href="{{url('/addpoin')}}">
<button class="btn btn-warning" type="button" style="margin:10px 40px 20px 0px;">
<span class="glyphicon glyphicon-plus-sign"></span>
<span> Tambah Poin </span>
</button>
</a>

					<table class="table datatable">
						<thead>
							<tr>
								<th>Aspek</th>
								<th>Nama Poin</th>
								<th>Bobot</th>
								
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						
							<tr>
								<td>Mengikuti kegiatan kantor secara rutin </td>
								<td>Disiplin</td>
								<td>6% </td>
								<td>
									<div class="btn btn-default btn-rounded btn-sm" >
                                    <span class="fa fa-pencil"></span>
                                    
                                    	{!! link_to_route('editpoin','Edit') !!}
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