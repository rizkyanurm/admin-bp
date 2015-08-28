@extends('admin.admin')

@section('breadcrumbs')

{!! breadcrumbs::render('dtpkinerja')!!}

@endsection

@section('content')



<div class="col-md-12">
<div class="panel-heading">
	<h3 class="panel-title">Data Poin Kinerja</h3>
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
								<th>id p. kinerja</th>
								<th>tgl nilai kinerja</th>
								<th>nilai kinerja</th>
								<th>bobot kinerja</th>
								<th>indikator kinerja</th>
								
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
								
							</tr>
							
						</tbody>
					</table>
    </div>
</div>


@endsection