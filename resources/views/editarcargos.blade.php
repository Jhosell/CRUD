<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cargo</title>
</head>
@extends('layouts.estilos')
@section('content')
<body>
           <!--1. FORMULARIO EDICION CARGOS-->
        <form action="{{url('cargos', $cargo->id)}}" method="POST" role="form">
        @csrf()
        @method ('PATCH')
        <legend><h1 class="display 1">Agregar Cargo</h1></legend>

        <div class="form-group">
            <label for="">Nombre del Cargo</label>
            <input value="{{$cargo->cargo}}" name="cargo" type="text" class="form-control" id="cargo" placeholder="Ingresar Nuevo Registro">
        </div>
        <button type="submit" class="btn btn-outline-dark">Guardar</button>
    </form>
    @endsection
</body>
</html>
