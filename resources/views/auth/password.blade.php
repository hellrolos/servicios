<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/app.css" />
</head>
<body>
    <div class="container">
        <hr>
        @if(session()->has('passwords'))
            <div class="alert alert-info">{{ session('passwords') }}</div>
        @endif
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1 class="panel-title">Bienvenido {{ Auth()->User()->username}}</h1>
                        <h4>Aquí podras cambiar tu contraseña</h4>
                    </div>
                    <div class="panel-body">
                        <div class="container">
                            <form method="POST" action="{{ route('passwordnew') }}">
                                {{ csrf_field() }}
                                 <div class="form-group">
                                    <label for="passwordold">Contraseña anterior</label>
                                    <input class="form-control" type="password" name="passwordold" placeholder="Introduce tu Contraseña Anterior">
                                    {!! $errors->first('passwordold', '<span class="help-block">:message</span>') !!}
                                </div>
                                <div class="form-group">
                                    <label for="passwordnew">Contraseña Nueva</label>
                                    <input class="form-control" type="password" name="passwordnew" placeholder="Introduce tu Contraseña Nueva">
                                    {!! $errors->first('passwordnew', '<span class="help-block">:message</span>') !!}
                                </div>
                                 <div class="form-group">
                                    <label for="passwordrep">Repetir Contraseña</label>
                                    <input class="form-control" type="password" name="passwordrep" placeholder="Introduce tu Contraseña Nueva otra vez">
                                    {!! $errors->first('passwordrep', '<span class="help-block">:message</span>') !!}
                                </div>
                                <button class="btn btn-primary btn-block">Cambiar</button>
                            </form>
                        </div>
                        <div class="container">
                            <form method="POST" action="{{ route('logout') }}">
                            {{ csrf_field() }}
                            <button class="btn btn-danger btn-block">Cerrar Sesión</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>