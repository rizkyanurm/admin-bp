@extends('admin.admin')

@section('breadcrumbs')

{!! Breadcrumbs::render('poinkinerja') !!}

@endsection


@section('content')

			<div class="col-md-3">                        
                    <a href="{{url('/budaya')}}" class="tile tile-warning tile-valign">
   					<span class="fa fa-star-o"></span>
                    <p> Atur Budaya </p>
                    </a>                        
            </div>
            <div class="col-md-3">                        
                    <a href="{{url('/aspek')}}" class="tile tile-danger tile-valign">
   					<span class="glyphicon glyphicon-indent-left"></span>
                    <p> Atur Aspek</p>
                    </a>                        
            </div>
            <div class="col-md-3">                        
                    <a href="{{url('/poin')}}" class="tile tile-info tile-valign">
				    <span class="glyphicon glyphicon-list"></span>
                    <p> Poin Kinerja</p>
                    </a>                        
            </div>
@endsection