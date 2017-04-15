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
        <span class="xn-text"> Karyawan </span>
        </a> 
        <ul>
        	<li>
        		<a href="{{url('/employee')}}">
    			<span class="glyphicon glyphicon-user"></span>
        		Karyawan
        		</a>
        	</li>
        	<li class="xn-openable">
        		<a href="{{url('')}}">
    			<span class="fa fa-clipboard"></span>
        		Jam kerja
        		</a>
        		<ul>
        			<li>
        			<a href="{{url('/jamkerja')}}">
    					<span class="fa fa-clipboard"></span>
        				Jam kerja
        			</a>
        			</li>
        			<li>
        				<a href="{{url('/dt_jamkerja')}}">
        					<span class="fa fa-clipboard"></span>
        					Data Jam kerja	
        				</a>
        			</li>
        		</ul>
        	</li>
            <li>
        		<a href="{{url('/dt/employe')}}">
    			<span class="glyphicon glyphicon-user"></span>
        		Log Data Karyawan
        		</a>
        	</li>
<!--
        	<li>
        		<a href="{{url('/gaji')}}">
        		<span class="glyphicon glyphicon-envelope"></span>
        		Gaji
        		</a>
        	</li>
-->
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
		<a href="{{url('/pkinerja/index')}}">
    <span class="fa fa-ellipsis-v"></span>
			<span class="xn-text">Poin Penilaian</span>
		</a>
		<ul>
		<li class="xn-openable">
				<a href="{{url('/pkinerja')}}">
    			<span class="fa fa-suitcase"></span>
					Kinerja
				</a>
				<ul>
				<li>
					<a href="{{url('/pkinerja')}}">
    				<span class="fa fa-suitcase"></span>
					Poin Kinerja
				</a>
				</li>
					<li>
					<a href="{{url('/budaya')}}">
    				<span class="glyphicon glyphicon-tasks"></span>
						Pengaturan Budaya
					</a>
					</li>
					<li>
					<a href="{{url('/dt/pkinerja')}}">
    				<span class="fa fa-suitcase"></span>
					Data Poin Kinerja
				</a>
				</li>
				</ul>
			</li>
			<li class="xn-openable">
				<a href="{{url('/poinpimpin')}}">
					<span class="glyphicon glyphicon-globe"></span>
					Kepemimpinan
				</a>
				<ul>
					<li>
						<a href="{{url('/poinpimpin')}}">
							<span class="glyphicon glyphicon-globe"></span>
							Poin Kepemimpinan
						</a>
					</li>
					<li>
						<a href="{{url('/dt/pimpin')}}">
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
					<a href="{{url('/dt/kaizen')}}">
    				<span class="glyphicon glyphicon-tree-deciduous"></span>
					Data Poin Kaizen
					</a>
				</li>
				</ul>
				
			</li>
		</ul>
	</li>
	<li class="xn-openable">
		<a href="{{url('/kpi')}}">
			<span class="fa fa-check"></span>
			<span class="xn-text">KPI</span>
		</a>
        <ul>
            <li>
            <a href="{{url('/kpi')}}">
                <span class="fa fa-check"></span>
                KPI
                
            </a>
            
            </li>
            <li>
            <a href="{{url('/dtkpi')}}">
                <span class="fa fa-check"></span>
                Data KPI
            </a>
            </li>
        
        
        </ul>
   
    
	</li>
<!--
	<li >
		<a href="{{url('/auth/register')}}">
			<span class="fa fa-check"></span>
			<span class="xn-text">Tambah Admin</span>
		</a>
</li>
-->
			
	
	 
@endsection

