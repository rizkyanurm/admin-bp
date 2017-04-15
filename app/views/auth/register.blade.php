@include ('layouts._include.head')
<body class="body-full-height">
      <div class="login-container lightmode">

          <div class="login-box animated fadeInDown">
            <div align='center'>
                <img src="{{URL::to('assets/img/Text_Cusbag.png')}}" alt="Cus bag"/>
            </div>

              <div class="login-body">
@if (count($errors) > 0)
    <div class="alert alert-primary">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="login-title"><strong>Register</strong></div>

{!!Form::open(array('route'=>'register', 'class'=>'form-horizontal', 'id'=>'jvalidate', 'role'=>'form', 'novalidate'=>'novalidate')) !!}
                      {!! csrf_field() !!}
    {!! csrf_field() !!}

   <div class="form-group">
    <div class="col-md-12">
      
        <input type="text" name="name" placeholder="Name" class="form-control" /><br>
    </div>
    </div>


    <div class="form-group">
    <div class="col-md-12">
        <input type="email" name="email" placeholder="E-mail" class="form-control" > <br>
    </div>
    </div>

    <div class="form-group">
    <div class="col-md-12">
        <input type="password" name="password" placeholder="Password" class="form-control"><br>
    </div>
    </div>

    <div class="form-group">
    <div class="col-md-12">
        <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control"> <br>
    </div>
    </div>

    <div>
        <div class="col-md-6">
                          <button class="btn btn-info btn-block" type="submit">Register</button>
                      </div>
    </div>
{{!! Form::close()!!}}
</div>
 <div class="login-footer">
                  <div class="pull-left">
                      &copy; 2015 Cusbag
                  </div>

     