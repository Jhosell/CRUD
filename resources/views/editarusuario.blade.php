<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     <!--1. FORMULARIO EDICION USUARIO-->
     <form action="{{url('usuarios', $usuario->id)}}" method="POST" role="form">
        @csrf()
        @method('PATCH')
        <legend><strong>USUARIO</strong></legend>

        <div class="form-group">
            <label for="">Nombre</label>
            <input value="{{$usuario->name}}" name="name" type="text" class="form-control" id="name" placeholder="Ingresar el Nombre">
        </div>
        <div class="form-group">
            <label for="">Correo</label>
            <input value="{{$usuario->email}}" name="email" type="text" class="form-control" id="email" placeholder="Ingresar el Correo">
        </div>
        <div class="form-group">
            <label for="">Contraseña</label>
            <input value="{{$usuario->password}}" name="password" type="text" class="form-control" id="password" placeholder="Ingresar Contraseña">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</body>
</html>
