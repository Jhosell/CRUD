<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <!--1. FORMULARIO EDICION INCIDENCIA-->
    <form action="{{url('incidencias', $incidencia->id)}}" method="POST" role="form">
        @csrf()
        @method ('PATCH')
        <legend>Agregar Modulo</legend>

        <div class="form-group">
            <label for="">Incidencia</label>
            <input value="{{$incidencia->titulo}}" name="titulo" type="text" class="form-control" id="titulo" placeholder="Ingresar Nuevo Registro">
        </div>
        <div class="form-group">
            <label for="">Incidencia</label>
            <input value="{{$incidencia->descripcion}}" name="descripcion" type="text" class="form-control" id="descripcion" placeholder="Ingresar Nuevo Registro">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</body>
</html>
