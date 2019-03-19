<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ENTIDAD</title>
</head>
@extends('layouts.estilos')
@section('content')
<body>
    <!--Formulario CREAR Entidad Nueva-->
    <form action="/entidades" method="POST" role="form">
        @csrf()
        <legend><h1 class="display 1">Crear Entidad</h1></legend>

        <div class="form-group">
            <label for="">Nombre de la entidad</label>
            <input type="text" class="form-control" id="entidad" name="entidad" placeholder="Escriba el nombre de la Entidad">
        </div>
        <button type="submit" class="btn btn-outline-dark">GUARDAR</button>
    </form><br>
</body>
<a class="btn btn-outline-dark" href="/" role="button">INICIO</a>
@endsection
</html>
