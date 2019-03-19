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

    <form action="/incidencias" method="POST" role="form">
        <legend><h1 class="display 1">Crear Encidencia</h1></legend>

        <div class="form-group">
            <label for="">Titulo</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Escriba el titulo">
        </div>

        <div class="form-group">
            <label for="">Descripcion</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Escriba el modulo">
        </div>
            <br>
            <h3>AQUI VAN LOS CAMPOS CON RELACION</h3>
            <p>modulo_id // tipo_incidencia_id // user_id </p>
        <button type="submit" class="btn btn-outline-dark">GUARDAR</button>
    </form>
    <a class="btn btn-outline-dark" href="/" role="button">INICIO</a>

</body>
@endsection
</html>
