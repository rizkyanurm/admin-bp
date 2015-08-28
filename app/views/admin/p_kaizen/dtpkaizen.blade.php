@extends('admin.admin')

@section('breadcrumbs')

{!! breadcrumbs::render('dtpkaizen')!!}

@endsection

@section('content')



<div class="col-md-12">
<div class="panel-heading">
	<h3 class="panel-title">Data Poin Kaizen</h3>
</div> 


<div class="panel-body">

<!-- <a  href="{{url('/addpoin')}}"> -->
<!-- <button class="btn btn-warning" type="button" style="margin:10px 40px 20px 0px;"> -->
<!-- <span class="glyphicon glyphicon-plus-sign"></span> -->
<!-- <span> Tambah Poin </span> -->
<!-- </button> -->
<!-- </a> -->

					<table class="table datatable">
						<thead>
							<tr>
								<th>id employee</th>
								<th>id p. kaizen</th>
								<th>Tgl. Input</th>
								<th>Nilai kaizen</th>
								<th>Status</th>
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
								<td>
									<div class="btn btn-default btn-rounded btn-sm" >
                                    	<span class="fa fa-pencil"></span>
                                    
                                    	{!! link_to_route('editkaizen','Edit') !!}
 									</div>
								</td>
								
							</tr>
							
						</tbody>
					</table>
    </div>
</div>


@endsection