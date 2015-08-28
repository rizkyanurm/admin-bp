<!-- Page Home Employee -->

@extends('layouts.template')

<!-- Navigation list -->
@section('navigation')

 <li>
 		<a href="#">
			<span class="glyphicon glyphicon-usd"></span>
 			<span class="xn-text"> Salary </span>
 		</a>
 </li>
 <li class="xn-openable">
        <a href="#">
        	<span class="fa fa-users"></span>
            <span class="xn-text">Leadership Evaluation</span>
        </a>
       		<ul>
            	<li><a href="{{ url('/selfEvaluation') }}" class="fa fa-user"> Self-Evaluation</a></li>
            	<li><a href="{{ url('/maEvaluation')}}" class="fa fa-user"> Manager Evaluation</a></li>
            	<li><a href="{{ url('/ceoEvaluation')}}" class="fa fa-user"> CEO Evaluation </a></li>
            	<li><a href="{{ url('/kadivEvaluation') }}" class="fa fa-user"> Kadiv Evaluation </a></li>
       		 </ul>
 </li>
 <li>
 		<a href="#">
 			<span class="fa fa-tasks"></span>
 			<span class="xn-text"> Task </span>
 		</a>
 </li> 
@endsection

<!-- list of breadcrumbs -->
	@section('breadcrumbs')
		{!! Breadcrumbs::render('home_emp')!!}
	@endsection


<!-- Content -->
	@section('content')
		@include('employe_content')
        
	@endsection	



