<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LISTA</title>
</head>
<body>
    <table class="table tlable-hover">
        <thead>
            <tr>
                <th>Usuarios</th>
                <th>Correo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rs as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>
                        <a href="/usuarios/edit/{{$item->id}}">Editar</a>
                        <form action="{{url('usuarios', $item->id)}}" method="POST" role="form" id="delete_form_{{$item->id}}">
                            @csrf()
                            @method('DELETE')
                            <a href="javascript:{}" onclick="document.getElementById('delete_form_{{$item->id}}').submit();">Eliminar</a>;
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
