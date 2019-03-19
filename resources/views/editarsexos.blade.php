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
        <!--1. FORMULARIO EDICION SEXOS-->
    <form action="{{url('sexos', $sexo->id)}}" method="POST" role="form">
        @csrf()
        @method('PATCH')
        <legend><h1 class="display 1">Agregar Sexo</h1></legend>

        <div class="form-group">
            <label for="">Nombre de la Entidad</label>
            <input value="{{$sexo->sexo}}" name="sexo" type="text" class="form-control" id="sexo" placeholder="Ingresar Nuevo Registro">
        </div>
        <button type="submit" class="btn btn-outline-dark">GUARDAR</button>
    </form>
        <br>
    <a class="btn btn-outline-dark" href="/" role="button">INICIO</a>
</body>
@endsection
</html>
