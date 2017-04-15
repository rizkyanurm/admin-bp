@include ('layouts._include.head')
<body class="body-full-height">
      <div class="login-container lightmode">

          <div class="login-box animated fadeInDown">
<!--
            <div align='center'>
                <img src="{{URL::to('assets/img/Text_Cusbag.png')}}" alt="Cus bag"/>
            </div>
-->

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

                  <div class="login-title"><strong>Log In</strong> to your account</div>
                  {!! Form::open(array('route'=>'login', 'class'=>'form-horizontal', 'id'=>'jvalidate', 'role'=>'form', 'novalidate'=>'novalidate')) !!}
                      {!! csrf_field() !!}
                  <div class="form-group">
                      <div class="col-md-12">
                          <input type="email" name="email" class="form-control" placeholder="E-mail"  value="{{ old('email') }}" />
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="col-md-12">
                            <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="col-md-6">
                          <input type="checkbox" name="remember"> Remember Me
                      </div>
                      <div class="col-md-6">
                          <button class="btn btn-info btn-block" type="submit">Log In</button>
                      </div>
                  </div>

<!--
                  <div class="login-subtitle">
                      Don't have an account yet? <a href="{{url('/auth/register')}}">Create an account</a>
                  </div>
-->
                  </form>
              </div>
              <div class="login-footer">
                  <div class="pull-left">
                      &copy; 2016 Bimaproteksi
                  </div>

              </div>
          </div>

      </div>


  </body>
  @include ('layouts._include.scripts')
</html>
