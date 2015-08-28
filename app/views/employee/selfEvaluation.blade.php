@extends('employee.home_emp')

@section('content')

<div class="col-md-9">
	<!-- <form class="form-horizontal"> -->
		<div class="panel panel-default">
			<!-- <div class="row"> -->
				
			<div class="panel-heading">
				<h3 class="panel-title">Self Evaluation Leadership</h3>
			</div>

			<div class="panel-body">
				<p>Silahkan isi pertanyaan berikut sesuai skala berdasarkan kepercayaan, keyakinan, dan kejujuran terhadap diri Anda sendiri</p>
			
			<div class="panel-body">
				<div class="tocify-content"> 
				<ul>
				
					@include('employee._include.leadship1')
						   			
<!-- leadship2 -->

					<div class="leadship2" data-unique="leadship2">
						<h4> Komunikasi</h4>
						<!-- start block -->
						<div class="block">
						<ul>
							<li>
							<!-- Question -->
								<div>
									<p>Saya tidak mampu memprediksi masalah yang muncul dari dalam dan/atau luar departemen saya</p>
								</div>
								<!-- answer -->
								
								<div class="form-group 1" >
									<div class="col-md-4">
										<label class="check">
											<div class="iradio_minimal -grey" style="position:relative">
												<input class="iradio" type="radio" name="2" style="position:absolute; opacity:0;"></input>
												<ins class="icheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 50%; height: 50%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins>
												Sangat Tidak Sesuai
											</div>
										</label>
									</div>

									<div class="col-md-4">
										<label class="check">
											<div class="iradio_minimal -grey" style="position:relative">
												<input class="iradio" check="checked" type="radio" name="2" style="position:absolute; opacity:0;"></input>
												<ins class="icheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 50%; height: 50%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins>
												Tidak Sesuai
											</div>
										</label>
									</div>

									<div class="col-md-4">
										<label class="check">
											<div class="iradio_minimal -grey" style="position:relative">
												<input class="iradio" type="radio" name="2" style="position:absolute; opacity:0;"></input>
												<ins class="icheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 50%; height: 50%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins>
												Netral
											</div>
										</label>
									</div>

									<div class="col-md-4">
										<label class="check">
											<div class="iradio_minimal -grey" style="position:relative">
												<input class="iradio" check="checked" type="radio" name="2" style="position:absolute; opacity:0;"></input>
												<ins class="icheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 50%; height: 50%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins>
												Sesuai
											</div>
										</label>
									</div>

									<div class="col-md-4">
										<label class="check">
											<div class="iradio_minimal -grey" style="position:relative">
												<input class="iradio" check="checked" type="radio" name="2" style="position:absolute; opacity:0;"></input>
												<ins class="icheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 50%; height: 50%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins>
												Sangat Sesuai
											</div>
										</label>
									</div>

								</div>
								</li>
								<!-- end block -->
								</ul>
						<!-- end block -->
						</div>
					</div>

<!-- leadship3 -->					
					<div class="leadship3" data-unique="leadship3">
						<h4>Inisiatif</h4>	
						<div class="block">
						</div>
					</div>
<!-- leadship4 -->				
					<div class="leadship4" data-unique="leadship4">
						<h4 > Visioner</h4>
						<div class="block">
							
						</div>
					</div>
	
<!-- leadship5 -->
					<div class="leadship5" data-unique="leadship5">
						<h4 >Empowering</h4>
						<div class="block">
							
						</div>
						
					</div>
				</ul>

				 </div> 
				 </div>
				 </div>
			
				<!-- <div class="col-md-3" style="position:relative;">  
					<div id="tocify" class="tocify">
						<ul id="tocify-header0" class="tocify-header nav nav-list">
							<li class="tocify-item active" data-unique="leadship1" style="cursor:pointer;">
								<a> Leadship 1</a>
							</li>
						</ul>
						<ul id="tocify-header1" class="tocify-header nav nav-list">
							<li class="tocify-item active" data-unique="leadship2" style="cursor:pointer;">
								<a> Leadship 2</a>
							</li>
						</ul>
					    <ul id="tocify-header2" class="tocify-header nav nav-list">
					    	<li class="tocify-item active" data-unique="leadship3" style="cursor:pointer;">
								<a> Leadship 3</a>
							</li>
					    </ul>
					    <ul id="tocify-header3" class="tocify-header nav nav-list">
					    	<li class="tocify-item active" data-unique="leadship4" style="cursor:pointer;">
								<a> Leadship 4</a>
							</li>
					    </ul>
					    <ul id="tocify-header4" class="tocify-header nav nav-list">
					    	<li class="tocify-item active" data-unique="leadship5" style="cursor:pointer;">
								<a> Leadship 5</a>
							</li>
					    </ul>
					
				</div>
			<!-- </div> -->
				
		
			</div>
		</div>
  
 

 @endsection