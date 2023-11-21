<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>System Name | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('template/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.css') }}">
    <!-- Logo for demo purposes -->
    <link rel="shortcut icon" type="" href="{{ asset('template/img/default-logo.png') }}">

    <style type="text/css">
        .login-box{
            box-shadow: 0 20px 30px rgba(0, 0, 0, 0.2) !important;
        }
        .login-logo{
            -webkit-animation: showSlowlyElement 700ms !important; 
            animation: showSlowlyElement 700ms !important;
        }
        .input-group{
            -webkit-animation: showSlowlyElement 700ms !important; 
            animation: showSlowlyElement 700ms !important;
        }
        .icheck-primary{
            -webkit-animation: showSlowlyElement 700ms !important; 
            animation: showSlowlyElement 700ms !important;
        }
        .col-4{
            -webkit-animation: showSlowlyElement 700ms !important; 
            animation: showSlowlyElement 700ms !important;
        }
        /*.btn-primary{
            background-color: #1f5036 !important;
            border: #1f5036 !important;
        }*/
        #particles-js {
            position: fixed;
            width: 100%;
            height: 100%;
            background-color: #5f6f81;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 100%;
            z-index: -1;
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div id="particles-js"></div>
    <div class="login-box">
    
        <div class="card">
            <div class="card-body">
                <div class="login-logo">
                    <a href="">
                        <img src="{{ asset('template/img/default-logo.png') }}" class="img-circle" width="103px" height="100px">
                    </a>
                    <center style="font-family: Courier;font-size: 1em; font-weight: bolder;">
                        System Name
                    </center>
                </div>
                <p class="login-box-msg">Sign in to start your session</p>
               
                <form action="{{route('postLogin')}}" method="post" id="login" class="form-horizontal">
                    @csrf

                    @if(session('error'))
                        <div class="alert alert-danger" style="font-size: 12pt;">
                            <i class="fas fa-exclamation-triangle "></i> {{session('error')}}
                        </div>
                    @endif

                    @if(session('success'))
                        <div class="alert alert-success" style="font-size: 10pt;">
                        <i class="fas fa-check"></i> {{session('success')}}
                        </div>
                    @endif

                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-12">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="username" placeholder="Username" value="{{ old('username') }}" autofocus="">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-user"></span>
                                        </div>
                                    </div>
                                </div>
                                <span style="color: #FF0000; font-size: 8pt; margin-top: -15px;" class="form-text text-center">@error('username') {{ $message }} @enderror</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-12">
                                <div class="input-group">
                                    <input type="password" class="form-control" name="password" id="myInput" placeholder="Password">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>
                                <span id="password" style="color: #FF0000; font-size: 8pt;" class="form-text text-center">@error('password') {{ $message }} @enderror</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mt-4">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember" onclick="myFunction()">
                                <label for="remember">Show Password</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-info btn-block">
                                <i class="fas fa-sign-in-alt"></i> Sign In
                            </button>
                        </div>
                    </div>
                </form>   
            </div>
        </div>
    </div>

    <script src="{{ asset('particles/particles.js') }}"></script>
    <script src="{{ asset('particles/app.js') }}"></script>
    <!-- jQuery -->
    <script src="{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('template/dist/js/adminlte.min.js') }}"></script>
    <!-- jquery-validation -->
    <script src="{{ asset('template/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('template/plugins/jquery-validation/additional-methods.min.js') }}"></script>

    <script src="{{ asset('js/loginValidation.js') }}"></script>

    <script>
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>
</html>