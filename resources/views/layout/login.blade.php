<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>System | Log in</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>My</b>APP</a>
        </div>
        <div class="login-box-body">
            <p class="login-box-msg">Ingreso al sistema</p>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{ Form::open(['route'=>'login.ingresar', 'method'=>'post']) }}
                <div class="form-group has-feedback">
                    {{
                        Form::text(
                            'codigo',
                            null,
                            ['class' => 'form-control', 'placeholder' => 'Código de registro', 'required']
                        )
                    }}
                    <span class="glyphicon glyphicon-bookmark form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    {{
                        Form::text(
                            'dni',
                            null,
                            ['class' => 'form-control', 'placeholder' => 'Usuario', 'required']
                        )
                    }}
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input name="password" type="password" class="form-control" placeholder="Contraseña" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        {{ Form::submit('Ingresar', ['class' => 'btn btn-primary btn-block btn-flat']) }}
                    </div>
                </div>
            {{ Form::close() }}
        </div>
    </div>
    <script src="{{ asset('js/jquery-2.2.3.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
