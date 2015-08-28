@extends('admin.admin')

@section('breadcrumbs')
{!! breadcrumbs::render('bobot') !!}

@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
	<div class="form-horizontal">
		<div class="panel panel-default">

			<!-- panel heading -->
			<div class="panel-heading ui-draggable-handle">
				<div class="panel-title">
					<p> Atur Bobot </p>
				</div>
			</div>
			<!-- end panel heading -->

			<!-- panel body -->
				<div class="panel-body">
				
				
<form action="action_page.php" method="get">
  Points 1:
  <input type="range" name="points" min="0" max="10">


   Points 2:
  <input type="range" name="points" min="0" max="10">
  

   Points 3:
  <input type="range" name="points" min="0" max="10">

  <input type="submit">
</form>

</div>
			</div>
			<!-- end panel body -->
		</div>
	</div>
</div>


@endsection