@extends('admin.admin')

@section('breadcrumbs')

{!! breadcrumbs::render('dtppimpin')!!}

@endsection

@section('content')



<div class="col-md-12">
<div class="panel-heading">
	<h3 class="panel-title">Data Poin Kepemimpinan</h3>
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
								<th>id employee dinilai</th>
								<th>id employee penilai</th>
								<th>tgl nilai penilai</th>
								<th>nilai kepemimpinan</th>
								<th>poin pimpin</th>
							</tr>
						</thead>
						<tbody>
						
							<tr>
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