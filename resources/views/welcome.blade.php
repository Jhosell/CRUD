<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INICIO</title>
</head>
<body>
@extends('layouts.estilos')
<!--extends lo que hace es anunciar que se va hacer uso de un css llamado layauts.pp-->
@section('content')

    <table class="table row align-items-center">
        <tr>
            <td><a class="btn btn-outline-dark" href="/entidades/list" role="button">ENTIDADES</a></td>
            <td><a class="btn btn-outline-dark" href="/cargos/list" role="button">CARGOS</a></td>
            <td><a class="btn btn-outline-dark" href="/perfiles/list" role="button">PERFILES</a></td>
            <td><a class="btn btn-outline-dark" href="/sexos/list" role="button">SEXOS</a></td>
            <td><a class="btn btn-outline-dark" href="/tipos/list" role="button">TIPOS</a></td>
            <td><a class="btn btn-outline-dark" href="/modulos/list" role="button">MODULOS</a></td>
            <td><a class="btn btn-outline-dark" href="/incidencias/list" role="button">INCIDENCIAS</a></td>
        </tr>
    </table>


</body>
@endsection
</html>
