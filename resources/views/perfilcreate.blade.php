<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
@extends('layouts.estilos')
@section('content')
<body>
    <!--Formulario Agregar Perfil Nuevo-->
    <form action="/perfiles" method="POST" role="form">
        @csrf()
        <legend><h1 class="display 1">Crear Perfil</h1></legend>

        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Escriba el Nombre">
        </div>

        <div class="form-group">
            <label for="">Apellido</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Escriba el Apellido">
        </div>

        <div class="form-group">
            <label for="">Sexo</label>
            <input type="text" class="form-control" id="sexo_id" name="sexo_id" placeholder="Escriba el Sexo">
        </div>

        <div class="form-group">
            <label for="">Cargo</label>
            <input type="text" class="form-control" id="cargo_id" name="cargo_id" placeholder="Escriba el Cargo">
        </div>

        <div class="form-group">
            <label for="">Entidad</label>
            <input type="text" class="form-control" id="entidad_id" name="entidad_id" placeholder="Escriba la Entidad">
        </div>

        <div class="form-group">
            <label for="">Usuario</label>
            <input type="text" class="form-control" id="user_id" name="user_id" placeholder="Escriba el Usuario">
        </div>

        <button type="submit" class="btn btn-outline-dark">GUARDAR</button>
    </form><br>
</body>
        <a class="btn btn-outline-dark" href="/" role="button">INICIO</a>
    @endsection
</html>
