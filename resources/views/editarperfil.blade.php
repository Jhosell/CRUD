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
        <!--1. FORMULARIO EDICION PERFIL-->
    <form action="{{url('perfiles', $perfil->id )}}" method="POST" role="form">
        @csrf()
        @method('PATCH')
        <legend><h1 class="display 1">Editar Perfil</h1></legend>

        <div class="form-group">
            <label for="">Nombre</label>
            <input value="{{$perfil->nombres}}" name="nombres" type="text" class="form-control" id="nombres" placeholder="Ingresar Nuevo Nombre">
        </div>
        <div class="form-group">
            <label for="">Apellido</label>
            <input value="{{$perfil->apellidos}}" name="apellidos" type="text" class="form-control" id="apellidos" placeholder="Ingresar Nuevo Apellido">
        </div>
        <div class="form-group">
            <label for="">Sexo</label>
            <input value="{{$perfil->sexo_id}}" name="sexo_id" type="text" class="form-control" id="sexo_id" placeholder="Ingresar Sexo">
        </div>
        <div class="form-group">
            <label for="">Cargo</label>
            <input value="{{$perfil->cargo_id}}" name="cargo_id" type="text" class="form-control" id="cargo_id" placeholder="Ingresar cargo">
        </div>
        <div class="form-group">
            <label for="">Entidad</label>
            <input value="{{$perfil->entidad_id}}" name="entidad_id" type="text" class="form-control" id="entidad_id" placeholder="Ingresar entdidad">
        </div>
        <div class="form-group">
            <label for="">Usuario</label>
            <input value="{{$perfil->user_id}}" name="user_id" type="text" class="form-control" id="user_id" placeholder="Ingresar user">
        </div>
        <button type="submit" class="btn btn-outline-dark">Guardar</button>
    </form>
</body>
@endsection
</html>
