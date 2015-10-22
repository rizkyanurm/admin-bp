	<!-- Page Karir -->

	@extends('admin.admin')

	@section('breadcrumbs')
	{!! Breadcrumbs::render('karir') !!}
	@endsection

	@section('content')


	<div class="col-md-12">
		<div class="panel-heading">
			<h3 class="panel-title">Jenjang Karir</h3>
		</div>


		<div class="panel-body">

			@if (Session::has('flash_message'))
				<div class="alert alert-success" role="alert">
					{{ Session::get('flash_message') }}
				</div>
			@endif

			<a  href="{{url('/addkarir')}}">
				<button class="btn btn-warning" type="button" style="margin:10px 40px 20px 0px;">
					<span class="glyphicon glyphicon-plus-sign"></span>
					<span> Tambah Karir</span>
				</button>
			</a>

			<table class="table datatable">
				<thead>
					<tr>
						<th>Golongan</th>
						<th>Pangkat</th>
						<th>Poin kaizen</th>
						<th>Poin kredit</th>
					</tr>
				</thead>
				<tbody>
					@foreach($data as $key=>$val )
					<tr>
						<td>{{ $val->golongan }}</td>
						<td>{{ $val->pangkat }}</td>
						<td>{{ $val->poin_kaizen }}</td>
						<td>{{ $val->poin_kredit }}</td>
						<td>
							<div class="btn btn-default btn-rounded btn-sm" >
								<span class="fa fa-pencil"></span>

								{!! link_to_route('editkarir','Edit',($val->id_karir)) !!}
							</div>

							{!!Form::open(array(
								'route'=>array('delete_karir', $val->id_karir),
								'method'=>'DELETE')) !!}

							{!! Form::submit('Delete',['class'=> 'btn btn-danger btn-rounded btn-sm'])!!}
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>


		</div>
	</div>


	@endsection
