<!DOCTYPE html>
<html lang="en" class="body-full-height">
	<head>        
		@include('layouts._include.head')                                 
	</head>
	<body>
		<div class="login-container">
			<div class="login-box animated fadeInDown">
				<div class="login-logo"></div>
				<div class="login-body">
					<div class="login-title"><strong>Log In</strong> to your account</div>
					{!! Form::open(['url' =>'','class' =>'form-horizontal','id'=>'login_app']) !!}
					<div class="form-group">
						<div class="col-md-12">
			                {!! Form::text('username', Input::old('username'), ['class' => 'form-control', 'placeholder' => 'Username']) !!}
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12">
			                {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6">
							<a href="#" class="btn btn-link btn-block">Forgot your password?</a>
						</div>
						<div class="col-md-6">
							{!!Form::submit('Log In',array('class'=>'btn btn-info btn-block'))!!}
						</div>
					</div>
					{!!Form::close()!!}
				</div>
				<div class="login-footer">
					<div class="pull-left">
						&copy; 2015-{{date('Y')}} BIMAPROTEKSI
					</div>
					<div class="pull-right">
						<a href="#">About</a> |
						<a href="#">Privacy</a> |
						<a href="#">Contact Us</a>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>






