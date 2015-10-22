<!-- page Amanah -->

@extends('admin.admin')

@section('breadcrumbs')
{!! Breadcrumbs::render('amanah') !!}
@endsection

@section('content')

<div class="col-md-12">
	<div class="panel-heading">
		<h3 class="panel-title">Daftar Amanah</h3>
	</div>


	<div class="panel-body">
		@if (Session::has('flash_message'))
			<div class="alert alert-succes" role="alert">
					{{ Session::get('flash_message') }}
			</div>
		@endif


		<a  href="{{url('/addamanah')}}">
			<button class="btn btn-warning" type="button" style="margin:10px 40px 20px 0px;">
				<span class="glyphicon glyphicon-plus-sign"></span>
				<span> Tambah Amanah</span>
			</button>
		</a>

		<table class="table datatable">
			<thead>
				<tr>
					<th>Nama Amanah</th>
					<th>Tunjangan</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($data as $key=>$val)
				<tr>
					<td>{{ $val->nama_amanah }}</td>
					<td>{{ $val->tunjangan }}</td>
					<td>
						<div class="btn btn-default btn-rounded btn-sm" >
							<span class="fa fa-pencil"></span>

							{!! link_to_route('editamanah','Edit', $val->id_amanah) !!}
						</div>

						{!! Form::open(array(
							'route'=>array('delete_amanah', $val->id_amanah),
							'method'=>'DELETE'))!!}

						{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-rounded btn-sm']) !!}
						{!! Form::close() !!}
					</td>
				</tr>
				@endforeach

			</tbody>
		</table>


	</div>
</div>

@endsection
