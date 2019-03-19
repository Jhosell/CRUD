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
        <!--1. MENU LISTADO PERFIL-->
<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr class="table-secondary">
            <th><h1>NOMBRES</h1></th>
            <th><h1>APELLIDOS</h1></th>
            <th><h1>OPCIONES</h1></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rs as $item)
        <tr>
            <td>{{$item->nombres}}</td>
            <td>{{$item->apellidos}}</td>
            <td>
                <a href="/perfiles/edit/{{$item->id}}">Editar</a>

                <form action="{{url('perfiles', $item->id)}}" method="POST" role="form" id="delete_form_{{$item->id}}"><!--url la ruta perfiles es a donde te lleva luego de elminar, es la ruta no el campo-->
                    @csrf()
                    @method('DELETE')
                <a href="javascript:{}" onclick="document.getElementById('delete_form_{{$item->id}}').submit();">Eliminar</a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
    <!--BOTONES-->
    <table>
        <tr>
            <td><a class="btn btn-outline-dark" href="/perfiles/create" role="button">CREAR NUEVA ENTIDAD</a></td>
            <td><a class="btn btn-outline-dark" href="/" role="button">INICIO</a></td>
        </tr>
    </table>
</body>
@endsection
</html>

