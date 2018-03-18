<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="{!! asset('Login_v1/images/icons/favicon.ico') !!}"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{!! asset('Login_v1/vendor/bootstrap/css/bootstrap.min.css') !!}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{!! asset('Login_v1/fonts/font-awesome-4.7.0/css/font-awesome.min.css') !!}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{!! asset('Login_v1/vendor/animate/animate.css') !!}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{!! asset('Login_v1/vendor/css-hamburgers/hamburgers.min.css') !!}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{!! asset('Login_v1/vendor/select2/select2.min.css') !!}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{!! asset('Login_v1/css/util.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('Login_v1/css/main.css') !!}">
<!--===============================================================================================-->
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{!! asset('Login_v1/images/img-01.png') !!}" alt="IMG">
                </div>
                 <div class="row">
                    
                        <div class="panel panel-default">
                            <div class="panel-heading"><h2>Login</h2><br></div>

                            <div class="panel-body">
                                {!! Form::open(['url'=>'login', 'class'=>'form-horizontal']) !!}
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    {!! Form::label('email', 'Alamat Email', ['class'=>'col-md-12 control-label']) !!}
                                    <div class="col-md-16">
                                        {!! Form::email('email', null, ['class'=>'form-control']) !!}
                                        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    {!! Form::label('password', 'Password', ['class'=>'col-md-12 control-label']) !!}
                                    <div class="col-md-16">
                                    {!! Form::password('password', ['class'=>'form-control']) !!}
                                    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                <div class="col-md-16 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                        {!! Form::checkbox('remember')!!} Ingat saya
                                        </label>
                                    </div>
                                </div>
                            </div>
                                <div class="form-group">
                                <div class="col-md-12 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                    </button>
                                    <!-- <a class="btn btn-link" href="{{ url('/password/reset') }}">Lupa password</a> -->
                                </div>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    

    
<!--===============================================================================================-->  
    <script src="{!! asset('Login_v1/vendor/jquery/jquery-3.2.1.min.js') !!}"></script>
<!--===============================================================================================-->
    <script src="{!! asset('Login_v1/vendor/bootstrap/js/popper.js') !!}"></script>
    <script src="{!! asset('Login_v1/vendor/bootstrap/js/bootstrap.min.js') !!}"></script>
<!--===============================================================================================-->
    <script src="{!! asset('Login_v1/vendor/select2/select2.min.js') !!}"></script>
<!--===============================================================================================-->
    <script src="{!! asset('Login_v1/vendor/tilt/tilt.jquery.min.js') !!}"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
<!--===============================================================================================-->
    <script src="{!! asset('Login_v1/js/main.js') !!}"></script>

</body>
</html>