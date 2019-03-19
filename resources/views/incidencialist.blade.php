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
        <!--1. MENU LISTADO INCIDENCIA-->
<table class="table table-hover">
    <thead>
        <tr>
            <th>Incidencia</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rs as $item)
        <tr>
            <td>{{$item->titulo}}</td>
            <td>{{$item->descripcion}}</td>
            <td>
                <a href="/incidencias/edit/{{$item->id}}">Editar</a>

                <form action="{{url('incidencias', $item->id)}}" method="POST" role="form" id="delete_form_{{$item->id}}"><!--url la ruta perfiles es a donde te lleva luego de elminar, es la ruta no el campo-->
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
        <a href="/incidencias/create"><button type="submit" class="btn btn-outline-dark">CREAR NUEVO</button></a>
        <br>
        <a href="/"><button type="submit" class="btn btn-outline-dark">HOME</button></a>
</body>
@endsection
</html>

