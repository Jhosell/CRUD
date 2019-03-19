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
         <!--Formulario CREAR Modulo-->

         <form action="/modulos" method="POST" role="form">
        @csrf()
        <legend><h1 class="display 1">Ingresar Nuevo Modulo</h1></legend>

        <div class="form-group">
            <label for="">Agregar Modulo</label>
            <input type="text" class="form-control" id="modulo" name="modulo" placeholder="Escriba el Modulo">
        </div>
        <button type="submit" class="btn btn-outline-dark">GUARDAR</button>
    </form><br>
</body>
    <a class="btn btn-outline-dark" href="/" role="button">INICIO</a>
    @endsection
</html>
