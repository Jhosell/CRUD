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
     <!--Formulario CREAR Cargo Nuevo-->
     <form action="/cargos" method="POST" role="form">
        @csrf()
        <legend><h1 class="display 1">Crear Cargo</h1></legend>

        <div class="form-group">
            <label for="">Nombre del cargo</label>
            <input type="text" class="form-control" id="cargo" name="cargo" placeholder="Escriba el nombre del Cargo">
        </div>
        <button type="submit" class="btn btn-outline-dark">GUARDAR</button>
    </form><br>

    <a class="btn btn-outline-dark" href="/" role="button">INICIO</a>
</body>
@endsection
</html>
