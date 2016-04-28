@extends('admin.admin')

@section('breadcrumbs')

{!! breadcrumbs::render('kaizen') !!}

@endsection

@section('content')


<div class="col-md-12">
<div class="panel-heading">
	<h3 class="panel-title">Poin Kaizen</h3>
</div> 


<div class="panel-body">

<a  href="{{url('/addkaizen')}}">
<button class="btn btn-warning" type="button" style="margin:10px 40px 20px 0px;">
<span class="glyphicon glyphicon-plus-sign"></span>
<span> Tambah Poin </span>
</button>
</a>

					<table class="table datatable">
						<thead>
							<tr>
								<th>Kegiatan</th>
								<th>Bukti Kegiatan</th>
								<th>Jenis Kegiatan</th>
								
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td>
									<div class="btn btn-default btn-rounded btn-sm" >
                                    <span class="fa fa-pencil"></span>
                                    
                                    	{!! link_to_route('editkaizen','Edit') !!}
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