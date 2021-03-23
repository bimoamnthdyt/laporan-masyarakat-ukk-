<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="sbadmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="sbadmin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="form-signin" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}
                                <label for="inputEmail" class="sr-only">Name</label>
                                <input type="text" name="name" id="inputName" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}"
                                    placeholder="Masukan Nama Anda" value="{{ old('name') }}" required autofocus>
                                @if($errors->has('name'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('name') }}
                                    </div>
                                @endif
                                <br>
                                <label for="inputNik" class="sr-only">Nik</label>
                                <input type="nik" name="nik" id="inputNik" value="{{ old('nik') }}"
                                    class="form-control {{ $errors->has('nik') ? 'is-invalid' : ''}}" placeholder="Nomor Induk Keluarga"
                                    required autofocus>
                                @if($errors->has('nik'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('nik') }}
                                    </div>
                                @endif
                                <br>
                                <label for="inputEmail" class="sr-only">Email address</label>
                                <input type="email" name="email" id="inputEmail" value="{{ old('email') }}"
                                    class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}" placeholder="Masukan Email Anda">
                                @if($errors->has('email'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                                <br>
                                <label for="inputPassword" class="sr-only">Password</label>
                                <input type="password" name="password" id="inputPassword"
                                    class="form-control {{ $errors->has('password') ? 'is-invalid' : ''}}" placeholder="Password" required>
                                @if($errors->has('password'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('password') }}
                                    </div>
                                @endif
                                <br>
                                <label for="inputPassword" class="sr-only">Password_Confirmation</label>
                                <input type="password" name="password_confirmation" id="inputPassword"
                                    class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : ''}}"
                                    placeholder="Password Confirmation" required>
                                @if($errors->has('password_confirmation'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('password_confirmation') }}
                                    </div>
                                @endif
                                <br>
                                <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
                                
                            </form>
                            
                            <div class="text-center">
                                <a class="small" href="{{ route('login')}}">Already have an account? Login!</a>
                            </div>
                            <hr>
                            <div class="text-center">
                            <p class="mt-5 mb-3 text-muted">&copy; LaporDong 2020 </p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="sbadmin/vendor/jquery/jquery.min.js"></script>
    <script src="sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="sbamdin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="sbamdin/js/sb-admin-2.min.js"></script>

</body>

</html>