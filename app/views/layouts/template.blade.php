<!DOCTYPE html>
<html lang="en">
	<head>        
		@include('layouts._include.head')                               
	</head>
	<body>
		<!-- START PAGE CONTAINER -->
		<div class="page-container">
			<!-- START PAGE SIDEBAR -->
			<div class="page-sidebar">
				<!-- START X-NAVIGATION -->
					@include('layouts._include.navigationleft')                               
				<!-- END X-NAVIGATION -->
			</div>
			<!-- END PAGE SIDEBAR -->
			<!-- PAGE CONTENT -->
			<div class="page-content">
				<!-- START X-NAVIGATION VERTICAL -->
				<ul class="x-navigation x-navigation-horizontal x-navigation-panel">
					@include('layouts._include.navigationtop')                               
				</ul>
				<!-- END X-NAVIGATION VERTICAL -->                     
				<!-- START BREADCRUMB -->
				<ul class="breadcrumb">
					@yield ('breadcrumbs')                           
				</ul>
				<!-- END BREADCRUMB -->                       
				<!-- PAGE CONTENT WRAPPER -->
				<div class="page-content-wrap">
        			@yield('content')
				</div>
				<!-- END PAGE CONTENT WRAPPER -->                                
			</div>            
			<!-- END PAGE CONTENT -->
		</div>
		<!-- END PAGE CONTAINER -->
		<!-- MESSAGE BOX-->
			@include('layouts._include.message')                               
		<!-- END MESSAGE BOX-->
	@include('layouts._include.scripts')  
	</body>
</html>