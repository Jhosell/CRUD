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
     <!--Formulario CREAR Sexo-->

     <form action="/sexos" method="POST" role="form">
        @csrf()
        <legend><h1 class="display 1">Ingrese Sexo</h1></legend>

        <div class="form-group">
            <label for="">Agregar Sexo</label>
            <input type="text" class="form-control" id="sexo" name="sexo" placeholder="Escriba el Sexo">
        </div>
        <button type="submit" class="btn btn-outline-dark">Guardar</button>
    </form><br>
    <a class="btn btn-outline-dark" href="/" role="button">INICIO</a>
</body>
@endsection
</html>
