@extends('admin.admin')

@section('breadcrumbs')
	{!! Breadcrumbs::render('detailpoinpimpin') !!}
@endsection


@section('content')


<div class="row">
	<div class="col-md-12">
	<div class="form-horizontal">
		<div class="panel panel-default">

			<!-- panel heading -->
			<div class="panel-heading ui-draggable-handle">
				<div class="panel-title">
					<p> Detail Poin (nama Poin)</p>
				</div>
			</div>
			<!-- end panel heading -->

			<!-- panel body -->
				<div class="panel-body">

					<a  href="{{url('/addkepemimpinan')}}">
						<button class="btn btn-warning" type="button" style="margin:10px 40px 20px 0px;">
							<span class="glyphicon glyphicon-plus-sign"></span>
							<span> Tambah Pertanyaan</span>
						</button>
					</a>

					<table class="table datatable">
						<thead>
							<tr>
								<th>No</th>
								<th>Poin kepemimpinan</th>
								<th>Pertanyaan</th>
								<th>Responden</th>
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
                                    
                                    	{!! link_to_route('editpoinpimpin','Edit') !!}
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
			<!-- end panel body -->
		</div>
	</div>
</div>


@endsection