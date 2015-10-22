@extends('layouts.template')

@section('content')
{!! Breadcrumbs::render('admin') !!}
@endsection


@section('navigation')

	<li>
        <a href="{{url('/homeadmin')}}">
        <span class="fa fa-desktop"></span>
        <span class="xn-text">Dashboard</span></a>
    </li>  
	<li class="xn-openable">
        <a href="{{url('/employee')}}">
        <span class="fa fa-group"></span>
        <span class="xn-text"> Employee </span>
        </a> 
        <ul>
        	<li>
        		<a href="{{url('/employee')}}">
    			<span class="glyphicon glyphicon-user"></span>
        		Employee
        		</a>
        	</li>
        	<li class="xn-openable">
        		<a href="{{url('')}}">
    			<span class="fa fa-clipboard"></span>
        		Jam kerja
        		</a>
        		<ul>
        			<li>
        			<a href="{{url('')}}">
    					<span class="fa fa-clipboard"></span>
        				Jam kerja
        			</a>
        			</li>
        			<li>
        				<a href="{{url('')}}">
        					<span class="fa fa-clipboard"></span>
        					Data Jam kerja	
        				</a>
        			</li>
        		</ul>
        	</li>
        	<li>
        		<a href="{{url('/gaji')}}">
        		<span class="glyphicon glyphicon-envelope"></span>
        		Gaji
        		</a>
        	</li>
        	<li>
        		<a href="{{url('/absensi')}}">
        		<span class="glyphicon glyphicon-calendar"></span>
        		Absensi
        		</a>
        	</li>
        	<li>
        		<a href="{{url('/amanah')}}">
        		<span class="glyphicon glyphicon-calendar"></span>
        		Amanah
        		</a>
        	</li>
        </ul>
	</li> 


	<li class="xn-openable">
		<a href="{{url('/departemen')}}">
			<span class="fa fa-building-o"></span>
			<span class="xn-text">Perusahaan</span>
		</a>
			<ul>
				<li>
					<a href="{{url('/departemen')}}">
					<span class="fa fa-hospital-o"></span>
					Departemen
					</a>
				</li>
				<li>
					<a href="{{url('/divisi')}}">
					<span class="fa fa-bars"></span>
					Divisi
					</a>
				</li> 
				<li>
					<a href="{{url('/karir')}}">
   					<span class="fa fa-sitemap"></span>
					Jenjang karir
					</a>
				</li>
				<li>
					<a href="{{url('/jab')}}">
    				<span class="fa fa-suitcase"></span>
					Jabatan
					</a>
				</li>
			</ul>
	</li>  
	<li class="xn-openable">
		<a href="{{url('/poinkinerja')}}">
    <span class="fa fa-ellipsis-v"></span>
			<span class="xn-text">Poin Penilaian</span>
		</a>
		<ul>
		<li class="xn-openable">
				<a href="{{url('/poinkinerja')}}">
    			<span class="fa fa-suitcase"></span>
					Kinerja
				</a>
				<ul>
				<li>
					<a href="{{url('/poinkinerja')}}">
    				<span class="fa fa-suitcase"></span>
					Poin Kinerja
				</a>
				</li>
					<li>
					<a href="{{url('/bobotpoin')}}">
    				<span class="glyphicon glyphicon-tasks"></span>
						Pengaturan Bobot
					</a>
					</li>
					<li>
					<a href="{{url('/dtpkinerja')}}">
    				<span class="fa fa-suitcase"></span>
					Data Poin Kinerja
				</a>
				</li>
				</ul>
			</li>
			<li class="xn-openable">
				<a href="{{url('/kepemimpinan')}}">
					<span class="glyphicon glyphicon-globe"></span>
					Kepemimpinan
				</a>
				<ul>
					<li>
						<a href="{{url('/kepemimpinan')}}">
							<span class="glyphicon glyphicon-globe"></span>
							Poin Kepemimpinan
						</a>
					</li>
					<li>
						<a href="{{url('/dtppimpin')}}">
							<span class="glyphicon glyphicon-globe"></span>
							Data Poin Kepemimpinan
						</a>
					</li>
				</ul>
			</li>
			
			<li class="xn-openable">
				<a href="{{url('/kaizen')}}">
    			<span class="glyphicon glyphicon-tree-deciduous"></span>
				Kaizen
				</a>
				<ul>
				<li>
						<a href="{{url('/kaizen')}}">
    					<span class="glyphicon glyphicon-tree-deciduous"></span>
						Poin Kaizen
						</a>
				</li>
				<li>
					<a href="{{url('/dtpkaizen')}}">
    				<span class="glyphicon glyphicon-tree-deciduous"></span>
					Data Poin Kaizen
					</a>
				</li>
				</ul>
				
			</li>
		</ul>
	</li>
	<li class="xb-openable">
		<a href="{{url('/kpi')}}">
			<span class="fa fa-check"></span>
			<span class="xn-text">Project/KPI</span>
		</a>
	</li>
			
	
	 
@endsection

@section('content')
	@include('admin_content')
@endsection