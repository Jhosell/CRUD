<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@extends('layouts.estilos')
@section('content')
        <!--1. MENU LISTADO ENTIDADES-->
<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr class="table-secondary">
            <th><h1>ENTIDAD</h1></th>
            <th><h1>OPCIONES</h1></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rs as $item)
        <tr>
            <td>{{$item->entidad}}</td>
            <td>
                <a href="/entidades/edit/{{$item->id}}">Editar</a>
                <form action="{{url('entidades', $item->id)}}" method="POST" role="form" id="delete_form_{{$item->id}}">
                    @csrf()
                    @method('DELETE')
                <a href="javascript:{}" onclick="document.getElementById('delete_form_{{$item->id}}').submit();">Eliminar</a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<br>
    <!--BOTONES-->
    <table>
        <tr>
            <td><a class="btn btn-outline-dark" href="/entidades/create" role="button">CREAR NUEVA ENTIDAD</a></td>
            <td><a class="btn btn-outline-dark" href="/" role="button">INICIO</a></td>
        </tr>
    </table>


</body>
@endsection
</html>

